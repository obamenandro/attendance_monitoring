<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserEligibilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserEligibilitiesTable Test Case
 */
class UserEligibilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserEligibilitiesTable
     */
    public $UserEligibilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_eligibilities',
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
        $config = TableRegistry::exists('UserEligibilities') ? [] : ['className' => UserEligibilitiesTable::class];
        $this->UserEligibilities = TableRegistry::get('UserEligibilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserEligibilities);

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
