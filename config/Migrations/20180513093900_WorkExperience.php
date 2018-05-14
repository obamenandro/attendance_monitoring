<?php
use Migrations\AbstractMigration;

class WorkExperience extends AbstractMigration
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
        $table = $this->table('work_experience');
        $table
        ->addColumn('user_id', 'integer', [
            'null'   => false,
            'length' => 11
        ])
        ->addColumn('start_work', 'string', [
            'null'   => true,
            'length' => 255
        ])
        ->addColumn('end_work', 'string', [
            'null'   => true,
            'length' => 255
        ])
        ->addColumn('position', 'string', [
            'null'   => true,
            'length' => 255
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
