<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Event\Event;

/**
 * Admin/Subjects Controller
 *
 *
 * @method \App\Model\Entity\Admin/Subject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubjectsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('Admin');
        $this->Subject = TableRegistry::get('Subjects');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $subjects = $this->Subjects->find('all')
            ->where(['del_flg' => 0]);

        $this->set(compact('subjects'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin/subject id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('POST')) {
            $entities = $this->Subject->newEntities($this->request->getData('data'));
            foreach ($entities as $entity) {
                $this->Subject->save($entity);
            }
            $this->Flash->success(__('Your subject has been successfully added.'));
            return $this->redirect('/admin/subjects/');
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin/subject id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

    }

    /**
     * Delete method
     *
     * @param string|null $id Admin/subject id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->autoRender = false;
        $subject          = $this->Subject->get($id);
        $subject->del_flg = 1;

        if ($this->Subject->save($subject)) {
            $this->Flash->success(__('Your subject has been deleted.'));
        } else {
            $this->Flash->success(__('Your subject has been failed to delete.'));
        }
        return $this->redirect('/admin/subjects');
    }
}
