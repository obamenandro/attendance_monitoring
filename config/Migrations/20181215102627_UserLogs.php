<?php
use Migrations\AbstractMigration;

class UserLogs extends AbstractMigration
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
        $table = $this->table('user_logs');
        $table
            ->addColumn('user_id', 'integer', [
                'length' => 11
            ])
            ->addColumn('page', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('action', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
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
