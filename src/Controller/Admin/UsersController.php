<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Form\LoginForm;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Event\Event;

/**
 * Admin/Users Controller
 *
 *
 * @method \App\Model\Entity\Admin/User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('Admin');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'login', 'register']);
        $this->User = TableRegistry::get('Users');
    }

    public function register() 
    {
        $entity = $this->User->newEntity();
        $entity = $this->User->patchEntity($entity, [
            'firstname' => 'admin',
            'lastname' => '',
            'bday'=>'',
            'address'=>'',
            'contact'=>'123',
            'place_of_birth'=>'',
            'citizenship'=>'',
            'civil_status'=>'',
            'government_id'=>'1234',
            'educational_attainment'=>'',
            'password'=>'admin',
            'email' => 'admin@gmail.com', ]);
        
        if ($this->User->save($entity)) {
            die();
        }
    }

    public function login() 
    {
        $this->request->session()->destroy();
        // Modelless intantiate for form validation
        $loginForm = new LoginForm();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $redirectUrl = '/admin/users/login';
                if ($user['role'] === 2) {
                    $this->Flash->error(__('Incorrect Login'));
                } else {
                    $this->Auth->setUser($user);
                    $redirectUrl = '/admin/users/add';
                    return $this->redirect($redirectUrl);
                }
            } else {
                $this->Flash->error(__('Incorrect Login'));
            }
        }
    }
    public function add() {

    }

    public function admin_index() {

    }

    public function admin_login() {

    }

    public function admin_employee() {

    }

    public function admin_add_attendance() {

    }

    public function admin_view_info() {

    }

    public function admin_edit() {

    }

    public function admin_add_department() {

    }

    public function admin_add_subject() {

    }

    public function admin_list_department() {

    }

    public function admin_list_subject() {

    }

    public function admin_success() {

    }

    public function user_home() {

    }
}
