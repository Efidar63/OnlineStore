<?php
namespace Online\OnlineClothingStore\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Product extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('onlineclothingstore_products', 'product_id');
    }
}
