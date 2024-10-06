<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Blog;

use Vijay\Blog\Api\Data\BlogInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class BlogModel extends AbstractModel implements BlogInterface, IdentityInterface
{
    public const string CACHE_TAG = 'vijay_blog';

    protected function _construct(): void
    {
        $this->_init(BlogResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getBlogId(): int
    {
        return $this->getData(self::BLOG_ID);
    }

    public function setBlogId(int $blogId): BlogInterface
    {
        $this->setData(self::BLOG_ID, $blogId);
        return $this;
    }

    public function getAuthorId(): int
    {
        return $this->getData(self::AUTHOR_ID);
    }

    public function setAuthorId(int $authorId): BlogInterface
    {
        $this->setData(self::AUTHOR_ID, $authorId);
        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    public function getUpdatedAt(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function getBlogTitle(): string
    {
        return $this->getData(self::BLOG_TITLE);
    }

    public function setBlogTitle(string $blogTitle): BlogInterface
    {
        $this->setData(self::BLOG_TITLE, $blogTitle);
        return $this;
    }

    public function getBlogContent(): string
    {
        return $this->getData(self::BLOG_CONTENT);
    }

    public function setBlogContent(string $blogContent): BlogInterface
    {
        $this->setData(self::BLOG_CONTENT, $blogContent);
        return $this;
    }

    public function getBlogContentShort(): string
    {
        return $this->getData(self::BLOG_CONTENT_SHORT);
    }

    public function setBlogContentShort(string $blogContentShort): BlogInterface
    {
        $this->setData(self::BLOG_CONTENT_SHORT, $blogContentShort);
        return $this;
    }
}
