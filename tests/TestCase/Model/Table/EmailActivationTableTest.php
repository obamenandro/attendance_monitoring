<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailActivationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailActivationTable Test Case
 */
class EmailActivationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailActivationTable
     */
    public $EmailActivation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.email_activation',
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
        $config = TableRegistry::exists('EmailActivation') ? [] : ['className' => EmailActivationTable::class];
        $this->EmailActivation = TableRegistry::get('EmailActivation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmailActivation);

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
