<?php
namespace Mobile\Configuration\Block; 

class Configuration extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getSampleText()
    {
        return 'Mobile Configuration';
    }
}
