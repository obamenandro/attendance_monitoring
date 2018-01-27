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
        $this->Department = TableRegistry::get('Departments');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $departments = $this->Department->find('all')
            ->where(['del_flg' => 0]);

        $this->set(compact('departments'));  
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
        if ($this->request->is('POST')) {
            $datas = $this->request->getData('data');
            foreach ($datas as $key => $value) {
                if (empty($value['name'])) {
                    unset($datas[$key]);
                }
            }
            $entities = $this->Department->newEntities($datas);
            foreach ($entities as $entity) {
                $this->Department->save($entity);
            }
            $this->Flash->success(__('Your department has been successfully added.'));
            return $this->redirect('/admin/departments');
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
        $this->autoRender    = false;
        $department          = $this->Department->get($id);
        $department->del_flg = 1;

        if ($this->Department->save($department)) {
            $this->Flash->success(__('Your department has been deleted.'));
        } else {
            $this->Flash->success(__('Your department has been failed to delete.'));
        }
        return $this->redirect('/admin/departments');
    }
}
