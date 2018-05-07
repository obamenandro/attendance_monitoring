<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\EmployeeRegistrationForm;
use App\Form\EmployeeEditForm;
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
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
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

    public function login() {
        $this->layout = false;
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
        $users = $this->User->find('all')
                ->contain([
                    'UserDepartments' => [
                        'Departments' => [
                            'fields' => ['name'],
                            'conditions' => [
                                'Departments.del_flg' => 0
                            ]
                        ]
                    ]
                ])
                ->where([
                    'Users.del_flg' => 0,
                    'Users.role'    => Configure::read('role.employee')
                ])
                ->toArray()
                ;
        $this->set('civil_status',Configure::read('civil_status'));
        $this->set('designation', Configure::read('designation'));
        $this->set(compact('users'));
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
                    'role'                   => Configure::read('role.employee'),
                    'password'               => $data['password']
                ];
                $entity = $this->User->newEntity();
                $entity = $this->User->patchEntity($entity, $userData);
                if ($user = $this->User->save($entity)) {
                    $userId    = $user->id;
                    $send_mail = $email->transport('gmail')
                       ->to($userData['email'])
                       ->from('nameihris@gmail.com')
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
                        $addImage->image = '/uploads/employee/'.$userId.'/'.$profileImage;
                        $this->User->save($addImage);
                    }
                    if (!empty($data['sss_number'])        ||
                        !empty($data['gsis_number'])       ||
                        !empty($data['philhealth_number']) ||
                        !empty($data['pagibig_number'])    ||
                        !empty($data['tin_number']))
                    {
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
                        $this->Government->save($government);
                    }


                    if (!empty($data['department_id'])) {
                        $this->UserDepartment = TableRegistry::get('UserDepartments');
                        $userDepartment       = [];

                        foreach ($data['department_id'] as $department) {
                            $userDepartment[] = [
                                'department_id' => $department,
                                'user_id'       => $userId
                            ];
                        }

                        $userDepartmentEntity = $this->UserDepartment->newEntities($userDepartment);
                        foreach ($userDepartmentEntity as $entity) {
                            $this->UserDepartment->save($entity);
                        }
                    }

                    if (!empty($data['subject_id'])) {
                        $this->UserSubject = TableRegistry::get('UserSubjects');
                        $userSubject       = [];
                        foreach ($data['subject_id'] as $subject) {
                            $userSubject[] = [
                                'subject_id' => $subject,
                                'user_id'    => $userId
                            ];
                        }
                        $userSubjectEntity = $this->UserSubject->newEntities($userSubject);
                        foreach ($userSubjectEntity as $entity) {
                            $this->UserSubject->save($entity);
                        }
                    }
                    $this->Flash->success(__('Your employee has been successfully added.'));
                    return $this->redirect('/admin/users/');

                }
            } else {
                $this->Flash->error(__("There's an error occur saving has been failed."));
            }
        }
        $this->set(compact('addForm', 'civilStatus', 'departments', 'jobtype', 'designation', 'subjects'));
    }

    public function edit($id = NULL) {
        $this->User           = TableRegistry::get('Users');
        $civilStatus          = Configure::read('civil_status');
        $designation          = Configure::read('designation');
        $jobtype              = Configure::read('job_type');

        //get departments
        $departments = $this->Department->find('all')
                       ->where(['del_flg' => 0]);

        //get subjects
        $subjects = $this->Subject->find('all')
                    ->where(['del_flg' => 0]);

        //get all employee
        $employee = $this->User->find('all')
                    ->contain(['UserDepartments', 'UserSubjects', 'Governments'])
                    ->where(['Users.id' => $id, 'Users.role' => 2])
                    ->first();

        //get all government
        $government = $this->Government->find('all')
                      ->where(['Governments.user_id' => $id])
                      ->first();

        if (!$employee) {
            return $this->redirect('/admin/users/');
        }

        $userDepartments = $this->UserDepartment->find('list',[
                            'keyField'   => 'department_id',
                            'valueField' => 'id'
                        ])
                        ->where(['user_id' => $id, 'del_flg' => 0])
                        ->toArray();

        $userEdit = $this->User->get($id);
        if ($this->request->is('POST')) {
            $data               = $this->request->data;
            $userEdit           = $this->User->patchEntity($userEdit, $data);
            $userEdit->modified = date('Y-m-d H:i:s');

            //validate government data
            $this->__government_validation($data, $userEdit);
            if ($this->request->data['image']['size'] == 0) {
                $userEdit->image = $employee['image'];
            }
            if ($this->User->save($userEdit)) {
                $this->UserDepartment->deleteAll(['user_id' => $id]);
                if ($this->request->data['image']['size'] != 0) {
                    $this->Upload->upload($this->request->data['image']);
                    if($this->Upload->uploaded) {
                        $imageName = md5(time());
                        $this->Upload->file_new_name_body = $imageName;
                        $this->Upload->process('webroot/uploads/employee/'.$id.'/');
                        $profileImage = $this->Upload->file_dst_name;

                        $addImage = $this->User->get($id);
                        $addImage->image = '/uploads/employee/'.$id.'/'.$profileImage;
                        $this->User->save($addImage);
                    }
                }
                if (!empty($data['sss_number'])        ||
                    !empty($data['gsis_number'])       ||
                    !empty($data['philhealth_number']) ||
                    !empty($data['pagibig_number'])    ||
                    !empty($data['tin_number']))
                {
                    $governmentData = [
                        'sss_number'        => $data['sss_number'],
                        'gsis_number'       => $data['gsis_number'],
                        'philhealth_number' => $data['philhealth_number'],
                        'pagibig_number'    => $data['pagibig_number'],
                        'tin_number'        => $data['tin_number']
                    ];
                    if ($government) {
                        $governmentEdit = $this->Government->get($government['id']);
                        $governmentEdit = $this->Government->patchEntity($governmentEdit, $governmentData);
                        $this->Government->save($governmentEdit);
                    } else {
                        $governmentData['user_id'] = $userId;
                        $government                = $this->Government->newEntity();
                        $government                = $this->Government->patchEntity($government, $governmentData);
                        $this->Government->save($government);
                    }
                }
                if (!empty($data['department_id'])) {
                    $this->UserDepartment = TableRegistry::get('UserDepartments');
                    $userDepartment       = [];

                    foreach ($data['department_id'] as $department) {
                        $userDepartment[] = [
                            'department_id' => $department,
                            'user_id'       => $id
                        ];
                    }

                    $userDepartmentEntity = $this->UserDepartment->newEntities($userDepartment);
                    foreach ($userDepartmentEntity as $entity) {
                        $this->UserDepartment->save($entity);
                    }
                }

                if (!empty($data['subject_id'])) {
                    $this->UserSubject = TableRegistry::get('UserSubjects');
                    $userSubject       = [];
                    foreach ($data['subject_id'] as $subject) {
                        $userSubject[] = [
                            'subject_id' => $subject,
                            'user_id'    => $id
                        ];
                    }
                    $userSubjectEntity = $this->UserSubject->newEntities($userSubject);
                    foreach ($userSubjectEntity as $entity) {
                        $this->UserSubject->save($entity);
                    }
                }

                $this->Flash->success(__('Your employee has been successfully updated.'));
                return $this->redirect(['action' => 'index']);
            }
        }

        $this->set(compact(
            'userEdit',
            'employee',
            'civilStatus',
            'designation',
            'jobtype',
            'subjects',
            'departments',
            'userDepartments',
            'government'
        ));
    }
    private function __government_validation($data, $entity) {
        //validation for sss
        if (!empty($data['sss_number'])) {
            if (!preg_match("/^[1-9][0-9]*$/", $data['sss_number'])) {
                $entity->errors('sss_number',"SSS number must be a number.");
            }
            else if (strlen($data['sss_number']) != 9) {
                $entity->errors('sss_number',"SSS number must be 9 numbers.");
            }
        }
        //validation for gsis
        if (!empty($data['gsis_number'])) {
            if (!preg_match("/^[1-9][0-9]*$/", $data['gsis_number'])) {
                $entity->errors('gsis_number',"GSIS number must be a number.");
            }
            else if (strlen($data['gsis_number']) != 9) {
                $entity->errors('gsis_number',"GSIS number must be 9 numbers.");
            }
        }
        //validation for tin number
        if (!empty($data['tin_number'])) {
            if (!preg_match("/^[1-9][0-9]*$/", $data['tin_number'])) {
                $entity->errors('tin_number',"TIN number must be a number.");
            }
            else if (strlen($data['tin_number']) != 9) {
                $entity->errors('tin_number',"TIN number must be 9 numbers.");
            }
        }
        //validation for pagibig number
        if (!empty($data['pagibig_number'])) {
            if (!preg_match("/^[1-9][0-9]*$/", $data['pagibig_number'])) {
                $entity->errors('pagibig_number',"PAGIBIG number must be a number.");
            }
            else if (strlen($data['pagibig_number']) != 9) {
                $entity->errors('pagibig_number',"PAGIBIG number must be 9 numbers.");
            }
        }
        //validation for philhealth number
        if (!empty($data['philhealth_number'])) {
            if (!preg_match("/^[1-9][0-9]*$/", $data['philhealth_number'])) {
                $entity->errors('philhealth_number',"PHILHEALTH number must be a number.");
            }
            else if (strlen($data['philhealth_number']) != 9) {
                $entity->errors('philhealth_number',"PHILHEALTH number must be 9 numbers.");
            }
        }
    }
    public function add_attendance() {

    }

    public function view($id = NULL) {
        $civilStatus    = Configure::read('civil_status');
        $employee       = $this->User->find()
                        ->contain(['Governments'])
                        ->where([
                            'Users.id'      => $id,
                            'Users.role'    => 2,
                            'Users.del_flg' => 0
                        ])
                        ->first()
                        ->toArray();

        $attendanceLists = $this->Attendance->find('all')
                         ->where(['Attendances.user_id' => $id])
                         ->toArray();

        if ($this->request->is('POST')) {
            $data            = $this->request->data;
            $entity          = $this->Attendance->newEntity();
            $entity          = $this->Attendance->patchEntity($entity, $data);
            $entity->user_id = $id;
            $entity->date    = $data['date'];
            if ($this->Attendance->save($entity)) {
                $this->Flash->success(__('Attendance has been successfully added.'));
                return $this->redirect('/admin/users/view/'.$id);
            } else {
                $this->Flash->success(__('Attendance has been failed to added.'));
                return $this->redirect('/admin/users/view/'.$id);
            }
        }


        $this->set(compact('employee', 'civilStatus', 'attendanceLists'));
        $this->set('status', Configure::read('status'));
        $this->set('_serialize',['employee', 'civilStatus', 'attendanceLists']);
    }

    public function attendanceEdit($user_id) {
        $this->autoRender = false;
        if ($this->request->is('POST')) {
            $data                     = $this->request->data;
            $attendanceEdit           = $this->Attendance->get($data['id']);
            $attendanceEdit           = $this->Attendance->patchEntity($attendanceEdit, $data);
            $attendanceEdit->date     = $data['date'];
            $attendanceEdit->modified = date('Y-m-d H:i:s');

            if ($this->Attendance->save($attendanceEdit)) {
                $this->Flash->success('Attendance has been successfully updated.');
                return $this->redirect('/admin/users/view/'.$user_id);
            } else {
                $this->Flash->error('Attendance has been failed to updated.');
                return $this->redirect('/admin/users/view/'.$user_id);
            }
        }

        return $this->redirect('/admin/users/');
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
        }
    }

    public function email_test() {
        $email = new Email('default');
        $send_mail = $email->transport('gmail')
           ->to("obamenandro@gmail.com")
           ->from('nameihris@gmail.com')
           ->emailFormat('html')
           ->subject(__('Namei Polytechnic Institute'))
           ->send();
        echo "SUCCESSS!";
        die();
    }

    public function user_change_password() {

    }

    public function confirmation () {

    }

    public function request_leave () {

    }

    public function add_personal () {
        
    }

    public function add_educational () {
        
    }

    public function add_picture () {
        
    }

    public function add_checklist() {
        
    }

    public function edit_personal () {
        
    }

    public function edit_educational () {
        
    }

    public function edit_picture () {
        
    }

    public function edit_checklist() {
        
    }

    public function new_password() {
        
    }
}
