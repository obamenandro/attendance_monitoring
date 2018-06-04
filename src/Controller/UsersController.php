<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('user');
        $this->loadComponent('Upload');    ## Load upload component for uploading images
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['login','forgotPassword','emailActivation','newPassword']);
    }

    public function login() {
        $this->layout = false;
        $this->request->session()->destroy();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $redirectUrl = '/users/login';
                if ($user['role'] === 1) {
                    $this->Flash->error(__('Invalid email address or password.'));
                    $this->request->session()->destroy();
                } else {
                    $this->Auth->setUser($user);
                    $redirectUrl = '/users';
                }
                return $this->redirect($redirectUrl);
            } else {
                $this->Flash->error(__('Invalid email address or password.'));
            }
        }
    }

    public function index() {
    }

    public function attendanceRecord() {
        $this->autoRender = false;
        if ($this->request->is('POST')) {
            $data   = $this->request->data;
            $id     = $this->Auth->User('id');
            $record = $this->Attendance->find('all')
                    ->where(['Attendances.user_id' => $id])
                    ->order(['Attendances.date' => 'ASC'])
                    ->toArray();

            $attendanceStatus = [];
            foreach($record as $key => $value) {
                if ($data['year'] == date('Y', strtotime($value['date'])) &&
                    $data['month'] == date('n', strtotime($value['date']))) {
                    $attendanceStatus[date('j', strtotime($value['date']))] = $value['status'];
                }
            }
            //Get year and month
            $result = [
                "year"  => $data['year'],
                "month" => $data['month'],
            ];
            //Check if it is current month
            $currentMonthYear = date('m/1/y');
            $inputMonthYear   = date("m/1/y", mktime(0, 0, 0, $data['month'], 1, $data['year']));
            $dateDiff         = strtotime($inputMonthYear) - strtotime($currentMonthYear);
            if($dateDiff === 0){
                $result['currentMonth'] = true;
                //Get current day
                $result['currentDate'] = date("d");
            } else {
                $result['currentMonth'] = false;
                $result['currentDate']  = false;
            }
            //Compute for last day
            $lastDay               = date("t",mktime(0, 0, 0, $data['month'], 1, $data['year']));
            //Compute for first and last date
            $firstInputDate        = date("m/1/y", mktime(0, 0, 0, $data['month'], 1, $data['year']));
            $lastInputDate         = date("m/t/y", mktime(0, 0, 0, $data['month'], $lastDay, $data['year']));

           //Generate days
            $dates         = [];
            $dateToday     = date("m/d/y");
            $datetimeToday = date("m/d/y H:i:s");
            $timeToday     = strtotime($dateToday);
            for($day = 1;  $day <= $lastDay; $day++){
                $dates[$day] = [];
                //Check if it is past day
                $calendarDate = date("m/d/y",mktime(0, 0, 0, $data['month'], $day, $data['year']));
                if (isset($attendanceStatus[$day])) {
                    $dates[$day]["status"] = $attendanceStatus[$day];
                }
            }
            $result["dates"] = $dates;
            if($this->request->is('ajax')){
                $this->autoRender = false;
                $json = json_encode($result);

                $this->response->type('json');
                $this->response->body($json);
                return $this->response;
            }
            $this->set('data',$result);
        }
    }

    public function changePassword() {
        $user = $this->User->get($this->Auth->User('id'));

        if ($this->request->is('POST')) {
            $data = $this->request->data;
            $user = $this->User->patchEntity($user, [
                'old_password'     => $data['old_password'],
                'password'         => $data['new_password'],
                'new_password'     => $data['new_password'],
                'confirm_password' => $data['confirm_password']
            ],
            ['validate' => 'password']);
            if ($this->User->save($user)) {
                $this->Flash->success('Your password has been successfully updated.');
                return $this->redirect('/users/change_password');
            } else {
                $this->Flash->error('Your password has been failed to update.');
            }
            $this->set('userChangePassword', $user);
        }
    }

    public function editInformation() {
        $id          = $this->Auth->User('id');
        $userEdit    = $this->User->get($id);
        $civilStatus = Configure::read('civil_status');

        if ($this->request->is('POST')) {
            $data     = $this->request->getData();
            $userEdit = $this->User->patchEntity($userEdit, $data);
            if (empty($userEdit->errors())) {
                $this->request->session()->write('Data.User', $data);
                return $this->redirect('/users/edit_educational');
            }
        }
        $this->set(compact('userEdit', 'civilStatus'));
    }

    public function editEducational() {
        $id = $this->request->session()->read('Auth.User.id');
        //data for user education attainment
        $educational = $this->UserAttainment->find('all')
            ->where(['user_id' => $id]) 
            ->toArray();
        //data for user eligibilities
        $eligibility = $this->UserEligibility->find('all')
            ->where(['user_id' => $id]) 
            ->toArray();
        //data for user work experience
        $work_experience = $this->WorkExperience->find('all')
            ->where(['user_id' => $id]) 
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
        }
        if ($this->request->is('POST')) {
            $data = $this->request->getData();
            if (isset($session_data)) {
                $data = array_merge($data, $session_data);
            }
            $session->write('Data', $data);
            return $this->redirect('/users/edit_picture');
        }

        $this->set(compact('work_experience', 'eligibility'));
        $this->set('educational', $educational_new);
    }

    public function editPicture() {
        $session = $this->request->session();
        if ($session->check('Data')) {
            $session_data = $session->read('Data');
        }
        if ($this->request->is('post')) {
            $data      = $this->request->getData();
            $user_id   = $this->request->session()->read('Auth.User.id');
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
                //for work experience
                if ($session->check('Data.Work_experience')) {
                    $work_experience_data = $session->read('Data.Work_experience');
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
                //for eligibility
                if ($session->check('Data.Elegibility')) {
                    $user_eligibilities      = $session->read('Data.Elegibility');
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
                //for Doctorate
                if ($session->check('Data.Doctorate')) {
                    $doctorate      = $session->read('Data.Doctorate');
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
                //for Master
                if ($session->check('Data.Master')) {
                    $master      = $session->read('Data.Master');
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
                //for College
                if ($session->check('Data.College')) {
                    $college      = $session->read('Data.College');
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
                //for Secondary
                if ($session->check('Data.Secondary')) {
                    $secondary      = $session->read('Data.Secondary');
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
                //for Elementary
                if ($session->check('Data.Elementary')) {
                    $elementary      = $session->read('Data.Elementary');
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
                $this->Flash->success(__('Your employee has been successfully updated.'));
                $session->delete('Data');
                return $this->redirect('/users/edit_information');
            } else {
                $this->Flash->error(__('Your employee has been failed to updated.'));
                $session->delete('Data');
                return $this->redirect('/users/edit_information');
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function emailActivation($activation_key) {
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
                return $this->redirect('/users/new_password/'.$activation_key);
            }
        } else {
            $this->Flash->error(__('Invalid activation key.'));
            return $this->redirect('/users/login');
        }
    }

    public function forgotPassword() {
        $data = $this->request->getData();
        $user = $this->User->find('all')
                ->where([
                    'Users.email'   => $data['email'], 
                    'Users.del_flg' => 0,
                    'role'          => Configure::read('role.employee')
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
                $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].'/users/email_activation/'.$activation_code;
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
            $this->Flash->success('Email activation has been send to your email.');
            return $this->redirect('/users/login');
        } else {
            $this->Flash->error(__('Invalid email address.'));
            return $this->redirect('/users/login');
        }
    }

    public function newPassword($key) {
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
                    return $this->redirect('/users/change_password');
                } else {
                    $this->Flash->error('Your password has been failed to update.');
                }
                $this->set('userNewPassword', $user);
            }
        } else {
            return $this->redirect('/users/login');
        }
    }

    public function checklist() {
        $user_checklist = $this->UserChecklist->find('list', [
            'keyField'   => 'requirement_id',
            'valueField' => 'requirement_id'
            ])
            ->where(['user_id' => $this->request->session()->read('Auth.User.id')])
            ->toArray();
        $this->set(compact('user_checklist'));
        $this->set('checklists' , Configure::read('checklists'));
    }
}
