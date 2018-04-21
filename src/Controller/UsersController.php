<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;

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
        $this->Auth->allow(['login']);
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

        //get all employee
        $employee = $this->User->find('all')
                    ->contain(['UserDepartments', 'UserSubjects', 'Governments'])
                    ->where(['Users.id' => $id, 'Users.role' => 2])
                    ->first();

        if ($this->request->is('POST')) {
            $data               = $this->request->data;
            $userEdit           = $this->User->patchEntity($userEdit, $data);
            $userEdit->modified = date('Y-m-d H:i:s');

            if ($this->request->data['image']['size'] == 0) {
                $userEdit->image = $employee['image'];
            }

            if ($this->User->save($userEdit)) {
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

                $this->Flash->success('Your account has been successfully updated.');
                return $this->redirect('/users/edit_information');
            } else {
                $this->Flash->error('Your account has been failed to update');
            }
        }

        $this->set(compact('userEdit', 'employee', 'civilStatus'));
    }

    public function seminars() {

    }
}
