<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin/Departments Controller
 *
 *
 * @method \App\Model\Entity\Admin/Department[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Admin/DepartmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $admin/departments = $this->paginate($this->Admin/Departments);

        $this->set(compact('admin/departments'));
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
        $admin/department = $this->Admin/Departments->get($id, [
            'contain' => []
        ]);

        $this->set('admin/department', $admin/department);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin/department = $this->Admin/Departments->newEntity();
        if ($this->request->is('post')) {
            $admin/department = $this->Admin/Departments->patchEntity($admin/department, $this->request->getData());
            if ($this->Admin/Departments->save($admin/department)) {
                $this->Flash->success(__('The admin/department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin/department could not be saved. Please, try again.'));
        }
        $this->set(compact('admin/department'));
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
        $admin/department = $this->Admin/Departments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin/department = $this->Admin/Departments->patchEntity($admin/department, $this->request->getData());
            if ($this->Admin/Departments->save($admin/department)) {
                $this->Flash->success(__('The admin/department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin/department could not be saved. Please, try again.'));
        }
        $this->set(compact('admin/department'));
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
        $this->request->allowMethod(['post', 'delete']);
        $admin/department = $this->Admin/Departments->get($id);
        if ($this->Admin/Departments->delete($admin/department)) {
            $this->Flash->success(__('The admin/department has been deleted.'));
        } else {
            $this->Flash->error(__('The admin/department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
