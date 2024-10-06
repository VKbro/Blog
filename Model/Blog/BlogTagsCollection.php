<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vijay\Blog\Registry\GlobalSchema;

class BlogTagsCollection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(
            BlogTagsModel::class,
            BlogTagsResourceModel::class
        );
    }

    protected function _initSelect()
    {
        $tagTable = GlobalSchema::TAG_TABLE;
        $blogTable = GlobalSchema::BLOG_TABLE;
        $this->getSelect()
            ->from(['main_table' => $this->getMainTable()])
            ->join($tagTable, "main_table.tag_id = $tagTable.tag_id")
            ->join($blogTable, "main_table.blog_id = $blogTable.blog_id");
        return $this;
    }
}
