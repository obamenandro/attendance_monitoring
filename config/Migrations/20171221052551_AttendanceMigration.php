<?php
use Migrations\AbstractMigration;

class AttendanceMigration extends AbstractMigration
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
        $usersTable = $this->table('attendances');
        $usersTable
            ->addColumn('user_id', 'integer', [
                'length' => 11
            ])
            ->addColumn('timein', 'string', [
                'length' => 255
            ])
            ->addColumn('timeout', 'string', [
                'length' => 255
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'length'  => 11,
                'null'    => true
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
        $this->dropTable('attendances');
    }
}
