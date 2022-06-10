<?php

namespace  Uzhnu\BDModule\Model\ResourceModel\ListProduct;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Uzhnu\BDModule\Model\ListProduct', 'Uzhnu\BDModule\Model\ResourceModel\ListProduct');
    }
}
