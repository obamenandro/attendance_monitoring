<?php
use Migrations\AbstractMigration;

class Applications extends AbstractMigration
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
        $table = $this->table('applications');
        $table
            ->addColumn('positions', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('firstname', 'string', [
                'length' => 255
            ])
            ->addColumn('middlename', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('lastname', 'string', [
                'length' => 255
            ])
            ->addColumn('street1', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('street2', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('city', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('country', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('state', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('zip_code', 'biginteger', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('phone', 'biginteger', [
                'default' => null,
                'null'    => true,
                'length' => 11
            ])
            ->addColumn('mobile', 'biginteger', [
                'default' => null,
                'null'    => true,
                'length' => 11
            ])
            ->addColumn('email', 'string', [
                'length' => 255,
                'null'   => false
            ])
            ->addColumn('qualifications', 'string', [
                'length' => 255,
                'null'    => true
            ])
            ->addColumn('accepted', 'integer', [
                'length'  => 11,
                'default' => 0
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
