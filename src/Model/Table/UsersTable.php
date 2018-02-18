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
        $this->belongsTo('Governments', [
            'foreignKey' => 'user_id',
            'joinType'   => 'INNER',
        ]);
        $this->hasMany('Attendances', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserDepartments', [
            'foreignKey' => 'user_id',
            'joinType'   => 'INNER',
            'conditions' => ['UserDepartments.del_flg' => 0]
        ]);
        $this->hasMany('UserSubjects', [
            'foreignKey' => 'user_id',
            'joinType'   => 'INNER',
            'conditions' => ['UserSubjects.del_flg' => 0]
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');
        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');
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
        $rules->add($rules->existsIn(['government_id'], 'Governments'));

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
            ->select(['id', 'email', 'password', 'role'])
            ->where(['role' => 2]);
        return $query;
    }
}
