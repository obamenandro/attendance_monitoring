<?php
use Migrations\AbstractMigration;

class Subjects extends AbstractMigration
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
        $subjectsTable = $this->table('subjects');
        $subjectsTable
            ->addColumn('name', 'string', ['length' => 255])
            ->addColumn('del_flg', 'integer', ['length' => 11, 'default' => 0])
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
        $this->dropTable('subjects');
    }
}
