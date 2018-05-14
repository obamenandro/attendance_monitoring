<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserAttainments Controller
 *
 * @property \App\Model\Table\UserAttainmentsTable $UserAttainments
 *
 * @method \App\Model\Entity\UserAttainment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserAttainmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userAttainments = $this->paginate($this->UserAttainments);

        $this->set(compact('userAttainments'));
    }

    /**
     * View method
     *
     * @param string|null $id User Attainment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAttainment = $this->UserAttainments->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userAttainment', $userAttainment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAttainment = $this->UserAttainments->newEntity();
        if ($this->request->is('post')) {
            $userAttainment = $this->UserAttainments->patchEntity($userAttainment, $this->request->getData());
            if ($this->UserAttainments->save($userAttainment)) {
                $this->Flash->success(__('The user attainment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user attainment could not be saved. Please, try again.'));
        }
        $users = $this->UserAttainments->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAttainment', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Attainment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAttainment = $this->UserAttainments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAttainment = $this->UserAttainments->patchEntity($userAttainment, $this->request->getData());
            if ($this->UserAttainments->save($userAttainment)) {
                $this->Flash->success(__('The user attainment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user attainment could not be saved. Please, try again.'));
        }
        $users = $this->UserAttainments->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAttainment', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Attainment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAttainment = $this->UserAttainments->get($id);
        if ($this->UserAttainments->delete($userAttainment)) {
            $this->Flash->success(__('The user attainment has been deleted.'));
        } else {
            $this->Flash->error(__('The user attainment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
