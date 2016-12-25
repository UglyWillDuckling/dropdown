<?php

namespace GaussDev\Dropdown\Block\Dropdown;


class LoggedOut extends \Magento\Customer\Block\Form\Login implements \Magento\Widget\Block\BlockInterface
{

    /** @var CustomerRepositoryInterface */
    protected $customerRepository;

    /** @var \Magento\Customer\Helper\View */
    protected $_viewHelper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Model\Url $customerUrl,
        array $data = []
    ){
        parent::__construct($context, $customerSession, $customerUrl, $data);
    }
}