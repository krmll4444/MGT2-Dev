<?php

namespace  Uzhnu\ChangeListModule\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use Uzhnu\ChangeListModule\Api\Data\ListProductInterface;

class ListProduct extends AbstractModel implements  IdentityInterface, ListProductInterface
{
    const CACHE_TAG = 'uzhnu_bd-module_list_product';

    protected function _construct()
    {
        $this->_init('Uzhnu\ChangeListModule\Model\ResourceModel\ListProduct');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId()
    {
        return $this->getData('id');
    }

    public function getTitle()
    {
        return $this->getData('title');
    }

    public function getCount()
    {
        return $this->getData('count');
    }

    public function getStock()
    {
        return $this->getData('inStock');
    }

    public function chengInStock($data){
        $this->setData('inStock', $data);
    }
}

