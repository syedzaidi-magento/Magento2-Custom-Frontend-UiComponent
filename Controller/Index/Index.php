<?php


namespace Syedzaidi\FrontUi\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var Context
     */
    private $context;
    private $pageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->context = $context;
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        return $this->pageFactory->create();
    }
}