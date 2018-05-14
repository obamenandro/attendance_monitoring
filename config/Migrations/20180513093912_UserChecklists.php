<?php
use Migrations\AbstractMigration;

class UserChecklists extends AbstractMigration
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
        $table = $this->table('user_checklists');
        $table
        ->addColumn('user_id', 'integer', [
            'null'   => false,
            'length' => 11
        ])
        ->addColumn('requirement_id', 'integer', [
            'null'   => true,
            'length' => 11
        ])
        ->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'limit'   => null,
            'null'    => true
        ])
        ->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'limit'   => null,
            'null'    => true
        ])
        ->create();
    }
}
