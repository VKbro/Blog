<?php

declare(strict_types=1);

namespace Vijay\Blog\Model\Author;

use Magento\Framework\Model\AbstractModel;

class AuthorModel extends AbstractModel
{
    protected function _construct(): void
    {
        $this->_init(AuthorResourceModel::class);
    }
}
