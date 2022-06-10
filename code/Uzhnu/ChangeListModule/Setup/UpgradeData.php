<?php

namespace  Uzhnu\ChangeListModule\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;


class UpgradeData implements UpgradeDataInterface
{


    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('uzhnu_bd-module_list_product');

        if(version_compare($context->getVersion(), '1.1.0', '<')) {
            $data = [
                [
                    'title' => 'Joust Duffle Bag',
                    'count' => 10,
                    'inStock' => false,
                ],
                [
                    'title' => 'Impulse Duffle',
                    'count' => 6,
                    'inStock' => false,
                ],
                [
                    'title' => 'Strike Endurance Tee',
                    'count' => 6,
                    'inStock' => false,
                ],
                [
                    'title' => 'Argus All-Weather Tank',
                    'count' => 2,
                    'inStock' => false,
                ],
                [
                    'title' => 'Geo Insulated Jogging Pant',
                    'count' => 4,
                    'inStock' => false,
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }
        $setup->endSetup();
    }
}
