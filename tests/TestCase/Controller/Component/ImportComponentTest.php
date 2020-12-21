<?php
namespace Fanatik3\Excel\Test\TestCase\Controller\Component;

use Fanatik3\Excel\Controller\Component\ImportComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ImportComponent Test Case
 */
class ImportComponentTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Import = new ImportComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Import);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->assertInstanceOf('\Fanatik3\Excel\Controller\Component\ImportComponent', $this->Import);
    }
}
