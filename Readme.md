# Magento2 Vertical Product Slider

Magento2 Vertical Product Slider - allow to display products in vertical Slider with magento2 system configuration and block code https://store.webkul.com/

How to Install the module 
--------------------------
copy Webkul folder in app/code

Run Following Command via terminal
-----------------------------------
php bin/magento setup:upgrade

now module is properly installed

How to call the Block code 
--------------------------

After setting configuration settings , just add the following block calling code in the content area of CMS page- 

Add the following code in CMS page content - 

{{block class="Webkul\Verticalproductslider\Block\Slidedown" template="slidedown.phtml"}}