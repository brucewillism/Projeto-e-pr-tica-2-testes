<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HealthUnitsSpecialty Entity
 *
 * @property int $id
 * @property int $health_unit_id
 * @property int $specialtie_id
 *
 * @property \App\Model\Entity\HealthUnit $health_unit
 * @property \App\Model\Entity\Specialty $specialty
 */
class HealthUnitsSpecialty extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'health_unit_id' => true,
        'specialtie_id' => true,
        'health_unit' => true,
        'specialty' => true
    ];
}
