<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Event\Event;
/**
 * Admin/Departments Controller
 *
 *
 * @method \App\Model\Entity\Admin/Department[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsController extends AppController
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
     * @param string|null $id Admin/department id.
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
        $this->Department = TableRegistry::get('Departments');
        if ($this->request->is('POST')) {
            $entities = $this->Department->newEntities($this->request->getData('data'));
            foreach ($entities as $entity) {
                if (!$this->Department->save($entity)) {
                    $this->Flash->error(__('Your department has been failed to added.'));
                    return $this->redirect('/admin/departments/add');
                }
            }
            $this->Flash->success(__('Your department has been successfully added.'));
            return $this->redirect('/admin/departments/add');
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin/department id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
       
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin/department id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
    }
}
