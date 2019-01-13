<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

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
        $this->loadComponent('Upload');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        ini_set('memory_limit', '-1');
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
                $this->Upload->upload($data['pdf']);
                if ($this->Upload->uploaded) {
                    $pdf_files                        = md5(time());
                    $ext = pathinfo($data['pdf']['name'], PATHINFO_EXTENSION);
                    $this->Upload->file_new_name_body = $pdf_files;
                    $this->Upload->process('uploads/employee/'.$user_id.'/');
                    $pdf_file_name                    = $this->Upload->file_dst_name;
                    $attachment                       = 'uploads/employee/'.$user_id.'/'.$pdf_file_name;

                    $email  = new Email();
                    $send_mail = $email->transport('gmail')
                       ->attachments([ROOT.'/webroot/'.$attachment])
                       ->to('nameihris@gmail.com')
                       ->from('nameihris@gmail.com')
                       ->emailFormat('html')
                       ->subject(__('Namei Polytechnic Institute'))
                       ->send();
                }

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

    public function seminarDelete($id) {
        $this->autoRender = false;
        if (!$id)  return $this->redirect('/seminars');
        if (!$this->Seminar->exists(['id' => $id])) return $this->redirect('/seminars');

        $seminar = $this->Seminar->get($id);
        $seminar = $this->Seminar->patchEntity($seminar, ['del_flg' => 1],['validate' => false]);
        if ($this->Seminar->save($seminar)) {
            $this->Flash->success(__('Seminar has been successfully deleted.'));
            return $this->redirect('/seminars');
        } else {
            $this->Flash->error(__('Seminar has been failed to deleted.'));
            return $this->redirect('/seminars');
        }
    }

    public function preview() {

    }
}
