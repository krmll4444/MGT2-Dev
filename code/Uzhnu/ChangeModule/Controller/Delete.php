<?php

namespace Uzhnu\ChangeModule\Controller\Index;

use \Magento\Framework\App\ActionInterface;
use \Magento\Framework\App\Action\Context;
use Uzhnu\ChangeModule\Model\ListProductFactory;

class Delete implements ActionInterface
{
    protected $_commentFactory;

    public function __construct(Context $context, ListProductFactory $commentFactory) {
        $this->_commentFactory = $commentFactory;
    }

    public function execute()
    {
        $id = $_POST["id"];
        try {
            $model = $this->_commentFactory->create();
            $model->load($id);
            $model->delete();
        } catch (\Exception $e) {
        }
    }
}
