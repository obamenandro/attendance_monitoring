<?php
use Migrations\AbstractMigration;

class AddUserGovernmentsIds extends AbstractMigration
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
            ->addColumn('sss_number', 'biginteger', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('gsis_number', 'biginteger', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('tin_number', 'biginteger', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('philhealth_number', 'biginteger', [
                'length' => 11,
                'null'   => true
            ])
            ->addColumn('pagibig_number', 'biginteger', [
                'length' => 11,
                'null'   => true
            ])
            ->update();
    }
}
