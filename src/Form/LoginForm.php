<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class LoginForm extends Form
{
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('email', 'string')
            ->addField('password', 'string');
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->notEmpty('email', __('Username is required'))
                         ->notEmpty('password', __('Password is required'));
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
