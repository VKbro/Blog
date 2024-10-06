<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Author;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class AuthorCollection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(
            AuthorModel::class,
            AuthorResourceModel::class
        );
    }
}
