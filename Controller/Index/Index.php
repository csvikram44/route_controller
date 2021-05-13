<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace CsVikram\Product\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Catalog index page controller.
 */
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
