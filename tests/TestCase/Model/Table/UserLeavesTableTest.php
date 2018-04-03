<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserLeavesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserLeavesTable Test Case
 */
class UserLeavesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserLeavesTable
     */
    public $UserLeaves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_leaves',
        'app.users',
        'app.governments',
        'app.attendances',
        'app.user_departments',
        'app.departments',
        'app.user_subjects',
        'app.subjects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserLeaves') ? [] : ['className' => UserLeavesTable::class];
        $this->UserLeaves = TableRegistry::get('UserLeaves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserLeaves);

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
