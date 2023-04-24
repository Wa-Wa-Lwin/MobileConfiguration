<?php

namespace Mobile\Configuration\Model;

use Mobile\Configuration\Model\ResourceModel\Configuration as ConfigurationResourceModel;
use Magento\Framework\Model\AbstractModel;

class Configuration extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ConfigurationResourceModel::class);
    }
}