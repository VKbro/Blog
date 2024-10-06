<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Author;

use Vijay\Blog\Registry\GlobalSchema;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AuthorResourceModel extends AbstractDb
{
    protected function _construct(): void
    {
        $this->_init(
            GlobalSchema::AUTHOR_TABLE,
            GlobalSchema::AUTHOR_TABLE_PRIMARY_KEY
        );
    }
}
