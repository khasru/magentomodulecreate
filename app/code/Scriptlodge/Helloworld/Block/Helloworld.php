<?php

namespace Scriptlodge\Helloworld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template {

    protected $_helper;
    protected $_objectManager;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], \Scriptlodge\HelloWorld\Helper\Data $helper, \Magento\Framework\ObjectManagerInterface $objectManager) {
        parent::__construct($context, $data);
        $this->_helper = $helper;
        $this->_objectManager = $objectManager;
    }

    public function getHelloText() {
        return 'Hello World!';
    }

    public function getBlockLabel() {
        return $this->_helper->getBlockLabel();
    }

    protected function _toHtml() {
        if ($this->_helper->getEnable()) {
            return parent::_toHtml();
        } else {
            return '';
        }
    }

    public function getCollection() {
        $model = $this->_objectManager->create('Scriptlodge\HelloWorld\Model\HelloWorld');
        $collection = $model->getCollection();

        return $collection;
    }

}
