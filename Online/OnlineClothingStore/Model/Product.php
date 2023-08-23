<?php
namespace Online\OnlineClothingStore\Model;

use Magento\Framework\Model\AbstractModel;

class Product extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('OnlineClothingStore\Model\ResourceModel\Product');
    }
}
