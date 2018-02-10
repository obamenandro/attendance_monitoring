<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\EmployeeRegistrationForm;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Mailer\Email;

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
        $this->loadComponent('Upload');    ## Load upload component for uploading images
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
            'firstname'              => 'admin',
            'lastname'               => '',
            'bday'                   => '',
            'address'                => '',
            'contact'                => '123',
            'place_of_birth'         => '',
            'citizenship'            => '',
            'civil_status'           => '',
            'government_id'          => '1234',
            'educational_attainment' => '',
            'password'               => 'admin',
            'email'                  => 'admin@gmail.com'
        ]);

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

    public function index() {

    }

    public function add() {
        $addForm          = new EmployeeRegistrationForm();
        $civilStatus      = Configure::read('civil_status');
        $designation      = Configure::read('designation');
        $jobtype          = Configure::read('job_type');
        $this->Department = TableRegistry::get('Departments');
        $this->Government = TableRegistry::get('Governments');
        $this->Subject    = TableRegistry::get('Subjects');

        $departments = $this->Department->find('all')
            ->where(['del_flg' => 0]);

        $subjects = $this->Subject->find('all')
            ->where(['del_flg' => 0]);

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if ($addForm->execute($data)) {
                $data['password'] = substr(md5(microtime()), rand(0, 26), 10);;
                $email = new Email('default');
                $userData = [
                    'firstname'              => $data['firstname'],
                    'middlename'             => $data['middlename'],
                    'lastname'               => $data['lastname'],
                    'birthdate'              => $data['birthdate'],
                    'address'                => $data['address'],
                    'contact'                => $data['contact'],
                    'email'                  => $data['email'],
                    'place_of_birth'         => $data['place_of_birth'],
                    'citizenship'            => $data['citizenship'],
                    'civil_status'           => $data['civil_status'],
                    'position'               => $data['position'],
                    'jobtype'                => $data['jobtype'],
                    'designation'            => $data['designation'],
                    'password'               => $data['password']
                ];
                $entity = $this->User->newEntity();
                $entity = $this->User->patchEntity($entity, $userData);
                if ($user = $this->User->save($entity)) {
                    $userId    = $user->id;
                    $send_mail = $email->transport('gmail')
                       ->to($userData['email'])
                       ->from('NAMEI Polytechnic')
                       ->emailFormat('html')
                       ->template('temporary_password_mail')
                       ->viewVars([
                            'user_name' => $userData['firstname'],
                            'password'  => $userData['password']
                        ])
                       ->subject(__('Namei Polytechnic Institute'))
                       ->send();
                    $this->Upload->upload($data['image']);
                    if($this->Upload->uploaded) {
                        $imageName = md5(time());
                        $this->Upload->file_new_name_body = $imageName;
                        $this->Upload->process('uploads/employee/'.$userId.'/');
                        $profileImage = $this->Upload->file_dst_name;

                        $addImage = $this->User->get($userId);
                        $addImage->image = 'uploads/employee/'.$userId.'/'.$profileImage;
                        $this->User->save($addImage);
                    }
                    $governmentData = [
                        'user_id'           => $userId,
                        'sss_number'        => $data['sss_number'],
                        'gsis_number'       => $data['gsis_number'],
                        'philhealth_number' => $data['philhealth_number'],
                        'pagibig_number'    => $data['pagibig_number'],
                        'tin_number'        => $data['tin_number']
                    ];
                    $government = $this->Government->newEntity();
                    $government = $this->Government->patchEntity($government, $governmentData);
                    if ($this->Government->save($government)) {
                        $this->Flash->success(__('Your employee has been successfully added.'));
                        return $this->redirect('/admin/users/');
                    } else {
                        $this->Flash->error(__("There's an error occur saving has been failed."));
                    }
                }
            } else {
                $this->Flash->error(__("There's an error occur saving has been failed."));
            }
        }
        $this->set(compact('addForm', 'civilStatus', 'departments', 'jobtype', 'designation', 'subjects'));
    }

    public function edit() {

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
    public function image_upload() {
        http://codefiz.com/image-uploading-cakephp-3-x/
        $this->Users = TableRegistry::get('Users');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $image = $this->request->data["image"];
            $this->Upload->upload($image);
            if($this->Upload->uploaded) {
                $name=md5(time());
                $this->Upload->file_new_name_body = $name;
                $this->Upload->process('uploads/user_images/');
                $profileImage = $this->Upload->file_dst_name;
            }

            // if ($this->Images->save($user)) {
            //     $this->Flash->success(__('The user has been saved.'));
            //     return $this->redirect(['action' => 'index']);
            // } else {
            //     $this->Flash->error(__('The user could not be saved. Please, try again.'));
            // }
        }
        // $this->set(compact('user'));
        // $this->set('_serialize', ['user']);
    }


    public function user_change_password() {

    }
}
