<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\ORM\Rule\IsUnique;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class EmployeeRegistrationForm extends Form
{
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('firstname', 'string')
            ->addField('middlename', 'string')
            ->addField('lastname', 'string')
            ->addField('bday', 'date')
            ->addField('address', 'string')
            ->addField('email', 'string')
            ->addField('password', 'string')
            ->addField('place_of_birth', 'string')
            ->addField('name_of_spouse', 'string')
            ->addField('citizenship', 'string')
            ->addField('civil_status', 'integer')
            ->addField('number_of_children', 'integer')
            ->addField('governme_id', 'integer')
            ->addField('sss_number', 'integer')
            ->addField('gsis_number', 'integer')
            ->addField('tin_number', 'integer')
            ->addField('philhealth_number', 'integer')
            ->addField('pagibig_number', 'integer')
            ;
    }

    public function _buildValidator(Validator $validator)
    {
        return $validator->notEmpty('firstname', __('Firstname is required.'))
                         ->notEmpty('lastname', __('Lastname is required.'))
                         ->notEmpty('address', __('Address is required.'))
                         ->notEmpty('email', __('Email is required.'))
                         ->notEmpty('password', __('Password is required.'))
                         ->allowEmpty('tin_number')
                         ->allowEmpty('philhealth_number')
                         ->allowEmpty('pagibig_number')
                         ->allowEmpty('sss_number')
                         ->allowEmpty('gsis_number')
                         ->allowEmpty('contact')
                         ->add('email', [
                            'uniqueEmailRule' => [
                                'rule'    => [$this, 'isUnique'],
                                'message' => 'Email already registered'
                            ]
                         ])
                         ->requirePresence('email')
                         ->add('email', 'validFormat', [
                            'rule'    => 'email',
                            'message' => __('Invalid email address')
                         ])
                         ->add('sss_number',[
                            'numeric' => [
                                'rule'    => 'numeric',
                                'message' => 'SSS must be a number.'
                            ],
                            'countCheck' => [
                                'rule'     => function($value, $context) {
                                    return strlen($value) == 9;
                                },
                                'message'  => 'SSS NUMBER must be 9 numbers.'
                            ]
                         ])
                         ->add('gsis_number',[
                            'numeric' => [
                                'rule'    => 'numeric',
                                'message' => 'GSIS must be a number.'
                            ],
                            'countCheck' => [
                                'rule'     => function($value, $context) {
                                    return strlen($value) == 9;
                                },
                                'message'  => 'GSIS NUMBER must be 9 numbers.'
                            ]
                         ])
                         ->add('tin_number',[
                            'numeric' => [
                                'rule'    => 'numeric',
                                'message' => 'TIN must be a number.'
                            ],
                            'countCheck' => [
                                'rule'     => function($value, $context) {
                                    return strlen($value) == 9;
                                },
                                'message'  => 'TIN NUMBER must be 9 numbers.'
                            ]
                         ])
                         ->add('pagibig_number',[
                            'numeric' => [
                                'rule'    => 'numeric',
                                'message' => 'PAGIBIG must be a number.'
                            ],
                            'countCheck' => [
                                'rule'     => function($value, $context) {
                                    return strlen($value) == 9;
                                },
                                'message'  => 'PAGIBIG NUMBER must be 9 numbers.'
                            ]
                         ])
                         ->add('philhealth_number',[
                            'numeric' => [
                                'rule'    => 'numeric',
                                'message' => 'PHILHEALTH must be a number.'
                            ],
                            'countCheck' => [
                                'rule'     => function($value, $context) {
                                    return strlen($value) == 9;
                                },
                                'message'  => 'PHILHEALTH NUMBER must be 9 numbers.'
                            ]
                         ])
                         ->add('contact',[
                            'numeric' => [
                                'rule'    => 'numeric',
                                'message' => 'Contact must be a number.'
                            ]
                         ]);
    }
    /**
     * This function is checking if the email is already exists
     * @return boolean
     */
    public function isUnique ($value, $context) {
        $Users = TableRegistry::get('Users');
        $user  = $Users->find('all')
                ->where([
                    'email'   => $value,
                    'del_flg' => 0
                ]);
        if ($user->isEmpty()) {
            return true;
        }
        return false;
    }
    /**
    * _execute method
    * this is like last callback if the validations are true
    * we can send email or do something in this method
    */
    protected function _execute(array $data)
    {
        return true;
    }
}
