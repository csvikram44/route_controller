<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace CsVikram\Product\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Catalog index page controller.
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    public function __construct(\Magento\Backend\App\Action\Context $context,PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

//    public function __construct(
//        Context $context,
//        PageFactory $pageFactory)
//    {
//        $this->_pageFactory = $pageFactory;
//        parent::__construct($context);
//    }

    public function execute()
    {
        $resultpage = $this->pageFactory->create();
        $resultpage->getConfig()->getTitle()->prepend(__('Admin Route'));
        return $resultpage;
    }
}
