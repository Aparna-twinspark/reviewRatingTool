<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Routing\Router;

/**
 * Business Entity
 *
 * @property int $id
 * @property string $name
 * @property string $image_path
 * @property string $image_name
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $is_deleted
 *
 * @property \App\Model\Entity\BusinessUser[] $business_users
 * @property \App\Model\Entity\ReviewSetting[] $review_settings
 */
class Business extends Entity
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
        '*' => true,
        'id' => false
    ];

    protected $_virtual = ['image_url'];
    protected function _getImageUrl()
    {

        if(isset($this->_properties['image_name']) && is_array($this->_properties['image_name'])){
            $this->_properties['image_name'] = '';
        }
        if(isset($this->_properties['image_name']) && !empty($this->_properties['image_name'])) {
            $url = Router::url('/business_logos/'.$this->_properties['image_name'],true);
        }else{
            $url = Router::url('/img/default-img.jpeg',true);
        }
        return $url;

    }
}
