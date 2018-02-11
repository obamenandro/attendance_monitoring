<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserSubjects Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SubjectsTable|\Cake\ORM\Association\BelongsTo $Subjects
 *
 * @method \App\Model\Entity\UserSubject get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserSubject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserSubject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserSubject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserSubject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserSubject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserSubject findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserSubjectsTable extends Table
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

        $this->setTable('user_subjects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Subjects', [
            'foreignKey' => 'subject_id',
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
        //     ->integer('del_flg')
        //     ->requirePresence('del_flg', 'create')
        //     ->notEmpty('del_flg');

        // $validator
        //     ->scalar('deleted_date')
        //     ->maxLength('deleted_date', 255)
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
        // $rules->add($rules->existsIn(['user_id'], 'Users'));
        // $rules->add($rules->existsIn(['subject_id'], 'Subjects'));

        return $rules;
    }
}
