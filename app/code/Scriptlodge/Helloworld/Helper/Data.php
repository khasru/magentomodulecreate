<?php

namespace Scriptlodge\HelloWorld\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_scopeConfig;

    CONST ENABLE = 'scriptlodge_helloworld/general/enable';
    CONST BLOCK_LABEL = 'scriptlodge_helloworld/general/block_label';    

    /*     *
     *  @var \Magento\Framework\App\Config\ScopeConfigInterfac 
     */

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getEnable() {
        return $this->_scopeConfig->getValue(self::ENABLE);
    }

    public function getBlockLabel() {
        return $this->_scopeConfig->getValue(self::BLOCK_LABEL);
    }

    public function getTextAlign() {
        return $this->_scopeConfig->getValue(self::TEXT_ALIGN);
    }

}
