<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Admin/UserLeaves Controller
 *
 *
 * @method \App\Model\Entity\Admin/UserLeave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserLeavesController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('Admin');
        $this->loadComponent('Upload');    ## Load upload component for uploading images
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $request_leaves = $this->UserLeaves->find('all')
                        ->contain(['Users'])
                        ->toArray();

        $this->set(compact('request_leaves'));
    }

}
