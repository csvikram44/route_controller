<?php

namespace CsVikram\Product\Block;

use Magento\Framework\View\Element\Template;

class Product extends Template
{
    protected $_collection;
    public function __construct(
        Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        array $data = [])
    {

        $this->_collection = $collection;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        /*return $this->_collection->addAttributeToSelect('*')->addAttributeToFilter([['attribute'=>'price', 'eq'=> 1000]])->load();*/
        return $this->_collection->addAttributeToSelect('*')->addAttributeToFilter('sku',array('fgdfggg','24-WG085'))->load();
    }
}
