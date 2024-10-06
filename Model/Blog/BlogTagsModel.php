<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Magento\Framework\Model\AbstractModel;
use Vijay\Blog\Api\Data\BlogTagsInterface;
use Magento\Framework\DataObject\IdentityInterface;

class BlogTagsModel extends AbstractModel implements BlogTagsInterface, IdentityInterface
{
    public const string CACHE_TAG = "blog_tags";

    protected function _construct(): void
    {
        $this->_init(BlogTagsResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getBlogTagId(): int
    {
        return $this->getData(self::BLOG_TAG_ID);
    }

    public function setBlogTagId(int $blogTagId): BlogTagsInterface
    {
        $this->setData(self::BLOG_TAG_ID, $blogTagId);
        return $this;
    }

    public function getBlogId(): int
    {
        return $this->getData(self::BLOG_ID);
    }

    public function setBlogId(int $blogId): BlogTagsInterface
    {
        $this->setData(self::BLOG_ID, $blogId);
        return $this;
    }

    public function getTagId(): int
    {
        return $this->getData(self::TAG_ID);
    }

    public function setTagId(int $tagId): BlogTagsInterface
    {
        $this->setData(self::TAG_ID, $tagId);
        return $this;
    }
}
