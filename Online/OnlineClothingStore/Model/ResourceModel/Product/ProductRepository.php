<?php
namespace Online\OnlineClothingStore\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class ProductRepository extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Online\OnlineClothingStore\Model\Product',
            'Online\OnlineClothingStore\Model\ResourceModel\Product'
        );
    }
}
