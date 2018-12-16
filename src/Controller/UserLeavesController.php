<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

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
        $used_leave   = $this->UserLeave->find('all')->where([
            'user_id'       => $this->Auth->User('id'),
            'status'        => 1,
            'del_flg'       => 0,
            'YEAR(created)' => date('Y')
        ])->toArray();
        $diff = 0;
        foreach ($used_leave as $key => $value) {
            $diff+=abs(strtotime($value['date_start']->i18nFormat('yyyy-MM-dd')) - strtotime($value['date_end']->i18nFormat('yyyy-MM-dd')))/(60 * 60 * 24)+1;
        }
        $userLeave    = $this->UserLeave->newEntity();
        if ($this->request->is('post')) {
            $data               = $this->request->getData();
            if ($diff > $this->Auth->User('total_leave')) {
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
                $user_logs = $this->UserLog->newEntity();
                $user_logs = $this->UserLog->patchEntity($user_logs, [
                    'user_id' => $this->Auth->user('id'),
                    'page'    => 'USERS>ADD LEAVE',
                    'action'  => 'Added'
                ]);
                $this->UserLog->save($user_logs);
                return $this->redirect('/UserLeaves/add');
            }
            $this->Flash->error(__('The user leave could not be saved. Please, try again.'));
        }

        $user_leave_records = $this->UserLeave->find()
            ->where([
                'user_id' => $this->Auth->User('id'),
                'del_flg' => 0
            ])
            ->toArray();

        $this->set('leave_reason', Configure::read('leave_reason'));
        $this->set(compact('userLeave','used_leave', 'user_leave_records', 'diff'));
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
        if (!$id)  return $this->redirect('/UserLeaves/add');
        if (!$this->UserLeave->exists(['id' => $id])) return $this->redirect('/UserLeaves/add');

        $leave = $this->UserLeave->get($id);

        if ($this->request->is('POST')) {
            $data  = $this->request->getData();
            $leave = $this->UserLeave->patchEntity($leave, $data);
            if ($this->UserLeave->save($leave)) {
                $this->Flash->success('Your leave has been successfully updated.');
                $user_logs = $this->UserLog->newEntity();
                $user_logs = $this->UserLog->patchEntity($user_logs, [
                    'user_id' => $this->Auth->user('id'),
                    'page'    => 'USERS>UPDATE LEAVE',
                    'action'  => 'Update'
                ]);
                $this->UserLog->save($user_logs);
                return $this->redirect('/UserLeaves/edit/'.$id);
            }
        }

        $this->set(compact('leave'));
    }

    public function delete($id) {
        $this->autoRender = false;
        if (!$id)  return $this->redirect('/UserLeaves/add');
        if (!$this->UserLeave->exists(['id' => $id])) return $this->redirect('/UserLeaves/add');

        $user = $this->UserLeave->get($id);
        $user = $this->UserLeave->patchEntity($user, ['del_flg' => 1],['validate' => false]);

        if ($this->UserLeave->save($user)) {
            $this->Flash->success(__('Your leave has been successfully deleted.'));
            $user_logs = $this->UserLog->newEntity();
            $user_logs = $this->UserLog->patchEntity($user_logs, [
                'user_id' => $this->Auth->user('id'),
                'page'    => 'USERS>DELETE LEAVE',
                'action'  => 'Update'
            ]);
            $this->UserLog->save($user_logs);
            return $this->redirect('/UserLeaves/add');
        } else {
            $this->Flash->error(__('Your leave has been failed to deleted.'));
            return $this->redirect('/UserLeaves/add');
        }
    }
}
