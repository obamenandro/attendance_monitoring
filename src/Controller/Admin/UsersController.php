<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

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
        $this->Auth->allow();
    }

    public function add() {

    }

    public function admin_index() {

    }

    public function admin_login() {

    }

    public function admin_employee() {

    }

    public function admin_add_attendance() {

    }

    public function admin_view_info() {

    }

    public function admin_edit() {

    }

    public function admin_add_department() {

    }

    public function admin_add_subject() {

    }

    public function user_home() {

    }
}
