<?php
use Migrations\AbstractMigration;

class Seminars extends AbstractMigration
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
        $table = $this->table('seminars');
        $table
            ->addColumn('attended', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('conducted_by', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('date', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
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
