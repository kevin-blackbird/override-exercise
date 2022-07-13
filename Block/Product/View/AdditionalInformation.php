<?php
declare(strict_types=1);

namespace Blackbird\OverrideExercise\Block\Product\View;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class AdditionalInformation
 * @package Blackbird\OverrideExercice\Block\Product
 **/
class AdditionalInformation extends Template
{
    /**
     * @var string
     */
    protected string $additionalInformation;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param string $additionalInformation
     * @param array $data
     */
    public function __construct(
        Context $context,
        string $additionalInformation = 'Hello World',
        array $data = []
    ) {
        $this->additionalInformation = $additionalInformation;
        parent::__construct($context, $data);
    }

    /**
     * Get additional information
     *
     * @return string
     */
    public function getAdditionalInformation(): string
    {
        return $this->additionalInformation;
    }
}
