<?php

declare(strict_types=1);

namespace Vijay\Blog\Api;

use Magento\Framework\DataObject;
use Vijay\Blog\Api\Data\BlogInterface;

interface BlogRepositoryInterface
{
    public function getById(int $id): ?DataObject;

    /**
     * @param int $author
     * @return array<BlogInterface>
     */
    public function getAllByAuthorId(int $author): array;

    /**
     * @return array<BlogInterface>
     */
    public function getAll(): array;

    /**
     * @param array $criteria
     * @return array<BlogInterface>
     */
    public function getAllBy(array $criteria = []): array;

    public function save(BlogInterface $blog): bool;

    public function deleteById(int $id): bool;
}
