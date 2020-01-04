<?php


namespace Syedzaidi\FrontUi\Block;


use Magento\Framework\View\Element\Template;

class Frontui extends Template
{
    /**
     * @var Template\Context
     */
    private $context;
    /**
     * @var array
     */
    private $data;

    public function __construct(
        Template\Context $context,
        array $data = []
    ){
        parent::__construct($context, $data);
        $this->context = $context;
        $this->data = $data;
    }

    public function getText()
    {
        return "Text From Block..";
    }
}