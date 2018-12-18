<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Collection\Collection;

/**
 * Admin/UserLeaves Controller
 *
 *
 * @method \App\Model\Entity\Admin/UserLeave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserLeavesController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
        $this->loadComponent('Upload');    ## Load upload component for uploading images
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $request_leaves = $this->UserLeaves->find('all')
            ->contain(['Users'])
            ->where([
                'UserLeaves.status'              => Configure::read('leave_status.Pending'),
                'YEAR(UserLeaves.date_start) >=' => date('Y-m-d')
            ])
            ->toArray();
        $this->set('leave_reason', Configure::read('leave_reason'));
        $this->set(compact('request_leaves'));
    }

    public function leaveApprove($leave_id) {
        $this->autoRender = false;
        $leave_request = $this->UserLeave->find('all')
            ->contain(['Users'])
            ->where([
                'UserLeaves.id'               => $leave_id,
                'UserLeaves.status'           => Configure::read('leave_status.Pending'),
                'YEAR(UserLeaves.date_start)' => date('Y')
            ])
            ->toArray();
        if ($leave_request) {
            $diff        = 0;
            $total_leave = 0;
            foreach ($leave_request as $key => $val) {
                $diff=abs(strtotime($val['date_start']->i18nFormat('yyyy-MM-dd')) - strtotime($val['date_end']->i18nFormat('yyyy-MM-dd')))/(60 * 60 * 24)+1;
                $total_leave = $val['user']['total_leave'];
                $user_id = $val['user']['id'];
            }

            //used leave
            $used_leave   = $this->UserLeave->find('all')->where([
                'user_id'       => $user_id,
                'status'        => 1,
                'del_flg'       => 0,
                'YEAR(created)' => date('Y')
            ])->toArray();

            foreach ($used_leave as $key => $value) {
                $diff+=abs(strtotime($value['date_start']->i18nFormat('yyyy-MM-dd')) - strtotime($value['date_end']->i18nFormat('yyyy-MM-dd')))/(60 * 60 * 24)+1;
            }

            if ($diff > $total_leave) {
                $this->Flash->error(__('This User has already reach the maximum leave.'));
                return $this->redirect('/admin/UserLeaves');
            }
            $leave_request           = $this->UserLeave->get($leave_id);
            $leave_request->status   = Configure::read('leave_status.Accept');
            $leave_request->modified = date('Y-m-d H:i:s');

            if ($this->UserLeave->save($leave_request)) {
                $this->Flash->success('Leave request has been successfully approved.');
                return $this->redirect('/admin/user_leaves');
            }
        }

        return $this->redirect('/admin/user_leaves');
    }

    public function leaveDecline() {
        $this->autoRender = false;
        if ($this->request->is('POST')) {
            $data = $this->request->data;

            $leave_accept           = $this->UserLeave->get($data['id']);
            $leave_accept           = $this->UserLeave->patchEntity($leave_accept, $data);
            $leave_accept->modified = date('Y-m-d H:i:s');

            if ($this->UserLeave->save($leave_accept)) {
                $this->Flash->success('Leave request has been successfully declined.');
                return $this->redirect('/admin/user_leaves');
            }
        }
        return $this->redirect('/admin/user_leaves');
    }

    public function view_leave() {
        $records = $this->UserLeave->find('all')
            ->contain('Users', function ($r) {
                return $r
                ->where(['role' => Configure::read('role.employee')]);
            })
            ->where([
                'UserLeaves.del_flg'          => 0,
                'UserLeaves.status !='        => 0,
                'YEAR(UserLeaves.date_start)' => date('Y')
            ])
            ->toArray();

        $this->set('leave_reason', Configure::read('leave_reason'));
        $this->set(compact('records'));
    }
    public function delete($id) {
        $this->autoRender = false;
        if (!$id)  return $this->redirect('/admin/user_leaves/view_leave');
        if (!$this->UserLeave->exists(['id' => $id])) return $this->redirect('/admin/user_leaves/view_leave');

        $user = $this->UserLeave->get($id);
        $user = $this->UserLeave->patchEntity($user, ['del_flg' => 1],['validate' => false]);

        if ($this->UserLeave->save($user)) {
            $this->Flash->success(__('Your leave has been successfully deleted.'));
            return $this->redirect('/admin/user_leaves/view_leave');
        } else {
            $this->Flash->error(__('Your leave has been failed to deleted.'));
            return $this->redirect('/admin/user_leaves/view_leave');
        }
    }

    public function leave_report() {
        $users = $this->User->find('all')
            ->contain('UserLeaves')
            ->where([
                'Users.role'          => 2,
                'YEAR(Users.created)' => date('Y'),
                'Users.del_flg'       => 0
            ])
            ->toArray();

        foreach ($users as $key => $val) {
            $collection = new Collection($val['user_leaves']);
            $users[$key]['total_used_leave'] = $collection->sumOf(
                function ($v) {
                    if ($v['status'] == 1) {
                        $diff=abs(strtotime($v['date_start']->i18nFormat('yyyy-MM-dd')) - strtotime($v['date_end']->i18nFormat('yyyy-MM-dd')))/(60 * 60 * 24)+1;
                        return $diff;
                    }
                }
            );
        }
        $this->set(compact('users'));
    }
}
