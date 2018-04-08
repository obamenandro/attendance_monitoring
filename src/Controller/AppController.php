<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Session\DatabaseSession;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'email',
                            'password' => 'password'
                        ]
                    ]
                ],
                'loginAction' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'storage' => 'Session'
            ]
        );
        // check if it is accessing admin page && with UsersAuthentication's role = 1
        if ($this->request->action !== 'login'
            && $this->request->prefix == 'admin'
            && $this->Auth->user('role') !== 1) {
            return $this->redirect('/admin/users/login');
        } else {
            $this->set('user', $this->Auth->user('firstname'));
        }
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Department     = TableRegistry::get('Departments');
        $this->Government     = TableRegistry::get('Governments');
        $this->Subject        = TableRegistry::get('Subjects');
        $this->UserDepartment = TableRegistry::get('UserDepartments');
        $this->Attendance     = TableRegistry::get('Attendances');
        $this->User           = TableRegistry::get('Users');
        $this->UserLeaves     = TableRegistry::get('UserLeaves');

        $session = $this->request->session();
        if ($session->check('Auth') && $session->read('Auth.User.role') == 2) {
            $id   = $session->read('Auth.User.id');
            $user = $this->User->find()
                  ->contain([
                    'Governments',
                    'UserDepartments' => [
                        'Departments'
                    ]
                  ])
                  ->where([
                    'Users.id'   => $id,
                    'Users.role' => 2
                  ])
                  ->first()
                  ->toArray();

            $this->set('user', $user);
        }
    }
}
