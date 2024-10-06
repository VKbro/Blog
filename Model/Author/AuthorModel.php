<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Author;


use Vijay\Blog\Api\Data\AuthorInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class AuthorModel extends AbstractModel implements AuthorInterface, IdentityInterface
{
    public const string CACHE_TAG = 'vijay_blog_author';

    protected function _construct(): void
    {
        $this->_init(AuthorResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }


    public function getAuthorId(): int
    {
        return $this->getData(self::AUTHOR_ID);
    }

    public function setAuthorId(int $id): AuthorInterface
    {
        $this->setData(self::AUTHOR_ID, $id);
        return $this;
    }

    public function getAuthorName(): string
    {
        return $this->getData(self::AUTHOR_NAME);
    }

    public function setAuthorName(string $name): AuthorInterface
    {
        $this->setData(self::AUTHOR_NAME, $name);
        return $this;
    }

    public function getAuthorEmail(): string
    {
        return $this->getData(self::AUTHOR_EMAIL);
    }

    public function setAuthorEmail(string $email): AuthorInterface
    {
        $this->setData(self::AUTHOR_EMAIL, $email);
        return $this;
    }
}
