<?php
use Migrations\AbstractMigration;

class UserSubjects extends AbstractMigration
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
        // $this->dropTable('user_subjects');
        $user_subjectsTable = $this->table('user_subjects');
        $user_subjectsTable
            ->addColumn('user_id', 'integer', [
                'length' => 11,
                'null'   => false
            ])
            ->addColumn('subject_id', 'integer', [
                'length' => 11,
                'null'   => false
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
}
