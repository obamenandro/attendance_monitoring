<?php
use Migrations\AbstractMigration;

class UserLeaves extends AbstractMigration
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
        $user_leavesTable = $this->table('user_leaves');

        $user_leavesTable
            ->addColumn('user_id', 'integer', [
                'length' => 11,
                'null'   => false
            ])
            ->addColumn('date_start', 'date', [
                'null' => false
            ])
            ->addColumn('date_end', 'date', [
                'null' => false
            ])
            ->addColumn('leave_reason', 'string', [
                'length' => 255,
                'null'   => false
            ])
            ->addColumn('status', 'integer', [
                'default' => 0,
                'null'    => false
            ])
            ->addColumn('cancel_reason', 'date', [
                'length' => 255, 
                'null'   => true
            ])
            ->addColumn('del_flg', 'integer', [
                'length'  => 11,
                'default' => 0
            ])
            ->addColumn('deleted_date', 'datetime', [
                'null'   => true
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
