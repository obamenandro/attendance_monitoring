<?php
use Migrations\AbstractMigration;

class AddUserDeparment extends AbstractMigration
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
        $table->removeColumn('department_id');
        $table->addColumn('department', 'string', [
            'length' => 255,
            'after'  => 'date_hired'
        ])
        ->update();
    }
}
