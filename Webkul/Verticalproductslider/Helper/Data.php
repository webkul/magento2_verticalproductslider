<?php
namespace Webkul\Verticalproductslider\Helper;

/**
 * Webkul Verticalproductslider Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

	/**
    * @param Magento\Framework\App\Helper\Context $context
    * @param Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    */
    public function __construct(
    	\Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * Return store config data for vertical product slider
     *
     * @return array
     */
    public function storeConfigData(){
        $data = array();
        $data['bg'] = $this->_scopeConfig->getValue('webkul/webkul_verticalslider/wk_verticalslider_bg', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $data['noitems'] = $this->_scopeConfig->getValue('webkul/webkul_verticalslider/wk_verticalslider_category', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $data['animate'] = $this->_scopeConfig->getValue('webkul/webkul_verticalslider/wk_verticalslider_animation_time', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $data['width'] = $this->_scopeConfig->getValue('webkul/webkul_verticalslider/wk_verticalslider_width', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $data['height'] = $this->_scopeConfig->getValue('webkul/webkul_verticalslider/wk_verticalslider_height', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $data;
    }
}