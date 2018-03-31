<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function login() {
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
}
