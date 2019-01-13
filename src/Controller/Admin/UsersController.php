<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\EmployeeRegistrationForm;
use App\Form\AdminAddEmployeeForm;
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
        $this->Auth->allow(['add', 'login', 'register', 'forgot_password', 'email_activation']);
        $this->User = TableRegistry::get('Users');
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
        $this->viewBuilder()->setLayout('');
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
        if ($this->request->session()->check('Flash') && empty($this->request->session()->read('Flash'))) {
            $this->request->session()->delete('Flash');
        }
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        if ($this->request->session()->check('Flash') && empty($this->request->session()->read('Flash'))) {
            $this->request->session()->delete('Flash');
        }
        $conditions = [];
        if ($this->request->query) {
            if (!empty($this->request->query['firstname'])) {
                $conditions['Users.firstname LIKE'] = '%'.$this->request->query['firstname'].'%';
            }
            if (!empty($this->request->query['user_id'])) {
                $conditions['Users.id'] = $this->request->query['user_id'];
            }
            if (!empty($this->request->query['designation_id'])) {
                $conditions['Users.designation'] = $this->request->query['designation_id'];
            }
        }
        $conditions['Users.del_flg']    = 0;
        $conditions['Users.role']       = Configure::read('role.employee');
        $users = $this->User->find('all')
            ->where([$conditions])
            ->toArray();
        $this->set('civil_status',Configure::read('civil_status'));
        $this->set('designation', Configure::read('designation'));
        $this->set('departments', Configure::read('departments'));
        $this->set(compact('users'));
    }

    /**
     * adding employee first part
     */
    public function add() {
        //custom validation
        $add_form = new AdminAddEmployeeForm();
        $session  = $this->request->session();

        if ($session->check('Data.User')) {
            $session_data = $session->read('Data.User');
            $this->set(compact('session_data'));
        }

        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if ($add_form->execute($data)) {
                $this->request->session()->write('Data.User', $data);
                return $this->redirect('/admin/users/add_personal');
            }

        }

        //Boostrap dynamic variables
        $departments  = Configure::read('departments');
        $designation  = Configure::read('designation');
        $jobtype      = Configure::read('job_type');

        $this->set(compact(
            'departments',
            'designation',
            'jobtype',
            'add_form'
        ));
    }

    public function delete($id) {
        $this->autoRender = false;
        if (!$id)  return $this->redirect('/admin/users');
        if (!$this->User->exists(['id' => $id])) return $this->redirect('/admin/users');

        $user = $this->User->get($id);
        $user = $this->User->patchEntity($user, ['del_flg' => 1],['validate' => false]);
        if ($this->User->save($user)) {
            $this->UserChecklist->deleteAll(['user_id' => $id]);
            $this->UserEligibility->deleteAll(['user_id' => $id]);
            $this->UserLeave->deleteAll(['user_id' => $id]);
            $this->WorkExperience->deleteAll(['user_id' => $id]);
            $this->UserAttainment->deleteAll(['user_id' => $id]);
            $this->Seminar->deleteAll(['user_id' => $id]);
            $this->Flash->success(__('Your employee has been successfully deleted.'));
            $user_logs = $this->UserLog->newEntity();
            $user_logs = $this->UserLog->patchEntity($user_logs, [
                'user_id' => $this->Auth->user('id'),
                'page'    => 'EMPLOYEE>DELETE EMPLOYEE',
                'action'  => 'Delete'
            ]);
            $this->UserLog->save($user_logs);
            return $this->redirect('/admin/users');
        } else {
            $this->Flash->error(__('Your employee has been failed to deleted.'));
            return $this->redirect('/admin/users');
        }
    }

    /**
     * Add personal information 2nd part
     */
    public function add_personal() {
        $add_personal = new EmployeeRegistrationForm;
        $session      = $this->request->session();

        if ($session->check('Data.User')) {
            $session_data = $session->read('Data.User');
            $this->set(compact('session_data'));
        }

        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if ($add_personal->execute($data)) {
                if (isset($session_data)) {
                    $data = array_merge($data, $session_data);
                }
                $session->write('Data.User', $data);
                return $this->redirect('/admin/users/add_educational');
            }
        }

        $civil_status = Configure::read('civil_status');
        $gender       = Configure::read('gender');

        $this->set(compact(
            'civil_status',
            'gender',
            'add_personal'
        ));
    }
    /**
     * add educational third part
     */
    public function add_educational () {
        $session = $this->request->session();
        if ($session->check('Data')) {
            $session_data = $session->read('Data');
            $session->delete('Data.Doctorate');
            $session->delete('Data.Master');
            $session->delete('Data.Secondary');
            $session->delete('Data.Elementary');
            $session->delete('Data.Elegibility');
            $session->delete('Data.Work_experience');
            $session->delete('Data.College');
        }

        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if (isset($session_data)) {
                $data = array_merge($data, $session_data);
            }
            $session->write('Data', $data);
            return $this->redirect('/admin/users/add_checklist');
        }
    }
    /**
     * add checklist fourth part
     */
    public function add_checklist() {
        $session = $this->request->session();
        if ($session->check('Data')) {
            $session_data = $session->read('Data');
        }
        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if (isset($session_data)) {
                $data = array_merge($data, $session_data);
            }
            $session->write('Data', $data);
            return $this->redirect('/admin/users/add_picture');
        }

        $checklists = Configure::read('checklists');
        $this->set(compact('checklists'));
    }
    /**
     * add picture last part
     */
    public function add_picture () {
        $session = $this->request->session();
        if ($session->check('Data')) {
            $session_data = $session->read('Data');
        }
        if ($this->request->is('post')) {
            $data                  = $this->request->getData();
            $user_data['password'] = substr(md5(microtime()), rand(0, 26), 10);
            $user_data['role']     = Configure::read('role.employee');
            $user_data             = array_merge($user_data, $session_data['User']);
            $email                 = new Email('default');
            $user_entity           = $this->User->newEntity();
            $user_entity           = $this->User->patchEntity($user_entity, $user_data);
            if ($user = $this->User->save($user_entity)) {
                $user_id   = $user->id;
                $send_mail = $email->transport('gmail')
                   ->to($user_data['email'])
                   ->from('nameihris@gmail.com')
                   ->emailFormat('html')
                   ->template('temporary_password_mail')
                   ->viewVars([
                        'user_name' => $user_data['firstname'],
                        'password'  => $user_data['password']
                    ])
                   ->subject(__('Namei Polytechnic Institute'))
                   ->send();

                $this->Upload->upload($data['image']);
                if($this->Upload->uploaded) {
                    $image_name = md5(time());
                    $this->Upload->file_new_name_body = $image_name;
                    $this->Upload->process('uploads/employee/'.$user_id.'/');
                    $profile_image    = $this->Upload->file_dst_name;
                    $add_image        = $this->User->get($user_id);
                    $add_image->image = '/uploads/employee/'.$user_id.'/'.$profile_image;
                    $this->User->save($add_image);
                }
                //for user_checklists
                if ($session->check('Data.Requirement')) {
                    $requirement_id = [];
                    foreach ($session->read('Data.Requirement.requirement_id') as $requirement) {
                        $requirement_id[] = [
                            'requirement_id' => $requirement,
                            'user_id'        => $user_id
                        ];
                    }
                    if (!empty($requirement_id)) {
                        $user_checklist_entity = $this->UserChecklist->newEntities($requirement_id);
                        foreach ($user_checklist_entity as $entity) {
                            $this->UserChecklist->save($entity);
                        }
                    }
                }
                //for work experience
                if ($session->check('Data.Work_experience')) {
                    $work_experience_data = $session->read('Data.Work_experience');
                    if (!empty($work_experience_data['company_name'])) {
                        $work_experience      = [
                            'user_id'      => $user_id,
                            'start_work'   => $work_experience_data['start_work'],
                            'end_work'     => $work_experience_data['end_work'],
                            'position'     => $work_experience_data['position'],
                            'company_name' => $work_experience_data['company_name']
                        ];
                        $work_experience_entity = $this->WorkExperience->newEntity();
                        $work_experience_entity = $this->WorkExperience->patchEntity($work_experience_entity, $work_experience);
                        $this->WorkExperience->save($work_experience_entity);
                    }
                }
                //for eligibility
                if ($session->check('Data.Elegibility')) {
                    $user_eligibilities      = $session->read('Data.Elegibility');
                    if (!empty($user_eligibilities['exam_name'])) {
                        $user_eligibilities_data = [
                            'user_id'     => $user_id,
                            'exam_name'   => $user_eligibilities['exam_name'],
                            'license_no'  => $user_eligibilities['license_no'],
                            'valid_until' => $user_eligibilities['valid_until']
                        ];
                        $user_eligibility_entity = $this->UserEligibility->newEntity();
                        $user_eligibility_entity = $this->UserEligibility->patchEntity($user_eligibility_entity, $user_eligibilities_data);
                        $this->UserEligibility->save($user_eligibility_entity);
                    }
                }
                //for Doctorate
                if ($session->check('Data.Doctorate')) {
                    $doctorate      = $session->read('Data.Doctorate');
                    if (!empty($doctorate['school_name'])) {
                        $doctorate_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $doctorate['school_name'],
                            'course'         => $doctorate['course'],
                            'units'          => $doctorate['units'],
                            'year_graduated' => $doctorate['year_graduated'],
                            'degree'         => Configure::read('degree.Doctorate')
                        ];
                        $user_attainment_doctorate_entity = $this->UserAttainment->newEntity();
                        $user_attainment_doctorate_entity = $this->UserAttainment->patchEntity($user_attainment_doctorate_entity, $doctorate_data);
                        $this->UserAttainment->save($user_attainment_doctorate_entity);
                    }
                }
                //for Master
                if ($session->check('Data.Master')) {
                    $master      = $session->read('Data.Master');
                    if (!empty($master['school_name'])) {
                        $master_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $master['school_name'],
                            'course'         => $master['course'],
                            'units'          => $master['units'],
                            'year_graduated' => $master['year_graduated'],
                            'degree'         => Configure::read('degree.Master')
                        ];
                        $user_attainment_master_entity = $this->UserAttainment->newEntity();
                        $user_attainment_master_entity = $this->UserAttainment->patchEntity($user_attainment_master_entity, $master_data);
                        $this->UserAttainment->save($user_attainment_master_entity);
                    }
                }
                //for College
                if ($session->check('Data.College')) {
                    $college      = $session->read('Data.College');
                    if (!empty($college['school_name'])) {
                        $college_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $college['school_name'],
                            'course'         => $college['course'],
                            'level_attained' => $college['level_attained'],
                            'year_graduated' => $college['year_graduated'],
                            'degree'         => Configure::read('degree.College')
                        ];
                        $user_attainment_college_entity = $this->UserAttainment->newEntity();
                        $user_attainment_college_entity = $this->UserAttainment->patchEntity($user_attainment_college_entity, $college_data);
                        $this->UserAttainment->save($user_attainment_college_entity);
                    }
                }
                //for Secondary
                if ($session->check('Data.Secondary')) {
                    $secondary      = $session->read('Data.Secondary');
                    if (!empty($secondary['school_name'])) {
                        $secondary_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $secondary['school_name'],
                            'level_attained' => $secondary['level_attained'],
                            'year_graduated' => $secondary['year_graduated'],
                            'degree'         => Configure::read('degree.Secondary')
                        ];
                        $user_attainment_secondary_entity = $this->UserAttainment->newEntity();
                        $user_attainment_secondary_entity = $this->UserAttainment->patchEntity($user_attainment_secondary_entity, $secondary_data);
                        $this->UserAttainment->save($user_attainment_secondary_entity);
                    }
                }
                //for Elementary
                if ($session->check('Data.Elementary')) {
                    $elementary      = $session->read('Data.Elementary');
                    if (!empty($elementary['school_name'])) {
                        $elementary_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $elementary['school_name'],
                            'level_attained' => $elementary['level_attained'],
                            'year_graduated' => $elementary['year_graduated'],
                            'degree'         => Configure::read('degree.Elementary')
                        ];
                        $user_attainment_elementary_entity = $this->UserAttainment->newEntity();
                        $user_attainment_elementary_entity = $this->UserAttainment->patchEntity($user_attainment_elementary_entity, $elementary_data);
                        $this->UserAttainment->save($user_attainment_elementary_entity);
                    }
                }
                $this->Flash->success(__('Your employee has been successfully added.'));
                $session->delete('Data');
                $user_logs = $this->UserLog->newEntity();
                $user_logs = $this->UserLog->patchEntity($user_logs, [
                    'user_id' => $this->Auth->user('id'),
                    'page'    => 'EMPLOYEE>ADD EMPLOYEE',
                    'action'  => 'Add'
                ]);
                $this->UserLog->save($user_logs);
                return $this->redirect('/admin/users');
            } else {
                $this->Flash->error(__('Your employee has been failed to added.'));
                $session->delete('Data');
                return $this->redirect('/admin/users');
            }
        }
    }

    public function edit($id = NULL) {
        $civilStatus = Configure::read('civil_status');
        $designation = Configure::read('designation');
        $jobtype     = Configure::read('job_type');
        $departments = Configure::read('departments');
        $userEdit    = $this->User->get($id);
        $session     = $this->request->session();

        if ($session->check('Data.User')) {
            $session_data = $session->read('Data.User');
            $this->set(compact('session_data'));
        }

        if ($this->request->is('POST')) {
            $data       = $this->request->getData();
            $data['id'] = $id;
            $userEdit   = $this->User->patchEntity($userEdit, $data,['validate' => 'EditUser']);
            if ($userEdit->errors() == NULL) {
                $this->request->session()->write('Data.User', $data);
                return $this->redirect('/admin/users/edit_personal');
            }
        }

        $this->set(compact('userEdit', 'designation', 'jobtype', 'departments'));
    }

    public function edit_personal () {
        $civilStatus = Configure::read('civil_status');
        $gender      = Configure::read('gender');
        $id          = $this->request->session()->read('Data.User.id');
        $userEdit    = $this->User->get($id);
        $session     = $this->request->session();

        if ($session->check('Data.User')) {
            $session_data = $session->read('Data.User');
            $this->set(compact('session_data'));
        } else {
            $session->delete('Data');
            return $this->redirect('/admin/users');
        }

        if ($this->request->is('POST')) {
            $data = $this->request->getData();

            $userEdit = $this->User->patchEntity($userEdit, $data);

            if(empty($userEdit->errors())) {
                if (isset($session_data)) {
                    $data = array_merge($data, $session_data);
                }
                $session->write('Data.User', $data);
                return $this->redirect('/admin/users/edit_educational');
            }
        }

        $this->set(compact('userEdit', 'civilStatus', 'gender', 'id'));
    }

    public function edit_educational () {
        $session = $this->request->session();
        if ($session->check('Data.User')) {
            $session_data = $session->read('Data.User');
            $this->set(compact('session_data'));
        }

        //data for user education attainment
        $educational = $this->UserAttainment->find('all')
            ->where(['user_id' => $session_data['id']])
            ->toArray();
        //data for user eligibilities
        $eligibility = $this->UserEligibility->find('all')
            ->where(['user_id' => $session_data['id']])
            ->toArray();
        //data for user work experience
        $work_experience = $this->WorkExperience->find('all')
            ->where(['user_id' => $session_data['id']])
            ->toArray();
        $educational_new = [];
        foreach ($educational as $key => $value) {
            $educational_new[$value['degree']] = $value;
        }
        $session = $this->request->session();
        if ($session->check('Data')) {
            $session_data = $session->read('Data');
            $session->delete('Data.Doctorate');
            $session->delete('Data.Master');
            $session->delete('Data.Secondary');
            $session->delete('Data.Elementary');
            $session->delete('Data.Elegibility');
            $session->delete('Data.Work_experience');
            $session->delete('Data.College');
        } else {
            $session->delete('Data');
            return $this->redirect('/admin/users');
        }

        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if (isset($session_data)) {
                $data = array_merge($data, $session_data);
            }
            $session->write('Data', $data);
            return $this->redirect('/admin/users/edit_checklist');
        }

        $this->set(compact('work_experience', 'eligibility'));
        $this->set('educational', $educational_new);
    }

    public function edit_checklist() {
        $session = $this->request->session();
        if ($session->check('Data.User')) {
            $session_data = $session->read('Data');
            $this->set(compact('session_data'));
        } else {
            $session->delete('Data');
            return $this->redirect('/admin/users');
        }

        $user = $this->UserChecklist->find('list', [
            'keyField'   => 'requirement_id',
            'valueField' => 'requirement_id'
            ])
            ->where(['user_id' => $session_data['User']['id']])
            ->toArray();


        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if (isset($session_data)) {
                $data = array_merge($data, $session_data);
            }
            $session->write('Data', $data);
            return $this->redirect('/admin/users/edit_picture');
        }

        $this->set(compact('user'));
        $this->set('checklists' , Configure::read('checklists'));

    }

    public function edit_picture () {
        $session = $this->request->session();
        if ($session->check('Data')) {
            $session_data = $session->read('Data');
        }
        if ($this->request->is('post')) {
            $data      = $this->request->getData();
            $user_id   = $session_data['User']['id'];
            $user      = $this->User->get($user_id);
            $user_data = $session_data['User'];
            $user      = $this->User->patchEntity($user, $user_data);
            if ($user = $this->User->save($user)) {
                $this->Upload->upload($data['image']);
                if($this->Upload->uploaded) {
                    $image_name = md5(time());
                    $this->Upload->file_new_name_body = $image_name;
                    $this->Upload->process('uploads/employee/'.$user_id.'/');
                    $profile_image    = $this->Upload->file_dst_name;
                    $add_image        = $this->User->get($user_id);
                    $add_image->image = '/uploads/employee/'.$user_id.'/'.$profile_image;
                    $this->User->save($add_image);
                }
                $this->UserAttainment->deleteAll(['user_id' => $user_id]);
                $this->UserEligibility->deleteAll(['user_id' => $user_id]);
                $this->WorkExperience->deleteAll(['user_id' => $user_id]);
                $this->UserChecklist->deleteAll(['user_id' => $user_id]);

                //for user_checklists
                if ($session->check('Data.Requirement')) {
                    $requirement_id = [];
                    foreach ($session->read('Data.Requirement.requirement_id') as $requirement) {
                        $requirement_id[] = [
                            'requirement_id' => $requirement,
                            'user_id'        => $user_id
                        ];
                    }
                    if (!empty($requirement_id)) {
                        $user_checklist_entity = $this->UserChecklist->newEntities($requirement_id);
                        foreach ($user_checklist_entity as $entity) {
                            $this->UserChecklist->save($entity);
                        }
                    }
                }

                //for work experience
                if ($session->check('Data.Work_experience')) {
                    $work_experience_data = $session->read('Data.Work_experience');
                    if (!empty($work_experience_data['company_name'])) {
                        $work_experience      = [
                            'user_id'      => $user_id,
                            'start_work'   => $work_experience_data['start_work'],
                            'end_work'     => $work_experience_data['end_work'],
                            'position'     => $work_experience_data['position'],
                            'company_name' => $work_experience_data['company_name']
                        ];
                        $work_experience_entity = $this->WorkExperience->newEntity();
                        $work_experience_entity = $this->WorkExperience->patchEntity($work_experience_entity, $work_experience);
                        $this->WorkExperience->save($work_experience_entity);
                    }
                }
                //for eligibility
                if ($session->check('Data.Elegibility')) {
                    $user_eligibilities      = $session->read('Data.Elegibility');
                    if (!empty($user_eligibilities['exam_name'])) {
                        $user_eligibilities_data = [
                            'user_id'     => $user_id,
                            'exam_name'   => $user_eligibilities['exam_name'],
                            'license_no'  => $user_eligibilities['license_no'],
                            'valid_until' => $user_eligibilities['valid_until']
                        ];
                        $user_eligibility_entity = $this->UserEligibility->newEntity();
                        $user_eligibility_entity = $this->UserEligibility->patchEntity($user_eligibility_entity, $user_eligibilities_data);
                        $this->UserEligibility->save($user_eligibility_entity);
                    }
                }
                //for Doctorate
                if ($session->check('Data.Doctorate')) {
                    $doctorate      = $session->read('Data.Doctorate');
                    if (!empty($doctorate['school_name'])) {
                        $doctorate_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $doctorate['school_name'],
                            'course'         => $doctorate['course'],
                            'units'          => $doctorate['units'],
                            'year_graduated' => $doctorate['year_graduated'],
                            'degree'         => Configure::read('degree.Doctorate')
                        ];
                        $user_attainment_doctorate_entity = $this->UserAttainment->newEntity();
                        $user_attainment_doctorate_entity = $this->UserAttainment->patchEntity($user_attainment_doctorate_entity, $doctorate_data);
                        $this->UserAttainment->save($user_attainment_doctorate_entity);
                    }
                }
                //for Master
                if ($session->check('Data.Master')) {
                    $master      = $session->read('Data.Master');
                    if (!empty($master['school_name'])) {
                        $master_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $master['school_name'],
                            'course'         => $master['course'],
                            'units'          => $master['units'],
                            'year_graduated' => $master['year_graduated'],
                            'degree'         => Configure::read('degree.Master')
                        ];
                        $user_attainment_master_entity = $this->UserAttainment->newEntity();
                        $user_attainment_master_entity = $this->UserAttainment->patchEntity($user_attainment_master_entity, $master_data);
                        $this->UserAttainment->save($user_attainment_master_entity);
                    }
                }
                //for College
                if ($session->check('Data.College')) {
                    $college      = $session->read('Data.College');
                    if (!empty($college['school_name'])) {
                        $college_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $college['school_name'],
                            'course'         => $college['course'],
                            'level_attained' => $college['level_attained'],
                            'year_graduated' => $college['year_graduated'],
                            'degree'         => Configure::read('degree.College')
                        ];
                        $user_attainment_college_entity = $this->UserAttainment->newEntity();
                        $user_attainment_college_entity = $this->UserAttainment->patchEntity($user_attainment_college_entity, $college_data);
                        $this->UserAttainment->save($user_attainment_college_entity);
                    }
                }
                //for Secondary
                if ($session->check('Data.Secondary')) {
                    $secondary      = $session->read('Data.Secondary');
                    if (!empty($secondary['school_name'])) {
                        $secondary_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $secondary['school_name'],
                            'level_attained' => $secondary['level_attained'],
                            'year_graduated' => $secondary['year_graduated'],
                            'degree'         => Configure::read('degree.Secondary')
                        ];
                        $user_attainment_secondary_entity = $this->UserAttainment->newEntity();
                        $user_attainment_secondary_entity = $this->UserAttainment->patchEntity($user_attainment_secondary_entity, $secondary_data);
                        $this->UserAttainment->save($user_attainment_secondary_entity);
                    }
                }
                //for Elementary
                if ($session->check('Data.Elementary')) {
                    $elementary      = $session->read('Data.Elementary');
                    if (!empty($elementary['school_name'])) {
                        $elementary_data = [
                            'user_id'        => $user_id,
                            'school_name'    => $elementary['school_name'],
                            'level_attained' => $elementary['level_attained'],
                            'year_graduated' => $elementary['year_graduated'],
                            'degree'         => Configure::read('degree.Elementary')
                        ];
                        $user_attainment_elementary_entity = $this->UserAttainment->newEntity();
                        $user_attainment_elementary_entity = $this->UserAttainment->patchEntity($user_attainment_elementary_entity, $elementary_data);
                        $this->UserAttainment->save($user_attainment_elementary_entity);
                    }
                }
                $this->Flash->success(__('Your employee has been successfully updated.'));
                $session->delete('Data');
                $user_logs = $this->UserLog->newEntity();
                $user_logs = $this->UserLog->patchEntity($user_logs, [
                    'user_id' => $this->Auth->user('id'),
                    'page'    => 'EMPLOYEE>EDIT EMPLOYEE',
                    'action'  => 'Update'
                ]);
                $this->UserLog->save($user_logs);
                return $this->redirect('/admin/users');
            } else {
                $this->Flash->error(__('Your employee has been failed to updated.'));
                $session->delete('Data');
                return $this->redirect('/admin/users');
            }
        }
        $image = $this->User->find('all')
            ->where(['id' => $session_data['User']['id']])
            ->first()
            ->toArray();
        $this->set(compact('image'));
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
        $employee = $this->User->find()
            ->contain([
                'UserAttainments',
                'UserEligibilities',
                'WorkExperience',
                'UserLeaves' => function ($r) {
                    return $r
                    ->where(['status' => 1]);
                }

            ])
            ->where([
                'Users.id'      => $id,
                'Users.role'    => Configure::read('role.employee'),
                'Users.del_flg' => 0
            ])
            ->first()
            ->toArray();
        $this->set('civil_status', Configure::read('civil_status'));
        $this->set('jobtype', Configure::read('job_type'));
        $this->set('designation', Configure::read('designation'));
        $this->set('department', Configure::read('departments'));
        $this->set(compact('employee', 'attendanceLists'));
        $this->set('status', Configure::read('status'));
        $this->set('degree_name', Configure::read('degree_name'));
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
                return $this->redirect('/admin/users/attendance_monitoring');
            } else {
                $this->Flash->error('Attendance has been failed to updated.');
                return $this->redirect('/admin/users/attendance_monitoring');
            }
        }

        return $this->redirect('/admin/users/');
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

    public function email_activation($activation_key) {
        $code = $this->EmailActivation->find('all')
               ->where([
                    'EmailActivations.activation_key' => $activation_key,
                    'EmailActivations.status'         => 0,
                    'EmailActivations.deleted'        => 0
                ])
               ->first();

        if ($code) {
            $update_status               = $this->EmailActivation->get($code->id);
            $update_status->status       = 1;
            $update_status->deleted      = 1;
            $update_status->deleted_date = date('Y-m-d H:i:s');
            if ($this->EmailActivation->save($update_status)) {
                return $this->redirect('/admin/users/new_password/'.$activation_key);
            }
        } else {
            $this->Flash->error(__('Invalid activation key.'));
            return $this->redirect('/admin/users/login');
        }
    }

    public function forgot_password() {
        $data = $this->request->getData();
        $user = $this->User->find('all')
                ->where([
                    'Users.email'   => $data['email'],
                    'Users.del_flg' => 0,
                    'role'          => 1
                ])
                ->first();

        if ($user) {
            $activation_code = sha1(time());
            $activation_data = [
                'user_id'        => $user->id,
                'activation_key' => $activation_code,
                'status'         => 0
            ];
            $email  = new Email('default');
            $entity = $this->EmailActivation->newEntity();
            $entity = $this->EmailActivation->patchEntity($entity, $activation_data);
            if ($this->EmailActivation->save($entity)) {
                $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].'/admin/users/email_activation/'.$activation_code;
                $send_mail = $email->transport('gmail')
                   ->to($data['email'])
                   ->from('nameihris@gmail.com')
                   ->emailFormat('html')
                   ->template('forgot_password_mail')
                   ->viewVars([
                        'url'  => $url
                    ])
                   ->subject(__('Namei Polytechnic Institute'))
                   ->send();
            }
            $this->request->session()->write('Flash.success', 'Email activation has been send to your email.');
            // $this->Flash->success('Email activation has been send to your email.');
            return $this->redirect('/admin/users/login');
        } else {
            $this->request->session()->write('Flash.error', 'Invalid email address.');
            // $this->Flash->error(__('Invalid email address.'));
            return $this->redirect('/admin/users/login');
        }
    }

    public function new_password($key) {
        if (!empty($key)) {
            $activation = $this->EmailActivation->find('all')
               ->where([
                    'EmailActivations.activation_key' => $key,
                    'EmailActivations.status'         => 1,
                    'EmailActivations.deleted'        => 1
                ])
               ->first();
            if ($activation) {
                $user = $this->User->get($activation->user_id);
                if ($this->request->is('POST')) {
                    $data = $this->request->getData();
                    $user = $this->User->patchEntity($user, [
                        'password'         => $data['new_password'],
                        'new_password'     => $data['new_password'],
                        'confirm_password' => $data['confirm_password']
                    ],
                    ['validate' => 'NewPassword']);
                    if ($this->User->save($user)) {
                        $this->Flash->success('Your password has been successfully updated.');
                        return $this->redirect('/admin/users/login');
                    } else {
                        $this->Flash->error('Your password has been failed to update.');
                    }
                    $this->set('userNewPassword', $user);
                }
            } else {
                return $this->redirect('/admin/users/login');
            }
        }
        return $this->redirect('/admin/users/login');
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


    public function master_201() {
        $users = $this->User->find('all')
            ->where([
                'Users.del_flg' => 0,
                'Users.role'    => Configure::read('role.employee')
            ])
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>MASTER 201',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set('department', Configure::read('departments'));
        $this->set(compact('users'));
    }

    public function faculty_profile() {
        $users = $this->User->find('all')
            ->contain('UserAttainments', function($res) {
                return $res
                ->where(['UserAttainments.degree IN' => ['1','2','3']])
                ->order(['UserAttainments.degree' => 'DESC']);
            })
            ->where([
                'Users.del_flg'    => 0,
                'Users.role' => Configure::read('role.employee')
            ])
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>FACULTY PROFILE',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set('department', Configure::read('departments'));
        $this->set('jobtype', Configure::read('job_type'));
        $this->set('degree', Configure::read('degree'));
        $this->set(compact('users'));
    }

    public function employment_record() {
        $users = $this->User->find('all')
            ->contain('UserAttainments', function($res) {
                return $res
                ->where(['UserAttainments.school_name !=' => ''])
                ->order(['UserAttainments.degree' => 'ASC']);
            })
            ->where([
                'Users.del_flg'    => 0,
                'Users.role' => Configure::read('role.employee')
            ])
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>EMPLOYMENT RECORD',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set('department', Configure::read('departments'));
        $this->set('jobtype', Configure::read('job_type'));
        $this->set('designation', Configure::read('designation'));
        $this->set('degree', Configure::read('degree'));
        $this->set(compact('users'));
    }

    public function training_log() {
        $conditions = [];
        if ($this->request->query) {
            if (!empty($this->request->query['firstname'])) {
                $conditions['Users.firstname LIKE'] = '%'.$this->request->query['firstname'].'%';
            }
            if (!empty($this->request->query['user_id'])) {
                $conditions['Users.id'] = $this->request->query['user_id'];
            }
        }
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>TRAINING LOG',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $conditions['Seminars.del_flg'] = 0;
        $conditions['Users.del_flg']    = 0;
        $conditions['Users.role']       = Configure::read('role.employee');

        $users = $this->Seminar->find('all')
            ->contain(['Users'])
            ->where([$conditions])
            ->toArray();

        $this->set(compact('users'));
    }

    public function faculty_profile_license() {
        $users = $this->UserEligibility->find('all')
            ->contain('Users', function($res) {
                return $res
                ->where([
                    'Users.del_flg' => 0,
                    'Users.role'    => Configure::read('role.employee')
                ]);
            })
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>FACULTY PROFILE LICENSE',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set('department', Configure::read('departments'));
        $this->set(compact('users'));
    }

    public function faculty_profile_training() {
        $users = $this->User->find('all')
            ->contain('UserChecklists', function($res) {
                return $res
                ->where(['UserChecklists.requirement_id IN' => ['9','10','11']]);
            })
            ->where([
                'Users.del_flg'    => 0,
                'Users.role' => Configure::read('role.employee')
            ])
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>FACULTY PROFILE TRAINING',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set('department', Configure::read('departments'));
        $this->set(compact('users'));
    }

    public function list_employee() {
        $users = $this->User->find('all')
            ->where([
                'Users.del_flg'    => 0,
                'Users.role' => Configure::read('role.employee')
            ])
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>LIST EMPLOYEE',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set(compact('users'));
    }

    public function resigned_employee() {
        $users = $this->User->find('all')
            ->where([
                'Users.del_flg' => 0,
                'Users.jobtype' => 3,
                'Users.role'    => Configure::read('role.employee')
            ])
            ->toArray();
        $user_logs = $this->UserLog->newEntity();
        $user_logs = $this->UserLog->patchEntity($user_logs, [
            'user_id' => $this->Auth->user('id'),
            'page'    => 'GENERATE REPORTS>RESIGNED EMPLOYEE',
            'action'  => 'Report'
        ]);
        $this->UserLog->save($user_logs);
        $this->set(compact('users'));
    }

    public function home() {
        //3.12
        $technical1 = $this->UserChecklist->find('all')
            ->where(['UserChecklists.requirement_id' => '9']);
        //6.09
        $technical2 = $this->UserChecklist->find('all')
            ->where(['UserChecklists.requirement_id' => '10']);
        //6.10
        $technical3 =$this->UserChecklist->find('all')
            ->where(['UserChecklists.requirement_id' => '11']);
        $total = $technical1->count() + $technical2->count() + $technical3->count();
        $this->set('technical1', $total != 0 ? round($technical1->count()/$total*100) : 0);
        $this->set('technical2', $total != 0 ? round($technical2->count()/$total*100) : 0);
        $this->set('technical3', $total != 0 ? round($technical3->count()/$total*100) : 0);
    }

    public function application_monitoring() {
        $application_lists = $this->Application->find('all')
            ->where(['Applications.del_flg' => 0])
            ->toArray();

        $this->set('application_status', Configure::read('application_status'));
        $this->set(compact('application_lists'));
    }

    public function attendance_delete($id) {
        $this->autoRender = false;
        if (!$id)  return $this->redirect('/admin/users');
        if (!$this->Attendance->exists(['id' => $id])) return $this->redirect('/admin/users');
        if ($this->Attendance->deleteAll(['id' => $id])) {
            $this->Flash->success(__('Attendance has been successfully deleted.'));
            return $this->redirect('/admin/users/attendance_monitoring');
        } else {
            $this->Flash->error(__('Attendance has been failed to deleted.'));
            return $this->redirect('/admin/users/attendance_monitoring');
        }
    }

    public function application_accept($id) {
        if ($id) {
            $user = $this->Application->find('all')
                ->where(['Applications.id' => $id])
                ->first();

            $accept = $this->Application->get($id);
            $accept = $this->Application->patchEntity($accept, ['accepted' => 1], ['validate' => false]);

            if ($this->Application->save($accept)) {
                $email = new Email('default');
                $send_mail = $email->transport('gmail')
                   ->to($user['email'])
                   ->from('nameihris@gmail.com')
                   ->emailFormat('html')
                   ->template('application_accepted_email')
                   ->subject(__('Namei Polytechnic Institute'))
                   ->send();
                $user_logs = $this->UserLog->newEntity();
                $user_logs = $this->UserLog->patchEntity($user_logs, [
                    'user_id' => $this->Auth->user('id'),
                    'page'    => 'APPLICATION MONITORING>ACCEPT',
                    'action'  => 'Update'
                ]);
                $this->UserLog->save($user_logs);
                $this->Flash->success(__('Application has been successfully accepted.'));
                return $this->redirect('/admin/users/application_monitoring');
            }
        }
    }

    public function application_decline($id) {
        if ($id) {
            $user = $this->Application->find('all')
                ->where(['Applications.id' => $id])
                ->first();

            $decline = $this->Application->get($id);
            $decline = $this->Application->patchEntity($decline, ['accepted' => 2], ['validate' => false]);

            if ($this->Application->save($decline)) {
                $email = new Email('default');
                $send_mail = $email->transport('gmail')
                   ->to($user['email'])
                   ->from('nameihris@gmail.com')
                   ->emailFormat('html')
                   ->template('application_declined_email')
                   ->subject(__('Namei Polytechnic Institute'))
                   ->send();
                $user_logs = $this->UserLog->newEntity();
                $user_logs = $this->UserLog->patchEntity($user_logs, [
                    'user_id' => $this->Auth->user('id'),
                    'page'    => 'APPLICATION MONITORING>DECLINE',
                    'action'  => 'Update'
                ]);
                $this->UserLog->save($user_logs);
                $this->Flash->success(__('Application has been successfully decline.'));
                return $this->redirect('/admin/users/application_monitoring');
            }
        }
    }

    public function application_report() {
        $application_lists = $this->Application->find('all')
            ->toArray();
        $this->set(compact('application_lists'));
        $this->set('application_status', Configure::read('application_status'));
    }

    public function application_view($id) {
        if ($id) {
            $applicant = $this->Application->find('all')
                ->where(['Applications.id' => $id])
                ->first()
                ->toArray();

            $this->set(compact('applicant'));
        }
    }
}
