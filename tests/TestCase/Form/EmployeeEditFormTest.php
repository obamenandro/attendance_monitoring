<?php
namespace App\Test\TestCase\Form;

use App\Form\EmployeeEditForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\EmployeeEditForm Test Case
 */
class EmployeeEditFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\EmployeeEditForm
     */
    public $EmployeeEdit;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->EmployeeEdit = new EmployeeEditForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeeEdit);

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
