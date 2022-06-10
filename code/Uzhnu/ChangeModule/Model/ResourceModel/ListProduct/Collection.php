<?php

namespace  Uzhnu\ChangeModule\Model\ResourceModel\ListProduct;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Uzhnu\ChangeModule\Model\ListProduct', 'Uzhnu\ChangeModule\Model\ResourceModel\ListProduct');
    }
}
