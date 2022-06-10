<?php

namespace Uzhnu\ChangeModule\Controller\Index;

use \Magento\Framework\App\ActionInterface;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use Uzhnu\ChangeModule\Model\ListProductFactory;
use \Magento\Framework\Controller\ResultFactory;

class Index extends Action implements ActionInterface
{
    protected $request;
    protected $_moduleFactory;
    protected $resultRedirect;

    public function __construct(Context $context, ListProductFactory $moduleFactory, ResultFactory $result) {
        $this->_moduleFactory = $moduleFactory;
        $this->resultRedirect = $result;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $model = $this->_moduleFactory->create();
        $data = $this->getRequest()->getPost();
        if (isset($data['id'])) {
            $model->load($data['id']);
        }
        $model->setData('title', $data['title']);
        $model->setData('count', $data['count']);
        $model->setData('inStock', $data['inStock']);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }
        return $resultRedirect;
    }
}
