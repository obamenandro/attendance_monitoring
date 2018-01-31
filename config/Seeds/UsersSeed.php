<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => '2',
                'firstname' => 'admin',
                'middlename' => NULL,
                'lastname' => '',
                'bday' => '',
                'address' => '',
                'contact' => '123',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$Q2vgYtfbhQxiZbYtO4E1GePNS7RJ7GGbNgestqtCosxxgvVWenqNS',
                'role' => '1',
                'place_of_birth' => '',
                'citizenship' => '',
                'civil_status' => '',
                'name_of_spouse' => NULL,
                'number_of_children' => '0',
                'educational_attainment' => '',
                'eligibility' => NULL,
                'work_experience' => NULL,
                'trainings' => NULL,
                'jobtype' => NULL,
                'designation' => NULL,
                'created' => '2018-01-09 03:08:58',
                'modified' => '2018-01-09 03:08:58',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
