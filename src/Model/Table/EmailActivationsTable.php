<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmailActivation Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\EmailActivation get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmailActivation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmailActivation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmailActivation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailActivation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmailActivation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmailActivation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmailActivationsTable extends Table
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

        $this->setTable('email_activation');
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

        // $validator
        //     ->scalar('activation_key')
        //     ->maxLength('activation_key', 255)
        //     ->requirePresence('activation_key', 'create')
        //     ->notEmpty('activation_key');

        // $validator
        //     ->integer('status')
        //     ->requirePresence('status', 'create')
        //     ->notEmpty('status');

        // $validator
        //     ->integer('deleted')
        //     ->requirePresence('deleted', 'create')
        //     ->notEmpty('deleted');

        // $validator
        //     ->dateTime('deleted_date')
        //     ->allowEmpty('deleted_date');

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
