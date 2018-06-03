<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seminar Entity
 *
 * @property int $id
 * @property string $attended
 * @property int $user_id
 * @property string $conducted_by
 * @property string $date
 * @property int $del_flg
 * @property string $deleted_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Seminar extends Entity
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
        'attended' => true,
        'user_id' => true,
        'conducted_by' => true,
        'date' => true,
        'del_flg' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true
    ];
}
