<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailActivation Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $activation_key
 * @property int $status
 * @property int $deleted
 * @property \Cake\I18n\FrozenTime $deleted_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class EmailActivation extends Entity
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
        'user_id' => true,
        'activation_key' => true,
        'status' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
