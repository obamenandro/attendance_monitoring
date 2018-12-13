<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\EmployeeRegistrationForm;
use App\Form\AdminAddEmployeeForm;
use App\Form\EmployeeEditForm;
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

        $total = $teaching_count->count() + $no_teaching_count->count() + $mt_count->count() + $mare_count->count() + $gened_count->count() + $staff_count->count();

        $this->set('admin', $admin_count->count());
        $this->set('hr', $hr_count->count());
        $this->set('employee', $employee_count->count());
        $this->set('teaching', $total != 0 ? round($teaching_count->count()/$total*100) : 0);
        $this->set('no_teaching', $total != 0 ? round($no_teaching_count->count()/$total*100) : 0);
        $this->set('gened', $total != 0 ? round($gened_count->count()/$total*100) : 0);
        $this->set('staff', $total != 0 ? round($staff_count->count()/$total*100) : 0);
        $this->set('mt', $total != 0 ? round($mt_count->count()/$total*100) : 0);
        $this->set('mare', $total != 0 ? round($mare_count->count()/$total*100) : 0);
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

        $this->set(compact('users'));
    }

    public function audit_trail() {

    }
}
