<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\ValidateEmailAndPasswordForm;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Mailer\Email;

/**
 * Admin/Dummy Controller
 *
 *
 * @method \App\Model\Entity\Admin/Dummy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SystemAdminsController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('system_admin');
        $this->loadComponent('Upload');    ## Load upload component for uploading images
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

    public function index() {
        $admin_count = $this->User->find('all')
            ->where(['Users.role' => 1]);

        $hr_count = $this->User->find('all')
            ->where(['Users.role' => 3]);

        $employee_count = $this->User->find('all')
            ->where(['Users.role' => 2]);

        $teaching_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.designation' => 1]);

        $no_teaching_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.designation' => 2]);

        $mt_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.department' => 2]);

        $mare_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.department' => 3]);

        $gened_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.department' => 1]);

        $staff_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.department' => 6]);

        $na_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.department' => 4]);

        $maintenance_count = $this->User->find('all')
            ->where(['Users.role' => 2, 'Users.department' => 7]);

        $total = $maintenance_count->count() + $na_count->count() + $mt_count->count() + $mare_count->count() + $gened_count->count() + $staff_count->count();

        $this->set('admin', $admin_count->count());
        $this->set('hr', $hr_count->count());
        $this->set('employee', $employee_count->count());
        $this->set('teaching', $total != 0 ? round($teaching_count->count()/$total*100) : 0);
        $this->set('no_teaching', $total != 0 ? round($no_teaching_count->count()/$total*100) : 0);
        $this->set('gened', $total != 0 ? round($gened_count->count()/$total*100) : 0);
        $this->set('staff', $total != 0 ? round($staff_count->count()/$total*100) : 0);
        $this->set('mt', $total != 0 ? round($mt_count->count()/$total*100) : 0);
        $this->set('mare', $total != 0 ? round($mare_count->count()/$total*100) : 0);
        $this->set('na', $total != 0 ? round($na_count->count()/$total*100) : 0);
        $this->set('maintenance', $total != 0 ? round($maintenance_count->count()/$total*100) : 0);
        $this->set('total_users', $admin_count->count() + $employee_count->count() + $hr_count->count());
    }

    public function login() {
        $this->viewBuilder()->setLayout('');
        $this->request->session()->destroy();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $redirectUrl = '/systemAdmins/login';
                if ($user['role'] != 3) {
                    $this->Flash->error(__('Invalid email address or password.'));
                    $this->request->session()->destroy();
                } else {
                    $this->Auth->setUser($user);
                    $redirectUrl = '/systemAdmins/statistics';
                }
                return $this->redirect($redirectUrl);
            } else {
                $this->Flash->error(__('Invalid email address or password.'));
            }
        }
    }

    public function usersList() {
        $users = $this->User->find('all')
            ->where(['Users.role' => 2])
            ->toArray();
        $this->set('designation', Configure::read('designation'));
        $this->set(compact('users'));
    }

    public function auditTrail() {
        $conditions = [];
        if ($this->request->query) {
            if (!empty($this->request->query['date'])) {
                if ($this->request->query['date'] == "month") {
                    $conditions['MONTH(UserLogs.created)'] = date('m');
                }
                if ($this->request->query['date'] == "week") {
                    $conditions['UserLogs.created'] = date('Y-m-d', strtotime("last saturday"));
                }
                if ($this->request->query['date'] == "year") {
                    $conditions['YEAR(UserLogs.created)'] = date('Y');
                }
            }
            if (!empty($this->request->query['action'])) {
                if ($this->request->query['action'] != 'all') {
                    $conditions['UserLogs.action LIKE'] = '%'.$this->request->query['action'].'%';
                }
            }
        }
        $logs = $this->UserLog->find('all')
            ->where([$conditions])
            ->contain(['Users'])
            ->toArray();
        $this->set(compact('logs'));
    }

    public function edit () {
        $this->autoRender = false;
        if ($this->request->is('POST')) {
            $data     = $this->request->getData();
            $userEdit = $this->User->get($data['id']);
            if (empty($data['password'])) {
                unset($data['password']);
            }
            if (empty($data['email'])) {
                unset($data['email']);
            }
            $userEdit = $this->User->patchEntity($userEdit, $data);
            $validate = new ValidateEmailAndPasswordForm();
            if ($validate->execute($data)) {
                if ($this->User->save($userEdit)) {
                    $this->Flash->success(__('Your employee has been successfully updated.'));
                    $user_logs = $this->UserLog->newEntity();
                    $user_logs = $this->UserLog->patchEntity($user_logs, [
                        'user_id' => $this->Auth->user('id'),
                        'page'    => 'USERS>EDIT',
                        'action'  => 'Update'
                    ]);
                    $this->UserLog->save($user_logs);
                    return $this->redirect('/systemAdmins/lists');
                }
            } else {
                $this->Flash->error(__('Your employee has been failed to saved.'));
                return $this->redirect('/systemAdmins/lists');
            }
        }
    }
}
