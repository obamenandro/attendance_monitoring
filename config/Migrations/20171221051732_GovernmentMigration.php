<?php
use Migrations\AbstractMigration;

class GovernmentMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->dropTable('governments');
        $usersTable = $this->table('governments');
        $usersTable
            ->addColumn('user_id', 'integer', [
                'length' => 11
            ])
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

    public function down()
    {
        $this->dropTable('governments');
    }
}
