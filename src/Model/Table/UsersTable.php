<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Governments
 * @property |\Cake\ORM\Association\BelongsTo $Destinations
 * @property |\Cake\ORM\Association\HasMany $Attendances
 * @property |\Cake\ORM\Association\HasMany $Governments
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        // $this->belongsTo('Governments', [
        //     'foreignKey' => 'government_id',
        //     'joinType' => 'INNER'
        // ]);
        // $this->belongsTo('Destinations', [
        //     'foreignKey' => 'destination_id'
        // ]);
        // $this->hasMany('Attendances', [
        //     'foreignKey' => 'user_id'
        // ]);
        // $this->hasMany('Governments', [
        //     'foreignKey' => 'user_id'
        // ]);
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
        //     ->scalar('firstname')
        //     ->maxLength('firstname', 255)
        //     ->requirePresence('firstname', 'create')
        //     ->notEmpty('firstname');

        // $validator
        //     ->scalar('middlename')
        //     ->maxLength('middlename', 255)
        //     ->allowEmpty('middlename');

        // $validator
        //     ->scalar('lastname')
        //     ->maxLength('lastname', 255)
        //     ->requirePresence('lastname', 'create')
        //     ->notEmpty('lastname');

        // $validator
        //     ->scalar('bday')
        //     ->maxLength('bday', 255)
        //     ->requirePresence('bday', 'create')
        //     ->notEmpty('bday');

        // $validator
        //     ->scalar('address')
        //     ->maxLength('address', 255)
        //     ->requirePresence('address', 'create')
        //     ->notEmpty('address');

        // $validator
        //     ->integer('contact')
        //     ->requirePresence('contact', 'create')
        //     ->notEmpty('contact');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        // $validator
        //     ->scalar('place_of_birth')
        //     ->maxLength('place_of_birth', 255)
        //     ->requirePresence('place_of_birth', 'create')
        //     ->notEmpty('place_of_birth');

        // $validator
        //     ->scalar('citizenship')
        //     ->maxLength('citizenship', 255)
        //     ->requirePresence('citizenship', 'create')
        //     ->notEmpty('citizenship');

        // $validator
        //     ->scalar('civil_status')
        //     ->maxLength('civil_status', 255)
        //     ->requirePresence('civil_status', 'create')
        //     ->notEmpty('civil_status');

        // $validator
        //     ->scalar('name_of_spouse')
        //     ->maxLength('name_of_spouse', 255)
        //     ->allowEmpty('name_of_spouse');

        // $validator
        //     ->integer('number_of_children')
        //     ->allowEmpty('number_of_children');

        // $validator
        //     ->scalar('educational_attainment')
        //     ->maxLength('educational_attainment', 255)
        //     ->requirePresence('educational_attainment', 'create')
        //     ->notEmpty('educational_attainment');

        // $validator
        //     ->scalar('eligibility')
        //     ->maxLength('eligibility', 255)
        //     ->allowEmpty('eligibility');

        // $validator
        //     ->scalar('work_experience')
        //     ->maxLength('work_experience', 255)
        //     ->allowEmpty('work_experience');

        // $validator
        //     ->scalar('trainings')
        //     ->maxLength('trainings', 255)
        //     ->allowEmpty('trainings');

        // $validator
        //     ->integer('jobtype')
        //     ->allowEmpty('jobtype');

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
        $rules->add($rules->isUnique(['email']));
        // $rules->add($rules->existsIn(['government_id'], 'Governments'));
        // $rules->add($rules->existsIn(['destination_id'], 'Destinations'));

        return $rules;
    }
    /**
    * findAuth method
    * You can customize the query used to fetch the user record
    */
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            // We can specify which field we want to return only
            ->select([
                        'id','email',
                        'password',
                        // 'is_enable',
                        'role',
                        // 'password_updated'
                    ])
            ->where([
                        'role'    => 2,
                        // 'is_outsource' => 0
                   ]);
        return $query;
    }
}
