<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

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
        $this->hasMany('Governments', [
            'foreignKey' => 'user_id',
            'joinType'   => 'INNER',
            'conditions' => ['Governments.del_flg' => 0]
        ]);
        $this->hasMany('Attendances', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserAttainments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserChecklists', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasOne('UserEligibilities', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Seminars', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasOne('WorkExperience', [
            'foreignKey' => 'user_id'
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
            ->notEmpty('email', 'Email is required.');
        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');
        $validator
            ->scalar('lastname')
            ->requirePresence('lastname', 'update')
            ->notEmpty('lastname', 'Lastname is required.');
        $validator
            ->scalar('firstname', 'update')
            ->requirePresence('firstname', 'update')
            ->notEmpty('firstname', 'Firstname is required.');
        $validator
            ->add('image', 'file', [
                'rule'  => ['mimeType', ['image/jpeg', 'image/png', 'image/jpg']],
                'on'    => function ($context) {
                    return !empty($context['data']['image']);
                },
                'message' => "Image must be jpeg, jpg and jpeg"
            ])
            ->allowEmpty('image');
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
        // $rules->add($rules->isUnique(['email']));
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

    public function validationPassword(Validator $validator) {
        $validator
            ->add('old_password', 'custom', [
                'rule' => function($value, $context) {
                    $user = $this->get($context['data']['id']);
                    if ($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                            return true;
                        }
                    }
                    return false;
                },
                'message' => 'The old password does not match the current password.'
            ])
            ->notEmpty('old_password', 'Old password is required.');

        $validator
            ->add('new_password', [
                'match' => [
                    'rule' => ['compareWith', 'confirm_password'],
                    'message' => 'The passwords does not match.'
                ]
            ])
            ->notEmpty('new_password', 'New password is required.');

        $validator
            ->add('confirm_password', [
                'match' => [
                    'rule' => ['compareWith', 'new_password'],
                    'message' => 'The passwords does not match.'
                ]
            ])
            ->notEmpty('confirm_password', 'Confirm password is required.');

        return $validator;
    }

    public function validationNewPassword(Validator $validator) {
        $validator
            ->add('new_password', [
                'match' => [
                    'rule' => ['compareWith', 'confirm_password'],
                    'message' => 'The passwords does not match.'
                ]
            ])
            ->notEmpty('new_password', 'New password is required.');

        $validator
            ->add('confirm_password', [
                'match' => [
                    'rule' => ['compareWith', 'new_password'],
                    'message' => 'The passwords does not match.'
                ]
            ])
            ->notEmpty('confirm_password', 'Confirm password is required.');

        return $validator;
    }

    public function validationEditUser(Validator $validator) {
        $validator
            ->scalar('jobtype')
            ->notEmpty('jobtype', __('Jobtype is required.'));
        $validator
            ->scalar('designation')
            ->notEmpty('designation', __('Designation is required.'));
        $validator
            ->scalar('date_hired')
            ->notEmpty('date_hired', __('Date Hired is required.'));
        $validator
            ->scalar('department')
            ->notEmpty('department', __('Department is required.'));
        $validator
            ->scalar('position')
            ->notEmpty('position', __('Position is required.'));
        $validator
            ->scalar('leave')
            ->notEmpty('leave', __('Leave is required.'));
        return $validator;
    }
}
