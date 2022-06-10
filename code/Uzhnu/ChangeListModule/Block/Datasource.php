<?php

namespace Uzhnu\ChangeListModule\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use Uzhnu\ChangeListModule\Model\ListProductFactory;

class Datasource extends Template
{
    protected ListProduct $listProduct;

    public function __construct(Template\Context $context, ListProductFactory $listProductFactory, array $data = [])
    {
        $this->listProductFactory = $listProductFactory;
        parent::__construct($context, $data);
    }

    public  function getListProduct()
    {
        $listProduct = $this->listProductFactory->create();
        return $listProduct->getCollection();
    }

}
