<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserDepartmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserDepartmentsTable Test Case
 */
class UserDepartmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserDepartmentsTable
     */
    public $UserDepartments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_departments',
        'app.users',
        'app.departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserDepartments') ? [] : ['className' => UserDepartmentsTable::class];
        $this->UserDepartments = TableRegistry::get('UserDepartments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserDepartments);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
