<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserChecklistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserChecklistsTable Test Case
 */
class UserChecklistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserChecklistsTable
     */
    public $UserChecklists;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserChecklists') ? [] : ['className' => UserChecklistsTable::class];
        $this->UserChecklists = TableRegistry::get('UserChecklists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserChecklists);

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
