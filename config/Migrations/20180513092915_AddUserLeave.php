<?php
use Migrations\AbstractMigration;

class AddUserLeave extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('leave', 'integer', [
            'default' => 0,
            'length'  => 11,
            'null'    => true,
            'after'   => 'contact'
        ]);
        $table->addColumn('subject', 'string', [
            'null'   => true,
            'length' => 255,
            'after'  => 'civil_status'
        ]);
        $table->update();
    }
}
