<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HealthUnitsSpecialties Controller
 *
 * @property \App\Model\Table\HealthUnitsSpecialtiesTable $HealthUnitsSpecialties
 *
 * @method \App\Model\Entity\HealthUnitsSpecialty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HealthUnitsSpecialtiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HealthUnits', 'Specialties']
        ];
        $healthUnitsSpecialties = $this->paginate($this->HealthUnitsSpecialties);

        $this->set(compact('healthUnitsSpecialties'));
    }

    /**
     * View method
     *
     * @param string|null $id Health Units Specialty id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $healthUnitsSpecialty = $this->HealthUnitsSpecialties->get($id, [
            'contain' => ['HealthUnits', 'Specialties']
        ]);

        $this->set('healthUnitsSpecialty', $healthUnitsSpecialty);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $healthUnitsSpecialty = $this->HealthUnitsSpecialties->newEntity();
        if ($this->request->is('post')) {
            $healthUnitsSpecialty = $this->HealthUnitsSpecialties->patchEntity($healthUnitsSpecialty, $this->request->getData());
            if ($this->HealthUnitsSpecialties->save($healthUnitsSpecialty)) {
                $this->Flash->success(__('The health units specialty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health units specialty could not be saved. Please, try again.'));
        }
        $healthUnits = $this->HealthUnitsSpecialties->HealthUnits->find('list', ['limit' => 200]);
        $specialties = $this->HealthUnitsSpecialties->Specialties->find('list', ['limit' => 200]);
        $this->set(compact('healthUnitsSpecialty', 'healthUnits', 'specialties'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Health Units Specialty id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $healthUnitsSpecialty = $this->HealthUnitsSpecialties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $healthUnitsSpecialty = $this->HealthUnitsSpecialties->patchEntity($healthUnitsSpecialty, $this->request->getData());
            if ($this->HealthUnitsSpecialties->save($healthUnitsSpecialty)) {
                $this->Flash->success(__('The health units specialty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health units specialty could not be saved. Please, try again.'));
        }
        $healthUnits = $this->HealthUnitsSpecialties->HealthUnits->find('list', ['limit' => 200]);
        $specialties = $this->HealthUnitsSpecialties->Specialties->find('list', ['limit' => 200]);
        $this->set(compact('healthUnitsSpecialty', 'healthUnits', 'specialties'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Health Units Specialty id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $healthUnitsSpecialty = $this->HealthUnitsSpecialties->get($id);
        if ($this->HealthUnitsSpecialties->delete($healthUnitsSpecialty)) {
            $this->Flash->success(__('The health units specialty has been deleted.'));
        } else {
            $this->Flash->error(__('The health units specialty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
