<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Config;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class BlogConfig
{
    const string XML_PATH_IS_ENABLED = 'blog/blog_settings/enable_blog_module';
    const string XML_PATH_CONTENTS_PER_PAGE = 'blog/blog_settings/contents_per_page';

    public function __construct(
        private readonly ScopeConfigInterface   $scopeConfig
    ) {}

    public function getIsEnabled(mixed $storeID = null): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_IS_ENABLED, ScopeInterface::SCOPE_STORE, $storeID
        );
    }

    public function getContentsPerPage(mixed $storeID = null): int
    {
        return (int) $this->scopeConfig->getValue(
            self::XML_PATH_CONTENTS_PER_PAGE, ScopeInterface::SCOPE_STORE, $storeID
        );
    }
}
