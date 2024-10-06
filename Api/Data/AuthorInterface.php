<?php

declare(strict_types=1);

namespace Vijay\Blog\Api\Data;

interface AuthorInterface
{
    public const string AUTHOR_ID = 'author_id';

    public const string AUTHOR_NAME = 'author_name';

    public const string AUTHOR_EMAIL = 'author_email';

    public function getAuthorId() : int;
    public function setAuthorId(int $id) : self;

    public function getAuthorName() : string;
    public function setAuthorName(string $name) : self;

    public function getAuthorEmail() : string;
    public function setAuthorEmail(string $email) : self;
}
