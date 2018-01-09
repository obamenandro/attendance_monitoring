<?php
namespace App\Test\TestCase\Form;

use App\Form\SubjectForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\SubjectForm Test Case
 */
class SubjectFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\SubjectForm
     */
    public $Subject;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Subject = new SubjectForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subject);

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
