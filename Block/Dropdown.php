<?php

namespace GaussDev\Dropdown\Block;
use Magento\Framework\View\Element\Template;


class Dropdown extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    public function __construct(Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, array $data)
    {
        parent::__construct($context, $data);

        $this->httpContext = $httpContext;
    }

    public function customerLoggedIn(){
        return $this->httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
    }
}