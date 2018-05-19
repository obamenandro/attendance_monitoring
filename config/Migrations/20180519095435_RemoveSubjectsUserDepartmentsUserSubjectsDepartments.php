<?php
use Migrations\AbstractMigration;

class RemoveSubjectsUserDepartmentsUserSubjectsDepartments extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->dropTable('subjects');
        $this->dropTable('user_departments');
        $this->dropTable('user_subjects');
        $this->dropTable('departments');
    }
}
