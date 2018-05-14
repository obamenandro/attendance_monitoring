<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserEligibilities Controller
 *
 * @property \App\Model\Table\UserEligibilitiesTable $UserEligibilities
 *
 * @method \App\Model\Entity\UserEligibility[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserEligibilitiesController extends AppController
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
        $userEligibilities = $this->paginate($this->UserEligibilities);

        $this->set(compact('userEligibilities'));
    }

    /**
     * View method
     *
     * @param string|null $id User Eligibility id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userEligibility = $this->UserEligibilities->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userEligibility', $userEligibility);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userEligibility = $this->UserEligibilities->newEntity();
        if ($this->request->is('post')) {
            $userEligibility = $this->UserEligibilities->patchEntity($userEligibility, $this->request->getData());
            if ($this->UserEligibilities->save($userEligibility)) {
                $this->Flash->success(__('The user eligibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user eligibility could not be saved. Please, try again.'));
        }
        $users = $this->UserEligibilities->Users->find('list', ['limit' => 200]);
        $this->set(compact('userEligibility', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Eligibility id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userEligibility = $this->UserEligibilities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userEligibility = $this->UserEligibilities->patchEntity($userEligibility, $this->request->getData());
            if ($this->UserEligibilities->save($userEligibility)) {
                $this->Flash->success(__('The user eligibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user eligibility could not be saved. Please, try again.'));
        }
        $users = $this->UserEligibilities->Users->find('list', ['limit' => 200]);
        $this->set(compact('userEligibility', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Eligibility id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userEligibility = $this->UserEligibilities->get($id);
        if ($this->UserEligibilities->delete($userEligibility)) {
            $this->Flash->success(__('The user eligibility has been deleted.'));
        } else {
            $this->Flash->error(__('The user eligibility could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
