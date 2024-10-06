<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Vijay\Blog\Registry\GlobalSchema;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class BlogResourceModel extends AbstractDb
{
    protected function _construct(): void
    {
        $this->_init(
            GlobalSchema::BLOG_TABLE,
            GlobalSchema::BLOG_TABLE_PRIMARY_KEY
        );
    }
}
