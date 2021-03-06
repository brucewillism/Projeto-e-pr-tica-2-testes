<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * HealthUnits Controller
 *
 * @property \App\Model\Table\HealthUnitsTable $HealthUnits
 *
 * @method \App\Model\Entity\HealthUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HealthUnitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $healthUnits = $this->paginate($this->HealthUnits);

        $this->set(compact('healthUnits'));
    }

    /**
     * View method
     *
     * @param string|null $id Health Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->loadModel('comments');
        $comment = $this->comments->newEntity();
        
        $healthUnit = $this->HealthUnits->get($id, [
            'contain' => ['Specialties']
        ]);

        $comments = $this->comments->find("all",[
            "conditions"=>[
                "OR"=>["comments.health_unit_id"=>$id]
            ]
        ]);

        $this->set('healthUnit', $healthUnit);
        $this->set('comment', $comment);
        $this->set('comments', $comments);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $healthUnit = $this->HealthUnits->newEntity();
        if ($this->request->is('post')) {
            $healthUnit = $this->HealthUnits->patchEntity($healthUnit, $this->request->getData());
            if ($this->HealthUnits->save($healthUnit)) {
                $this->Flash->success(__('The health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health unit could not be saved. Please, try again.'));
        }
        $users = $this->HealthUnits->Users->find('list', ['limit' => 200]);
        $this->set(compact('healthUnit', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Health Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $healthUnit = $this->HealthUnits->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $healthUnit = $this->HealthUnits->patchEntity($healthUnit, $this->request->getData());
            if ($this->HealthUnits->save($healthUnit)) {
                $this->Flash->success(__('The health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health unit could not be saved. Please, try again.'));
        }
        $users = $this->HealthUnits->Users->find('list', ['limit' => 200]);
        $this->set(compact('healthUnit', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Health Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $healthUnit = $this->HealthUnits->get($id);
        if ($this->HealthUnits->delete($healthUnit)) {
            $this->Flash->success(__('The health unit has been deleted.'));
        } else {
            $this->Flash->error(__('The health unit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // public function isAuthorized($user)
    // {
    //     if ($this->request->getParam() === 'add') {
    //         return true;
    //     }
    //     if (in_array($this->request->action, ['edit', 'delete'])) {
    //         $healhUnitId = (int)$this->request->params['pass'][0];
    //         if ($this->healthUnit->isOwnedBy($healthUnitId, $user['id'])) {
    //             return true;
    //         }
    //     }
    //     return parent::isAuthorized($user);
    // }
    
    // public function isOwnedBy($healthUnit, $userId)
    // {
    //     return $this->exists(['id' => $healthUnit, 'user_id' => $userId]);
    // }
}
