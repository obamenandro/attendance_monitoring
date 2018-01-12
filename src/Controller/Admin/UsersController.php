<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
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
        $this->Auth->allow(['register']);
        $this->Auth->allow(['add']);
        $this->Auth->allow(['edit']);
        $this->Auth->allow(['login']);
        $this->Auth->allow(['employee']);
        $this->Auth->allow(['add_attendance']);
        $this->Auth->allow(['view_info']);
        $this->Auth->allow(['add_department']);
        $this->Auth->allow(['add_subject']);
        $this->Auth->allow(['list_department']);
        $this->Auth->allow(['list_subject']);
        $this->Auth->allow(['success']);
        $this->Auth->allow(['user_home']);
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
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $redirectUrl = '/admin/users/login';
                if ($user['role'] === 2) {
                    $this->Flash->error(__('Invalid email address or password.'));
                } else {
                    $this->Auth->setUser($user);
                    $redirectUrl = '/admin/users';
                }
                return $this->redirect($redirectUrl);
            } else {
                $this->Flash->error(__('Invalid email address or password.'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function add() {

    }

    public function edit() {

    }

    public function employee() {

    }

    public function add_attendance() {

    }

    public function view_info() {

    }

    public function add_department() {

    }

    public function add_subject() {

    }

    public function list_department() {

    }

    public function list_subject() {

    }

    public function success() {

    }

    public function user_home() {

    }
}
