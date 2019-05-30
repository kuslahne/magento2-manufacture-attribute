<?php
namespace Kus\Manufacture\Setup;
 
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Catalog\Model\Product;
 
class UpgradeData implements UpgradeDataInterface
{
    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;
 

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
 

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create();
 
 
        $manufactureOptions = 'Kus\Manufacture\Model\Attribute\Source\ManufactureOptions';
        $eavSetup->addAttribute(
            Product::ENTITY,
            'product_manufacture',
            [
		'group' => 'General',  
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Manufacturer',
                'input' => 'select',
                'class' => '',
                'source' => $manufactureOptions,
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
		'visible' => true,
		'sort_order' => 200,
                'position' => 300,
                'required' => true,
                'user_defined' => false,
                'default' => '',
                'searchable' => true,
                'filterable' => false,
                'comparable' => false,
                'is_used_in_grid' => true,
                'visible_on_front' => false,
                'used_in_product_listing' => true,
		'unique' => false,
		'apply_to' => ''
            ]
    );
    
 
    }
}
