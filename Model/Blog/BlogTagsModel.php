<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Magento\Framework\Model\AbstractModel;

class BlogTagsModel extends AbstractModel
{
    protected function _construct(): void
    {
        $this->_init(BlogTagsResourceModel::class);
    }
}
