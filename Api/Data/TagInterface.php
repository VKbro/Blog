<?php

declare(strict_types=1);

namespace Vijay\Blog\Api\Data;

interface TagInterface
{
    public const string TAG_ID = 'tag_id';

    public const string TAG_NAME = 'tag_name';

    public function getTagId() : int;
    public function setTagId(int $tagId) : self;

    public function getTagName() : string;
    public function setTagName(string $tagName) : self;
}
