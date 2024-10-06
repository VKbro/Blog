<?php

declare(strict_types=1);

namespace Vijay\Blog\Repository;

use Exception;
use Magento\Framework\DataObject;
use Magento\Framework\DB\TransactionFactory;
use Psr\Log\LoggerInterface;
use Vijay\Blog\Api\BlogRepositoryInterface;
use Vijay\Blog\Api\Data\BlogInterface;
use Vijay\Blog\Model\Blog\BlogCollectionFactory;
use Vijay\Blog\Registry\GlobalSchema;

readonly class BlogRepository implements BlogRepositoryInterface
{
    public function __construct(
        private BlogCollectionFactory $blogCollectionFactory,
        private LoggerInterface $logger,
        private TransactionFactory $transactionFactory
    )
    {
    }

    public function getById(int $id): ?DataObject
    {
        return $this->blogCollectionFactory->create()->getItemById($id);
    }

    /**
     * @inheritDoc
     */
    public function getAllByAuthorId(int $author): array
    {
        $blogCollection = $this->blogCollectionFactory->create();
        return $blogCollection->addFieldToFilter($blogCollection->getMainTable() . '.author_id', ['eq' => $author])->getItems();
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return $this->blogCollectionFactory->create()->getItems();
    }

    /**
     * @inheritDoc
     */
    public function getAllBy(array $criteria = []): array
    {
        $blogCollection = $this->blogCollectionFactory->create();
        foreach ($criteria as $field => $value) {
            $blogCollection->addFieldToSelect([$field => $value]);
        }
        return $blogCollection->getItems();
    }

    public function save(BlogInterface $blog): bool
    {
        $transaction = $this->transactionFactory->create();
        try {
            $transaction->addObject($blog)->save();
        } catch (Exception $e) {
            $this->logger->critical($e->getMessage());
            return false;
        }
        return true;
    }

    public function deleteById(int $id): bool
    {
        $transaction = $this->transactionFactory->create();

        /** @var BlogInterface $blog */
        $blog = $this->getById($id);

        if (!$blog) {
            return false;
        }

        try {
            $transaction->addObject($blog)->delete();
        } catch (Exception $e) {
            $this->logger->critical($e->getMessage());
            return false;
        }
        return true;
    }
}
