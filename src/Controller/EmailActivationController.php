<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailActivation Controller
 *
 * @property \App\Model\Table\EmailActivationTable $EmailActivation
 *
 * @method \App\Model\Entity\EmailActivation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailActivationController extends AppController
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
        $emailActivation = $this->paginate($this->EmailActivation);

        $this->set(compact('emailActivation'));
    }

    /**
     * View method
     *
     * @param string|null $id Email Activation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailActivation = $this->EmailActivation->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('emailActivation', $emailActivation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailActivation = $this->EmailActivation->newEntity();
        if ($this->request->is('post')) {
            $emailActivation = $this->EmailActivation->patchEntity($emailActivation, $this->request->getData());
            if ($this->EmailActivation->save($emailActivation)) {
                $this->Flash->success(__('The email activation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email activation could not be saved. Please, try again.'));
        }
        $users = $this->EmailActivation->Users->find('list', ['limit' => 200]);
        $this->set(compact('emailActivation', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Activation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailActivation = $this->EmailActivation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailActivation = $this->EmailActivation->patchEntity($emailActivation, $this->request->getData());
            if ($this->EmailActivation->save($emailActivation)) {
                $this->Flash->success(__('The email activation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email activation could not be saved. Please, try again.'));
        }
        $users = $this->EmailActivation->Users->find('list', ['limit' => 200]);
        $this->set(compact('emailActivation', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Activation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailActivation = $this->EmailActivation->get($id);
        if ($this->EmailActivation->delete($emailActivation)) {
            $this->Flash->success(__('The email activation has been deleted.'));
        } else {
            $this->Flash->error(__('The email activation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
