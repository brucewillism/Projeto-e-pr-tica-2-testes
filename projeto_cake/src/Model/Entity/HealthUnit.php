<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HealthUnit Entity
 *
 * @property int $id
 * @property string $name
 * @property string $telephone
 * @property string $CEP
 * @property string $complete_address
 * @property string $latitude
 * @property string $longitude
 *
 * @property \App\Model\Entity\User[] $users
 */
class HealthUnit extends Entity
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
        'name' => true,
        'telephone' => true,
        'CEP' => true,
        'complete_address' => true,
        'latitude' => true,
        'longitude' => true,
        'users' => true
    ];
}
