<?php
use Migrations\AbstractMigration;

class UserAttainments extends AbstractMigration
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
        $table = $this->table('user_attainments');
        $table
            ->addColumn('user_id', 'integer', [
                'null'   => false,
                'length' => 11
            ])
            ->addColumn('degree', 'integer', [
                'length'  => 11,
                'default' => 0
            ])
            ->addColumn('school_name', 'string', [
                'length' => 255,
                'null'   => true
            ])
            ->addColumn('units', 'integer', [
                'default' => 0,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('course', 'string', [
                'length' => 255,
                'null'   => true
            ])
            ->addColumn('year_graduated', 'string', [
                'length' => 255,
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
