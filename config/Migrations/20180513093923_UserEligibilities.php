<?php
use Migrations\AbstractMigration;

class UserEligibilities extends AbstractMigration
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
        $table = $this->table('user_eligibilities');
        $table
        ->addColumn('user_id', 'integer', [
            'null'   => false,
            'length' => 11
        ])
        ->addColumn('exam_name', 'string', [
            'null'   => false,
            'length' => 255
        ])
        ->addColumn('license_no', 'integer', [
            'null'   => false,
            'length' => 11
        ])
        ->addColumn('valid_until', 'string', [
            'null'   => false,
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
