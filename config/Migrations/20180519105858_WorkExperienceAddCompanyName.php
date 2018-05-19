<?php
use Migrations\AbstractMigration;

class WorkExperienceAddCompanyName extends AbstractMigration
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
        $table = $this->table('work_experience');
        $table
            ->addColumn('company_name', 'string', [
                'null'   => true,
                'length' => 255,
                'after'  => 'position'
            ])
            ->update();
    }
}
