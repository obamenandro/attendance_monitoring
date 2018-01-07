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
        //to run seeds bin/cake migrations seed
        //to generate seed bin/cake seed --data Users
        $data = [
            [
                'id' => '1',
                'firstname' => 'admin',
                'middlename' => NULL,
                'lastname' => '',
                'bday' => '',
                'address' => '',
                'contact' => '123',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$Iw6djN8glzros8XwpJSy0.MoHjoVRL.nTo.NE2tKrNky.Z/uHlzj6',
                'role' => '1',
                'place_of_birth' => '',
                'citizenship' => '',
                'civil_status' => '',
                'name_of_spouse' => NULL,
                'number_of_children' => '0',
                'government_id' => '1234',
                'educational_attainment' => '',
                'eligibility' => NULL,
                'work_experience' => NULL,
                'trainings' => NULL,
                'jobtype' => NULL,
                'destination_id' => NULL,
                'created' => '2018-01-07 06:11:36',
                'modified' => '2018-01-07 06:11:36',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
