<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
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
            ->addField('contact', 'integer')
            ->addField('email', 'string')
            ->addField('password', 'string')
            ->addField('place_of_birth', 'string')
            ->addField('name_of_spouse', 'string')
            ->addField('citizenship', 'string')
            ->addField('civil_status', 'integer')
            ->addField('number_of_children', 'integer')
            ->addField('governme_id', 'integer')
            ->addField('educational_attainment', 'string')
            ->addField('eligibility', 'string')
            ->addField('sss', 'integer')
            ->addField('gsis', 'integer')
            ->addField('tin', 'integer')
            ->addField('philhealth', 'integer')
            ->addField('pagibig', 'integer')
            ;
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->notEmpty('firstname', __('Firstname is required.'))
                         ->notEmpty('lastname', __('Lastname is required.'))
                         ->notEmpty('middlename', __('Middlename is required.'))
                         ->notEmpty('bday', __('Birthday is required.'))
                         ->notEmpty('address', __('Address is required.'))
                         ->notEmpty('contact', __('Contact is required.'))
                         ->notEmpty('email', __('Email is required.'))
                         ->notEmpty('password', __('Password is required.'))
                         ->notEmpty('citizenship', __('Citizenship is required.'))
                         ->notEmpty('civil_status', __('Civil status is required.'))
                         ->notEmpty('place_of_birth', __('Place of birth is required.'))
                         ->notEmpty('sss', __('SSS is required.'))
                         ->notEmpty('gsis', __('GSIS is required.'))
                         ->notEmpty('tin', __('TIN is required.'))
                         ->notEmpty('philhealth', __('Philhealth is required.'))
                         ->notEmpty('pagibig', __('PAGIBIG is required.'))
                         ->add('sss',[
                            'numeric' => [
                                'rule' => 'numeric',
                                'message' => 'Contact must be a number.'
                            ]
                         ])
                         ->add('contact',[
                            'numeric' => [
                                'rule' => 'numeric',
                                'message' => 'Contact must be a number.'
                            ]
                         ])
                         ;
                        //  ->add('password', [
                        //     'minLength' => [
                        //         'rule' => ['minLength', 8],
                        //         'last' => true,
                        //         'message' => 'Password must have minimum of 8 characters.'
                        //     ],
                        //  ])
                        //  ->add('confirm_password', [
                        //     'minLength' => [
                        //         'rule' => ['minLength', 8],
                        //         'last' => true,
                        //         'message' => 'Password must have minimum of 8 characters.'
                        //     ],
                        //  ])
                        //  // Inline Validation rule for same password
                        //  ->add('confirm_password', 'equal', [
                        //     'rule' => function ($value, $context) {
                        //         return $context['data']['password'] == $value;
                        //     },
                        //     'message' => 'Password and Confirm Password must be equal'
                        // ]);
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
