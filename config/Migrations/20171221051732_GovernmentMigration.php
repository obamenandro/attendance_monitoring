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
        $usersTable = $this->table('governments');
        $usersTable
            ->addColumn('user_id', 'integer', ['length' => 11])
             ->addColumn('sss', 'integer', [
                'default'=>null,
                'length' => 11,
                'null' => true
            ])
            ->addColumn('gsis', 'integer', [
                'default'=>null,
                'length' => 11,
                'null' => true
            ])
            ->addColumn('tin', 'integer', [
                'default'=>null,
                'length' => 11,
                'null' => true
            ])
            ->addColumn('philhealth', 'integer', ['length' => 11])
            ->addColumn('pagibig', 'integer', ['length' => 11])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('governments');
    }
}
