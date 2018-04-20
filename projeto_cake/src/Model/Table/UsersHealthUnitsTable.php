<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersHealthUnits Model
 *
 * @property \App\Model\Table\HealthUnitsTable|\Cake\ORM\Association\BelongsTo $HealthUnits
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UsersHealthUnit get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersHealthUnit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersHealthUnit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersHealthUnit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersHealthUnit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersHealthUnit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersHealthUnit findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersHealthUnitsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users_health_units');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('HealthUnits', [
            'foreignKey' => 'health_unit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['health_unit_id'], 'HealthUnits'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
