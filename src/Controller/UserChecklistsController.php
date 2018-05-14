<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserChecklists Controller
 *
 * @property \App\Model\Table\UserChecklistsTable $UserChecklists
 *
 * @method \App\Model\Entity\UserChecklist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserChecklistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Requirements']
        ];
        $userChecklists = $this->paginate($this->UserChecklists);

        $this->set(compact('userChecklists'));
    }

    /**
     * View method
     *
     * @param string|null $id User Checklist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userChecklist = $this->UserChecklists->get($id, [
            'contain' => ['Users', 'Requirements']
        ]);

        $this->set('userChecklist', $userChecklist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userChecklist = $this->UserChecklists->newEntity();
        if ($this->request->is('post')) {
            $userChecklist = $this->UserChecklists->patchEntity($userChecklist, $this->request->getData());
            if ($this->UserChecklists->save($userChecklist)) {
                $this->Flash->success(__('The user checklist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user checklist could not be saved. Please, try again.'));
        }
        $users = $this->UserChecklists->Users->find('list', ['limit' => 200]);
        $requirements = $this->UserChecklists->Requirements->find('list', ['limit' => 200]);
        $this->set(compact('userChecklist', 'users', 'requirements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Checklist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userChecklist = $this->UserChecklists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userChecklist = $this->UserChecklists->patchEntity($userChecklist, $this->request->getData());
            if ($this->UserChecklists->save($userChecklist)) {
                $this->Flash->success(__('The user checklist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user checklist could not be saved. Please, try again.'));
        }
        $users = $this->UserChecklists->Users->find('list', ['limit' => 200]);
        $requirements = $this->UserChecklists->Requirements->find('list', ['limit' => 200]);
        $this->set(compact('userChecklist', 'users', 'requirements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Checklist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userChecklist = $this->UserChecklists->get($id);
        if ($this->UserChecklists->delete($userChecklist)) {
            $this->Flash->success(__('The user checklist has been deleted.'));
        } else {
            $this->Flash->error(__('The user checklist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
