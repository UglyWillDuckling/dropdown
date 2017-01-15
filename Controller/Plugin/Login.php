<?php

namespace GaussDev\Dropdown\Controller\Plugin;


class Login
{

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Customer\Model\Session $customerSession)
    {
        $this->session = $customerSession;
        $this->storeManager = $storeManager;
    }

    public function afterExecute($subject, $result){

        if(!$this->session->getCustomerId())
        {
            $result->setUrl($this->storeManager->getStore()->getBaseUrl());
        }


        return $result;
    }
}