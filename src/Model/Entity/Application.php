<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property string $positions
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $street1
 * @property string $street2
 * @property string $city
 * @property string $country
 * @property string $state
 * @property int $zip_code
 * @property int $phone
 * @property int $mobile
 * @property string $email
 * @property string $qualifications
 * @property int $accepted
 * @property int $del_flg
 * @property string $deleted_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Application extends Entity
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
        'positions' => true,
        'firstname' => true,
        'middlename' => true,
        'lastname' => true,
        'street1' => true,
        'street2' => true,
        'city' => true,
        'country' => true,
        'state' => true,
        'zip_code' => true,
        'phone' => true,
        'mobile' => true,
        'email' => true,
        'qualifications' => true,
        'accepted' => true,
        'del_flg' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true
    ];
}
