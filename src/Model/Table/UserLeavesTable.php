<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserLeaves Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserLeave get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserLeave newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserLeave[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserLeave|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserLeave patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserLeave[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserLeave findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserLeavesTable extends Table
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

        $this->setTable('user_leaves');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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

        $validator
            ->date('date_start')
            ->requirePresence('date_start', 'create')
            ->notEmpty('date_start', 'Date start is required.');

        $validator
            ->date('date_end')
            ->requirePresence('date_end', 'create')
            ->notEmpty('date_end', 'Date end is required.');

        $validator
            ->scalar('leave_reason')
            ->maxLength('leave_reason', 255)
            ->requirePresence('leave_reason', 'create')
            ->notEmpty('leave_reason', 'Leave reason is required.');
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
