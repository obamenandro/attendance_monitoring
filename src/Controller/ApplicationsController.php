<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Mailer\Email;
use App\Form\ApplicationForm;

/**
 * Applications Controller
 *
 * @property \App\Model\Table\ApplicationsTable $Applications
 *
 * @method \App\Model\Entity\Application[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function add() {
        if ($this->request->is('POST')) {
            $application        = new ApplicationForm();
            $data               = $this->request->getData();
            $application_entity = $this->Application->newEntity();
            $application_entity = $this->Application->patchEntity($application_entity, $data);

            if ($application->execute($data)) {
                if ($this->Application->save($application_entity)) {
                    $this->render('success');    
                }
            }

            $this->set(compact('application'));
        }
    }
    
}
