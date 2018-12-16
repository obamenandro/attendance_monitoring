<?php
namespace App\Test\TestCase\Form;

use App\Form\ApplicationForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ApplicationForm Test Case
 */
class ApplicationFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\ApplicationForm
     */
    public $Application;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Application = new ApplicationForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Application);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
