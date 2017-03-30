<?php

namespace Scriptlodge\HelloWorld\Model\ResourceModel\HelloWorld;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Scriptlodge\HelloWorld\Model\HelloWorld', 'Scriptlodge\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}