<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Tag;

use Vijay\Blog\Registry\GlobalSchema;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TagResourceModel extends AbstractDb
{
    protected function _construct(): void
    {
        $this->_init(
            GlobalSchema::TAG_TABLE,
            GlobalSchema::TAG_TABLE_PRIMARY_KEY
        );
    }
}
