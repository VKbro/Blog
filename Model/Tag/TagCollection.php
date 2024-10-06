<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Tag;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class TagCollection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(
            TagModel::class,
            TagResourceModel::class
        );
    }
}
