<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Vijay\Blog\Registry\GlobalSchema;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class BlogCollection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(
            BlogModel::class,
            BlogResourceModel::class
        );
    }

    protected function _initSelect()
    {
        $authorTable = GlobalSchema::AUTHOR_TABLE;
        $this->getSelect()
            ->from($this->getMainTable())
            ->joinLeft(
                $authorTable,
                $this->getMainTable() . ".author_id = $authorTable.author_id"
            );
        return $this;
    }
}
