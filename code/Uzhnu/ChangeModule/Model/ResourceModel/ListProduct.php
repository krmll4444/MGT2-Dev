<?php

namespace  Uzhnu\ChangeModule\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ListProduct extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('uzhnu_bd-module_list_product', 'id');
    }
}
