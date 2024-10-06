<?php

declare(strict_types=1);

namespace Vijay\Blog\Api\Data;

interface BlogInterface
{
    public const string BLOG_ID = 'blog_id';

    public const string AUTHOR_ID = 'author_id';

    public const string CREATED_AT = 'created_at';

    public const string UPDATED_AT = 'updated_at';

    public const string BLOG_TITLE = 'blog_title';

    public const string BLOG_CONTENT = 'blog_content';

    public const string BLOG_CONTENT_SHORT = 'blog_content_short';

    public function getBlogId() : int;
    public function setBlogId(int $blogId) : self;

    public function getAuthorId() : int;
    public function setAuthorId(int $authorId) : self;

    public function getCreatedAt() : string;

    public function getUpdatedAt() : string;

    public function getBlogTitle() : string;
    public function setBlogTitle(string $blogTitle) : self;

    public function getBlogContent() : string;
    public function setBlogContent(string $blogContent) : self;

    public function getBlogContentShort() : string;
    public function setBlogContentShort(string $blogContentShort) : self;


}
