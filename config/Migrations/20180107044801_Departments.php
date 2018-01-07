<?php
use Migrations\AbstractMigration;

class Departments extends AbstractMigration
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
        $departmentsTable = $this->table('departments');
        $departmentsTable
            ->addColumn('name', 'string', ['length' => 255])
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
        $this->dropTable('departments');
    }
}
