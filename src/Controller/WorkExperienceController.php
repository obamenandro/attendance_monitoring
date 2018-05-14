<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WorkExperience Controller
 *
 * @property \App\Model\Table\WorkExperienceTable $WorkExperience
 *
 * @method \App\Model\Entity\WorkExperience[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WorkExperienceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $workExperience = $this->paginate($this->WorkExperience);

        $this->set(compact('workExperience'));
    }

    /**
     * View method
     *
     * @param string|null $id Work Experience id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workExperience = $this->WorkExperience->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('workExperience', $workExperience);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workExperience = $this->WorkExperience->newEntity();
        if ($this->request->is('post')) {
            $workExperience = $this->WorkExperience->patchEntity($workExperience, $this->request->getData());
            if ($this->WorkExperience->save($workExperience)) {
                $this->Flash->success(__('The work experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work experience could not be saved. Please, try again.'));
        }
        $users = $this->WorkExperience->Users->find('list', ['limit' => 200]);
        $this->set(compact('workExperience', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Work Experience id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workExperience = $this->WorkExperience->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workExperience = $this->WorkExperience->patchEntity($workExperience, $this->request->getData());
            if ($this->WorkExperience->save($workExperience)) {
                $this->Flash->success(__('The work experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work experience could not be saved. Please, try again.'));
        }
        $users = $this->WorkExperience->Users->find('list', ['limit' => 200]);
        $this->set(compact('workExperience', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Work Experience id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workExperience = $this->WorkExperience->get($id);
        if ($this->WorkExperience->delete($workExperience)) {
            $this->Flash->success(__('The work experience has been deleted.'));
        } else {
            $this->Flash->error(__('The work experience could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
