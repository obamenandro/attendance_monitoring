<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class EmployeeGovernmentForm extends Form
{
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('sss', 'integer')
            ->addField('gsis', 'integer')
            ->addField('tin', 'integer')
            ->addField('philhealth', 'integer')
            ->addField('pagibig', 'integer')
            ;
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->notEmpty('sss', __('SSS is required.'))
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
                         ;
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
