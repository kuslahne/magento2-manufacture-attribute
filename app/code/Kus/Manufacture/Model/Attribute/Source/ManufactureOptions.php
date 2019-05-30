<?php
namespace Kus\Manufacture\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ManufactureOptions extends AbstractSource
{
    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (null === $this->_options) {
            $this->_options=[
                                ['label' => __('Manufacturer 1'), 'value' => 0],
                                ['label' => __('Manufacturer 2'), 'value' => 1]
                            ];
        }
        return $this->_options;
    }

    public function getOptionValue($value) 
    { 
        foreach ($this->getAllOptions() as $option) {
            if ($option['value'] == $value) {
                return $option['label'];
            }
        }
        return false;
    }
}
