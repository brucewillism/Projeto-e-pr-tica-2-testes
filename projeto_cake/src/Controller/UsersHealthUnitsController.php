<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersHealthUnits Controller
 *
 * @property \App\Model\Table\UsersHealthUnitsTable $UsersHealthUnits
 *
 * @method \App\Model\Entity\UsersHealthUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersHealthUnitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HealthUnits', 'Users']
        ];
        $usersHealthUnits = $this->paginate($this->UsersHealthUnits);

        $this->set(compact('usersHealthUnits'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Health Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersHealthUnit = $this->UsersHealthUnits->get($id, [
            'contain' => ['HealthUnits', 'Users']
        ]);

        $this->set('usersHealthUnit', $usersHealthUnit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersHealthUnit = $this->UsersHealthUnits->newEntity();
        if ($this->request->is('post')) {
            $usersHealthUnit = $this->UsersHealthUnits->patchEntity($usersHealthUnit, $this->request->getData());
            if ($this->UsersHealthUnits->save($usersHealthUnit)) {
                $this->Flash->success(__('The users health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users health unit could not be saved. Please, try again.'));
        }
        $healthUnits = $this->UsersHealthUnits->HealthUnits->find('list', ['limit' => 200]);
        $users = $this->UsersHealthUnits->Users->find('list', ['limit' => 200]);
        $this->set(compact('usersHealthUnit', 'healthUnits', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Health Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersHealthUnit = $this->UsersHealthUnits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersHealthUnit = $this->UsersHealthUnits->patchEntity($usersHealthUnit, $this->request->getData());
            if ($this->UsersHealthUnits->save($usersHealthUnit)) {
                $this->Flash->success(__('The users health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users health unit could not be saved. Please, try again.'));
        }
        $healthUnits = $this->UsersHealthUnits->HealthUnits->find('list', ['limit' => 200]);
        $users = $this->UsersHealthUnits->Users->find('list', ['limit' => 200]);
        $this->set(compact('usersHealthUnit', 'healthUnits', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Health Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersHealthUnit = $this->UsersHealthUnits->get($id);
        if ($this->UsersHealthUnits->delete($usersHealthUnit)) {
            $this->Flash->success(__('The users health unit has been deleted.'));
        } else {
            $this->Flash->error(__('The users health unit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
   
}
