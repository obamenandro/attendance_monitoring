<?php
use Migrations\AbstractMigration;

class UserAttainmentAddLevelAttained extends AbstractMigration
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
            ->addColumn('level_attained', 'string', [
                'null'   => true,
                'length' => 255,
                'after'  => 'year_graduated'
            ])
            ->update();
    }
}
