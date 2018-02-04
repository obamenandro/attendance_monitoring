<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Government Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $sss_number
 * @property int $gsis_number
 * @property int $tin_number
 * @property int $philhealth_number
 * @property int $pagibig_number
 * @property int $del_flg
 * @property string $deleted_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Government extends Entity
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
        'sss_number' => true,
        'gsis_number' => true,
        'tin_number' => true,
        'philhealth_number' => true,
        'pagibig_number' => true,
        'del_flg' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
