<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

/**
 * AdminAddEmployee Form.
 */
class AdminAddEmployeeForm extends Form
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
            ->addField('jobtype', 'integer')
            ->addField('designation', 'integer')
            ->addField('date_hired', 'string')
            ->addField('department', 'integer')
            ->addField('subject', 'string')
            ->addField('total_leave', 'integer');
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
            ->notEmpty('jobtype', __('Jobtype is required.'))
            ->notEmpty('designation', __('Designation is required.'))
            ->notEmpty('date_hired', __('Date Hired is required.'))
            ->notEmpty('department', __('Department is required.'))
            ->notEmpty('total_leave', __('Leave is required.'));     
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
