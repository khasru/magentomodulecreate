<?php

namespace Scriptlodge\HelloWorld\Model\ResourceModel;

class HelloWorld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {

    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('scriptlodge_helloworld', 'id');
    }

}