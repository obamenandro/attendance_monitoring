<?php
use Migrations\AbstractMigration;

class RemoveTimeinTimeout extends AbstractMigration
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
        $table = $this->table('attendances');
        $table->removeColumn('timein');
        $table->removeColumn('timeout');
        $table->update();
    }
}
