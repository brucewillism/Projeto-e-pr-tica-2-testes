<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HealthUnitsSpecialtiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HealthUnitsSpecialtiesTable Test Case
 */
class HealthUnitsSpecialtiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HealthUnitsSpecialtiesTable
     */
    public $HealthUnitsSpecialties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.health_units_specialties',
        'app.health_units',
        'app.specialties'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HealthUnitsSpecialties') ? [] : ['className' => HealthUnitsSpecialtiesTable::class];
        $this->HealthUnitsSpecialties = TableRegistry::get('HealthUnitsSpecialties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HealthUnitsSpecialties);

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
