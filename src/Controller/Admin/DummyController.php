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
 * Admin/Dummy Controller
 *
 *
 * @method \App\Model\Entity\Admin/Dummy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DummyController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('system_admin');
        $this->loadComponent('Upload');    ## Load upload component for uploading images
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    public function index() {

    }
    
}
