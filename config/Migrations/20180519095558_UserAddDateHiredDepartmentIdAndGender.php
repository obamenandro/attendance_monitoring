<?php
use Migrations\AbstractMigration;

class UserAddDateHiredDepartmentIdAndGender extends AbstractMigration
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
        $table = $this->table('users');
        $table
            ->addColumn('date_hired', 'string', [
                'length' => 255
            ])
            ->addColumn('department_id', 'integer', [
                'length'  => 11,
                'default' => NULL
            ])
            ->addColumn('gender', 'integer', [
                'length' => 11
            ])
            ->update();
    }
}
