<?php

namespace GaussDev\Dropdown\Block\Dropdown;


class LoggedOut extends \Magento\Customer\Block\Form\Login implements \Magento\Widget\Block\BlockInterface
{
    const ROUTE_ACCOUNT_LOGIN = 'dropdown/account/login';

    /** @var CustomerRepositoryInterface */
    protected $customerRepository;

    /** @var \Magento\Customer\Helper\View */
    protected $_viewHelper;

    protected $_urlBuilder;


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Model\Url $customerUrl,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $data = []
    ){
        parent::__construct($context, $customerSession, $customerUrl, $data);
        $this->_urlBuilder = $urlBuilder;
    }

    /**
     * Retrieve form posting url
     *
     * @return string
     */
    public function getPostActionUrl()
    {
        return $this->_urlBuilder->getUrl(self::ROUTE_ACCOUNT_LOGIN);
    }
}