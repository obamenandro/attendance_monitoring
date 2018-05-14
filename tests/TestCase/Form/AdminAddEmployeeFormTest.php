<?php
namespace App\Test\TestCase\Form;

use App\Form\AdminAddEmployeeForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\AdminAddEmployeeForm Test Case
 */
class AdminAddEmployeeFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\AdminAddEmployeeForm
     */
    public $AdminAddEmployee;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->AdminAddEmployee = new AdminAddEmployeeForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdminAddEmployee);

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
