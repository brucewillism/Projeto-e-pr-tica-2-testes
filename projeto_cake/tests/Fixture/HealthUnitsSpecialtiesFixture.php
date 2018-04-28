<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HealthUnitsSpecialtiesFixture
 *
 */
class HealthUnitsSpecialtiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'health_unit_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'specialtie_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'specialtie_id' => ['type' => 'index', 'columns' => ['specialtie_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'health_unit_id' => ['type' => 'unique', 'columns' => ['health_unit_id', 'specialtie_id'], 'length' => []],
            'health_units_specialties_ibfk_1' => ['type' => 'foreign', 'columns' => ['health_unit_id'], 'references' => ['health_units', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'health_units_specialties_ibfk_2' => ['type' => 'foreign', 'columns' => ['specialtie_id'], 'references' => ['specialties', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'health_unit_id' => 1,
                'specialtie_id' => 1
            ],
        ];
        parent::init();
    }
}
