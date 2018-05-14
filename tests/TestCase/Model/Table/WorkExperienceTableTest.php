<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkExperienceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkExperienceTable Test Case
 */
class WorkExperienceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkExperienceTable
     */
    public $WorkExperience;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.work_experience',
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
        $config = TableRegistry::exists('WorkExperience') ? [] : ['className' => WorkExperienceTable::class];
        $this->WorkExperience = TableRegistry::get('WorkExperience', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WorkExperience);

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
