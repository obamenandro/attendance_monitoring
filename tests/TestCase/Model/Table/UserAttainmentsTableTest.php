<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAttainmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAttainmentsTable Test Case
 */
class UserAttainmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserAttainmentsTable
     */
    public $UserAttainments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_attainments',
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
        $config = TableRegistry::exists('UserAttainments') ? [] : ['className' => UserAttainmentsTable::class];
        $this->UserAttainments = TableRegistry::get('UserAttainments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserAttainments);

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
