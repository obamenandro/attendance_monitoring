<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * ValidateEmailAndPassword Form.
 */
class ValidateEmailAndPasswordForm extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \Cake\Form\Schema $schema From schema
     * @return \Cake\Form\Schema
     */
    protected function _buildSchema(Schema $schema)
    {
        return $schema
            ->addField('email', 'string')
            ->addField('password', 'string');
    }

    /**
     * Form validation builder
     *
     * @param \Cake\Validation\Validator $validator to use against the form
     * @return \Cake\Validation\Validator
     */
    protected function _buildValidator(Validator $validator)
    {
        return $validator
            ->notEmpty('email', __('Email is required.'))
            ->add('email', [
                'uniqueEmailRule' => [
                    'rule'    => [$this, 'isUnique'],
                    'message' => 'Email already registered'
                ]
            ])
            ->add('email', 'validFormat', [
                'rule'    => 'email',
                'message' => __('Invalid email address')
            ]);
    }
    public function isUnique ($value, $context) {
        $Users = TableRegistry::get('Users');
        $user  = $Users->find('all')
                ->where([
                    'email'   => $value,
                    'del_flg' => 0
                ]);
        if ($user->isEmpty() || $value == $context['data']['email']) {
            return true;
        }
        return false;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array $data Form data.
     * @return bool
     */
    protected function _execute(array $data)
    {
        return true;
    }
}
