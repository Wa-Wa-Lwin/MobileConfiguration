<?php

namespace Mobile\HelloWorld\Model\ResourceModel\HelloWorld;
Mobile\Configuration\Model\ResourceModel\Configuration;
\Collection.php

use Mobile\Configuration\Model\Configuration as ConfigurationModel;
use Mobile\Configuration\Model\ResourceModel\Configuration as ConfigurationResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            ConfigurationModel::class,
            ConfigurationResourceModel::class
        );
    }
}