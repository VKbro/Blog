<?php

declare(strict_types=1);

namespace Vijay\Blog\Api\Data;

interface BlogTagsInterface
{
    public const string BLOG_TAG_ID = 'blog_tag_id';

    public const string BLOG_ID = 'blog_id';

    public const string TAG_ID = 'tag_id';

    public function getBlogTagId() : int;
    public function setBlogTagId(int $blogTagId) : self;

    public function getBlogId() : int;
    public function setBlogId(int $blogId) : self;

    public function getTagId() : int;
    public function setTagId(int $tagId) : self;
}
