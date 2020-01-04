<?php
namespace DoIRun\A2019\Block;

class ConfigData extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    protected $filterProvider;

    /**
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param \Magento\Cms\Model\Template\FilterProvider $filterProvider
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        array $data = []
    ) {
        $this->httpContext = $httpContext;
        parent::__construct($context, $data);
    }

    public function getConfig($config_path)
    {
        return $this->_scopeConfig->getValue(
            $config_path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
    }
}
