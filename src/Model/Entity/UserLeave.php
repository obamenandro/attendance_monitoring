<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserLeave Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate $date_start
 * @property \Cake\I18n\FrozenDate $date_end
 * @property string $leave_reason
 * @property int $status
 * @property \Cake\I18n\FrozenDate $cancel_reason
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $deleted_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class UserLeave extends Entity
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
        'date_start' => true,
        'date_end' => true,
        'leave_reason' => true,
        'status' => true,
        'cancel_reason' => true,
        'del_flg' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
