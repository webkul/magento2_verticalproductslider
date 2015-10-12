<?php
namespace Webkul\Verticalproductslider\Block;

use Magento\Framework\View\Element\Template;

use Magento\Catalog\Model\Product;

use Magento\Catalog\Model\Category;

/**
 * Verticalproduct Slidedown block
 */
class Slidedown extends Template
{
    /**
     * @var \Magento\Catalog\Model\Product
     */
    protected $product;

    /**
     * @var \Magento\Catalog\Model\Category
     */
    protected $category;

    /**
     * @var \Magento\Catalog\Helper\Image
     */
    protected $imageHelper;

    /**
     * @var ReviewRendererInterface
     */
    protected $reviewRenderer;

    /**
    * @param Context $context
    * @param array $data
    * @param Product $product
    * @param Category $category
    */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        Product $product,
        Category $category,
        array $data = []
    ) {
        $this->Product = $product;
        $this->Category = $category;
        $this->reviewRenderer = $context->getReviewRenderer();
        $this->imageHelper = $context->getImageHelper();
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function imageHelperObj(){
        return $this->imageHelper;
    }

    /**
     * Get product reviews summary
     *
     * @param \Magento\Catalog\Model\Product $product
     * @param bool $templateType
     * @param bool $displayIfNoReviews
     * @return string
     */
    public function getReviewsSummaryHtml($product,$templateType,$displayIfNoReviews) {
        return $this->reviewRenderer->getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
    }
}