<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UserChecklistsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UserChecklistsController Test Case
 */
class UserChecklistsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_checklists',
        'app.users',
        'app.governments',
        'app.attendances',
        'app.user_departments',
        'app.departments',
        'app.user_subjects',
        'app.subjects',
        'app.requirements'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
