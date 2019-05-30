<?php

namespace Kus\Manufacture\Plugin;

class ProductWithAttributeManufacture
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $title = $subject->getAttributeText('product_manufacture');
        return $title." ".$result;
    }
}
