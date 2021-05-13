<?php

namespace CsVikram\Product\Block;

use Magento\Framework\View\Element\Template;

class Category extends Template
{
    protected $_collection;
    public function __construct(
        Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Category\Collection $collection,
        array $data = [])
    {

        $this->_collection = $collection;
        parent::__construct($context, $data);
    }

    public function getCategoryCollection()
    {
        /*return $this->_collection->addAttributeToSelect('*')->addAttributeToFilter('is_active',1)->load();*/
        return $this->_collection->addAttributeToSelect('*')->addAttributeToFilter('home_category',1)->load();

    }
}
