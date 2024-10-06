<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Magento\Framework\Model\AbstractModel;

class BlogModel extends AbstractModel
{
    protected function _construct(): void
    {
        $this->_init(BlogResourceModel::class);
    }
}
