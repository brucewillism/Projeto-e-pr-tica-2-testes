<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Specialties Controller
 *
 * @property \App\Model\Table\SpecialtiesTable $Specialties
 *
 * @method \App\Model\Entity\Specialty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialtiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $specialties = $this->paginate($this->Specialties);

        $this->set(compact('specialties'));
    }

    /**
     * View method
     *
     * @param string|null $id Specialty id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialty = $this->Specialties->get($id, [
            'contain' => ['HealthUnits']
        ]);

        $this->set('specialty', $specialty);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialty = $this->Specialties->newEntity();
        if ($this->request->is('post')) {
            $specialty = $this->Specialties->patchEntity($specialty, $this->request->getData());
            if ($this->Specialties->save($specialty)) {
                $this->Flash->success(__('The specialty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialty could not be saved. Please, try again.'));
        }
        $healthUnits = $this->Specialties->HealthUnits->find('list', ['limit' => 200]);
        $this->set(compact('specialty', 'healthUnits'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Specialty id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialty = $this->Specialties->get($id, [
            'contain' => ['HealthUnits']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialty = $this->Specialties->patchEntity($specialty, $this->request->getData());
            if ($this->Specialties->save($specialty)) {
                $this->Flash->success(__('The specialty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialty could not be saved. Please, try again.'));
        }
        $healthUnits = $this->Specialties->HealthUnits->find('list', ['limit' => 200]);
        $this->set(compact('specialty', 'healthUnits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Specialty id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialty = $this->Specialties->get($id);
        if ($this->Specialties->delete($specialty)) {
            $this->Flash->success(__('The specialty has been deleted.'));
        } else {
            $this->Flash->error(__('The specialty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
