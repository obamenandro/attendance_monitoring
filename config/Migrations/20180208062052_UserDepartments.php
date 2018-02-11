<?php
use Migrations\AbstractMigration;

class UserDepartments extends AbstractMigration
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
        // $this->dropTable('user_departments');
        $user_departmentsTable = $this->table('user_departments');
        $user_departmentsTable
            ->addColumn('user_id', 'integer', [
                'length' => 11,
                'null'   => false
            ])
            ->addColumn('department_id', 'integer', [
                'length' => 11,
                'null'   => false
            ])
            ->addColumn('del_flg', 'integer', [
                'length'  => 11,
                'default' => 0
            ])
            ->addColumn('deleted_date', 'string', [
                'length' => 255,
                'null'   => true
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit'   => null,
                'null'    => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit'   => null,
                'null'    => true,
            ])
            ->create();
    }
}
