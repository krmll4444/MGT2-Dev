<?php
namespace Uzhnu\Modules\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    public function execute()
    {
        echo 'Добрий день';
    }
}
