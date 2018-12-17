<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

/**
 * Application Form.
 */
class ApplicationForm extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \Cake\Form\Schema $schema From schema
     * @return \Cake\Form\Schema
     */
    protected function _buildSchema(Schema $schema) {
        return $schema
            ->addField('positions', 'string')
            ->addField('firstname', 'string')
            ->addField('middlename', 'string')
            ->addField('lastname', 'string')
            ->addField('street1', 'string')
            ->addField('street2', 'string')
            ->addField('city', 'string')
            ->addField('country', 'string')
            ->addField('state', 'string')
            ->addField('zip_code', 'integer')
            ->addField('phone', 'integer')
            ->addField('mobile', 'integer')
            ->addField('email', 'string')
            ->addField('qualifications', 'string');
    }

    /**
     * Form validation builder
     *
     * @param \Cake\Validation\Validator $validator to use against the form
     * @return \Cake\Validation\Validator
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('positions', __('Position is required.'))
            ->notEmpty('firstname', __('Firstname is required.'))
            ->notEmpty('lastname', __('Lastname is required.'))
            ->notEmpty('middlename', __('Middlename is required.'))
            ->notEmpty('street1', __('Street is required.'))
            ->notEmpty('city', __('City is required.'))
            ->notEmpty('country', __('Country is required.'))
            ->notEmpty('state', __('State is required.'))
            ->notEmpty('zip_code', __('Zip code is required.'))
            ->add('zip_code',[
                'validateZipCode' => [
                    'rule'    => [$this, 'validZipCode'],
                    'message' => 'Invalid Zip Code.'
                ]
            ])
            ->notEmpty('phone', __('Phone is required.'))
            ->add('mobile', [
                'pattern' => [
                    'rule'    => [$this, 'phoneMobile'],
                    'message'  => 'Invalid mobile number.'
                ]
            ])
            ->notEmpty('email', __('Email is required.'))
            ->add('email', 'validFormat', [
                'rule'    => 'email',
                'message' => __('Invalid email address.')
            ])
            ->notEmpty('qualifications', __('Qualifications and Experience is required.'));

    }

    public function validZipCode ($value, $context) {
        if (preg_match('#[0-9]{4}#', $value)) {
            return true;
        }
        return false;
    }
    public function phoneMobile ($value, $context) {
        if (preg_match('/^[0-9]{10}+$/', $value)) {
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
