<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seminars Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Seminar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Seminar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Seminar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seminar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seminar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Seminar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seminar findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SeminarsTable extends Table
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

        $this->setTable('seminars');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
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
            ->scalar('attended')
            ->maxLength('attended', 255)
            ->allowEmpty('attended');

        $validator
            ->scalar('conducted_by')
            ->maxLength('conducted_by', 255)
            ->allowEmpty('conducted_by');

        $validator
            ->scalar('date')
            ->maxLength('date', 255)
            ->allowEmpty('date');

        $validator
            ->scalar('deleted_date')
            ->maxLength('deleted_date', 255)
            ->allowEmpty('deleted_date');

        $validator
            ->scalar('attended')
            ->requirePresence('attended','create')
            ->notEmpty('attended', 'Trainings/Seminars attended is required.');

        $validator
            ->scalar('conducted_by')
            ->requirePresence('conducted_by','create')
            ->notEmpty('conducted_by', 'Conducted by/at is required.');

        $validator
            ->scalar('date')
            ->requirePresence('date','create')
            ->notEmpty('date', 'Date is required.');
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
