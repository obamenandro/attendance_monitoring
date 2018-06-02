<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

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
        $this->viewBuilder()->setLayout('Admin');
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
                        ->where(['UserLeaves.status' => Configure::read('leave_status.Pending')])
                        ->toArray();

        $this->set(compact('request_leaves'));
    }

    public function leaveApprove($leave_id) {
        $this->autoRender = false;
        $leave_request = $this->UserLeave->find('all')
                       ->where([
                            'UserLeaves.id'     => $leave_id, 
                            'UserLeaves.status' => Configure::read('leave_status.Pending')
                        ])
                       ->toArray();
        if ($leave_request) {
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
            ->where(['UserLeaves.del_flg' => 0, 'UserLeaves.status !=' => 0])
            ->toArray();

        $this->set(compact('records'));
    }
}
