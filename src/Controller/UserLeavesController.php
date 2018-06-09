<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserLeaves Controller
 *
 *
 * @method \App\Model\Entity\UserLeave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserLeavesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('user');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userLeaves = $this->paginate($this->UserLeaves);

        $this->set(compact('userLeaves'));
    }

    /**
     * View method
     *
     * @param string|null $id User Leave id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userLeave = $this->UserLeaves->get($id, [
            'contain' => []
        ]);

        $this->set('userLeave', $userLeave);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $used_leave   = count($this->UserLeave->find('all')->where(['user_id' => $this->Auth->User('id')]));
        $userLeave    = $this->UserLeave->newEntity();
        if ($this->request->is('post')) {
            $data               = $this->request->getData();
            if ($used_leave > $this->Auth->User('total_leave')) {
                $this->Flash->error(__('You already reach the maximum leave.'));
                return $this->redirect('/UserLeaves/add');
            }
            $userLeave          = $this->UserLeave->patchEntity($userLeave, $data);
            $userLeave->user_id = $this->Auth->User('id');
            if ($data['date_start'] > $data['date_end']) {
                $userLeave->errors('date_start', 'Date start should be less than Date end.');
            }
            if ($this->UserLeave->save($userLeave)) {
                $this->Flash->success(__('The user leave has been saved.'));
                return $this->redirect('/UserLeaves/add');
            }
            $this->Flash->error(__('The user leave could not be saved. Please, try again.'));
        }
        $this->set(compact('userLeave','used_leave'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Leave id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userLeave = $this->UserLeaves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userLeave = $this->UserLeaves->patchEntity($userLeave, $this->request->getData());
            if ($this->UserLeaves->save($userLeave)) {
                $this->Flash->success(__('The user leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user leave could not be saved. Please, try again.'));
        }
        $this->set(compact('userLeave'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userLeave = $this->UserLeaves->get($id);
        if ($this->UserLeaves->delete($userLeave)) {
            $this->Flash->success(__('The user leave has been deleted.'));
        } else {
            $this->Flash->error(__('The user leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
