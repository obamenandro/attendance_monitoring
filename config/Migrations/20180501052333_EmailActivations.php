<?php
use Migrations\AbstractMigration;

class EmailActivations extends AbstractMigration
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
        $email_activationTable = $this->table('email_activation');

        $email_activationTable
            ->addColumn('user_id', 'integer', [
                'length' => 11,
                'null'   => false
            ])
            ->addColumn('activation_key', 'string', [
                'length' => 255,
                'null'   => false
            ])
            ->addColumn('status', 'integer', [
                'length'  => 11,
                'default' => 0
            ])
            ->addColumn('deleted', 'integer', [
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
