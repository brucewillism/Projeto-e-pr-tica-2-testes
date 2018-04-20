<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersHealthUnitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersHealthUnitsTable Test Case
 */
class UsersHealthUnitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersHealthUnitsTable
     */
    public $UsersHealthUnits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_health_units',
        'app.health_units',
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
        $config = TableRegistry::exists('UsersHealthUnits') ? [] : ['className' => UsersHealthUnitsTable::class];
        $this->UsersHealthUnits = TableRegistry::get('UsersHealthUnits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersHealthUnits);

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
