<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Tag;

use Vijay\Blog\Api\Data\TagInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class TagModel extends AbstractModel implements TagInterface, IdentityInterface
{
    public const string CACHE_TAG = 'vijay_blog_tag';

    protected function _construct(): void
    {
        $this->_init(TagResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getTagId(): int
    {
        return $this->getData(self::TAG_ID);
    }

    public function setTagId(int $tagId): TagInterface
    {
        $this->setData(self::TAG_ID, $tagId);
        return $this;
    }

    public function getTagName(): string
    {
        return $this->getData(self::TAG_NAME);
    }

    public function setTagName(string $tagName): TagInterface
    {
        $this->setData(self::TAG_NAME, $tagName);
        return $this;
    }
}
