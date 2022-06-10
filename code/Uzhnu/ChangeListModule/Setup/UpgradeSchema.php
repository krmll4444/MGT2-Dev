<?php

namespace  Uzhnu\ChangeListModule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable('uzhnu_bd-module_list_product');
        if (!$setup->getConnection()->isTableExists($tableName)){
            $table = $setup
                ->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'ID'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                   255,
                    ['nullable' => false],
                    'Name'
                )
                ->addColumn(
                    'count',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'nullable' => false,
                        'unsigned' => true,
                    ],
                    'count'
                )
                ->addColumn(
                    'inStock',
                    Table::TYPE_BOOLEAN,
                    null,
                    ['nullable' => false],
                    'in stock'
                );
            $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}
