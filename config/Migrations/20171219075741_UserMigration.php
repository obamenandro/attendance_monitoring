<?php
use Migrations\AbstractMigration;

class UserMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        // $this->dropTable('users');
        $usersTable = $this->table('users');
        $usersTable
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
            ->addColumn('image', 'string', [
                'length' => 255,
                'null'   => true
            ])
            ->addColumn('birthdate', 'string', [
                'default' => null,
                'null'    => true,
                'length'  => 255
            ])
            ->addColumn('address', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('contact', 'biginteger', [
                'default' => null,
                'null'    => true,
                'length' => 11
            ])
            ->addColumn('email', 'string', [
                'length' => 255,
                'null'   => false
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('role', 'integer', [
                'default' => 2,
                'length'  => 11
            ])
            ->addColumn('place_of_birth', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('citizenship', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('civil_status', 'string', [
                'default' => null,
                'null'    => true,
                'length' => 255
            ])
            ->addColumn('name_of_spouse', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('number_of_children', 'integer', [
                'default' => 0,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('educational_attainment', 'string', [
                'length' => 255,
                'null'    => true
            ])
            ->addColumn('eligibility', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('work_experience', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('trainings', 'string', [
                'default' => null,
                'length'  => 255,
                'null'    => true
            ])
            ->addColumn('jobtype', 'integer', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('designation', 'integer', [
                'default' => null,
                'length'  => 11,
                'null'    => true
            ])
            ->addColumn('position', 'string', [
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

    public function down()
    {
        $this->dropTable('users');
    }
}
