<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GovernmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GovernmentsTable Test Case
 */
class GovernmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GovernmentsTable
     */
    public $Governments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.governments',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Governments') ? [] : ['className' => GovernmentsTable::class];
        $this->Governments = TableRegistry::get('Governments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Governments);

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
