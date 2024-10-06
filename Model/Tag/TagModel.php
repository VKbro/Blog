<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Tag;

use Magento\Framework\Model\AbstractModel;

class TagModel extends AbstractModel
{
    protected function _construct(): void
    {
        $this->_init(TagResourceModel::class);
    }
}
