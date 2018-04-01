<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

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
        $this->viewBuilder()->setLayout('User');
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
                    ->toArray();

            $attendanceStatus = [];
            foreach($record as $key => $value) {
                if ($data['year'] == date('Y', strtotime($value['date'])) && 
                    $data['month'] == date('n', strtotime($value['date']))) {
                    $attendanceStatus[date('d', strtotime($value['date']))] = $value['status'];
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
            } else {
                $result['currentMonth'] = false;
            }
            //Get current day
            $result['currentDate'] = date("d");
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
                if (isset($record[$day])) {
                    $dates[$day]['status'] = $record[$day]['status'];
                }
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
}
