<?php
use Migrations\AbstractSeed;

/**
 * Departments seed.
 */
class DepartmentsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'GenEd',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:55',
                'modified' => '2018-02-10 08:06:55',
            ],
            [
                'id' => '2',
                'name' => 'BSMT',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:55',
                'modified' => '2018-02-10 08:06:55',
            ],
            [
                'id' => '3',
                'name' => 'BSMarE',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:56',
                'modified' => '2018-02-10 08:06:56',
            ],
            [
                'id' => '4',
                'name' => 'BSNA',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:56',
                'modified' => '2018-02-10 08:06:56',
            ],
            [
                'id' => '5',
                'name' => 'Admin',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:56',
                'modified' => '2018-02-10 08:06:56',
            ],
            [
                'id' => '6',
                'name' => 'Staff',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:56',
                'modified' => '2018-02-10 08:06:56',
            ],
            [
                'id' => '7',
                'name' => 'Maintenance Personnel',
                'del_flg' => '0',
                'deleted_date' => NULL,
                'created' => '2018-02-10 08:06:56',
                'modified' => '2018-02-10 08:06:56',
            ],
        ];

        $table = $this->table('departments');
        $table->insert($data)->save();
    }
}
