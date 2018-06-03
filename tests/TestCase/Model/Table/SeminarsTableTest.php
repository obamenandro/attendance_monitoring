<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeminarsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeminarsTable Test Case
 */
class SeminarsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeminarsTable
     */
    public $Seminars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.seminars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Seminars') ? [] : ['className' => SeminarsTable::class];
        $this->Seminars = TableRegistry::get('Seminars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seminars);

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
}
