<?php
namespace App\Test\TestCase\Form;

use App\Form\ValidateEmailAndPasswordForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ValidateEmailAndPasswordForm Test Case
 */
class ValidateEmailAndPasswordFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\ValidateEmailAndPasswordForm
     */
    public $ValidateEmailAndPassword;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->ValidateEmailAndPassword = new ValidateEmailAndPasswordForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ValidateEmailAndPassword);

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
