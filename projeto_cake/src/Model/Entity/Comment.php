<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property string $content
 * @property int $health_unit_id
 * @property \Cake\I18n\FrozenTime $data
 * @property string $author
 *
 * @property \App\Model\Entity\HealthUnit $health_unit
 */
class Comment extends Entity
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
        'content' => true,
        'health_unit_id' => true,
        'data' => true,
        'author' => true,
        'health_unit' => true
    ];
}
