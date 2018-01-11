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
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

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
        $this->Subject = TableRegistry::get('Subjects');
        if ($this->request->is('POST')) {
            $entities = $this->Subject->newEntities($this->request->getData('data'));
            foreach ($entities as $entity) {
                if (!$this->Subject->save($entity)) {
                    $this->Flash->error(__('Your subject has been failed to added.'));
                    return $this->redirect('/admin/subjects/add');
                }
            }
            $this->Flash->success(__('Your subject has been successfully added.'));
            return $this->redirect('/admin/subjects/add');
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

    }
}
