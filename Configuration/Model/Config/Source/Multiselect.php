<?php

namespace Vendor\Module\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Multiselect implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Option 1')],
            ['value' => '2', 'label' => __('Option 2')],
            ['value' => '3', 'label' => __('Option 3')],
        ];
    }
}
