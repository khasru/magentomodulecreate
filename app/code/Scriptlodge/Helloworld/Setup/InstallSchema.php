<?php

namespace Scriptlodge\Helloworld\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $installer = $setup;

        $installer->startSetup();
        $table = $installer->getConnection()
                ->newTable($installer->getTable('scriptlodge_helloworld'))
                ->addColumn(
                        'id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Id'
                )
                ->addColumn(
                        'name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, ['default' => null, 'nullable' => false], 'Name'
                )
                ->addColumn(
                        'address', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, ['default' => null, 'nullable' => false], 'Address'
                )
                ->addColumn(
                        'city', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, ['default' => null, 'nullable' => false], 'City'
                )
                ->addColumn(
                'country', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, ['default' => null, 'nullable' => false], 'Country'
        );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }

}
