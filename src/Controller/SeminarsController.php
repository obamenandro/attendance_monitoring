<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seminars Controller
 *
 * @property \App\Model\Table\SeminarsTable $Seminars
 *
 * @method \App\Model\Entity\Seminar[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeminarsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('user');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $user_id = $this->request->session()->read('Auth.User.id');
        $seminar_records = $this->Seminar->find('all')
            ->where(['Seminars.del_flg' => 0, 'Seminars.user_id' => $user_id])
            ->toArray();

        if ($this->request->is('POST')) {
            $data            = $this->request->getData();
            $data['user_id'] = $this->request->session()->read('Auth.User.id');
            $entity          = $this->Seminar->newEntity();
            $entity          = $this->Seminar->patchEntity($entity, $data);

            if ($this->Seminar->save($entity)) {
                $this->Flash->success('Your seminars has been successfully saved.');
                return $this->redirect('/seminars');
            } else {
                $this->Flash->error('Your seminars has been failed saved.');
                return $this->redirect('/seminars');
            }
            $this->set('seminars', $entity);
        }
        $this->set(compact('seminar_records'));
    }

    public function edit($id) {
        $seminar = $this->Seminar->get($id);

        if ($this->request->is('POST')) {
            $data   = $this->request->getData();
            $seminar = $this->Seminar->patchEntity($seminar, $data);
            if ($this->Seminar->save($seminar)) {
                $this->Flash->success('Your seminars has been successfully updated.');
                return $this->redirect('/seminars/edit/'.$id);
            }
        }

        $this->set(compact('seminar'));
    }
}
