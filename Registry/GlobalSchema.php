<?php

declare(strict_types=1);

namespace Vijay\Blog\Registry;

enum GlobalSchema: string
{
    /** Tables & Keys --> */
    public const string TAG_TABLE = 'vk_tags';
    public const string BLOG_TABLE = 'vk_blogs';
    public const string AUTHOR_TABLE = 'vk_authors';
    public const string BLOG_TAGS_TABLE = 'vk_blog_tags';
    public const string TAG_TABLE_PRIMARY_KEY = 'tag_id';
    public const string BLOG_TABLE_PRIMARY_KEY = 'blog_id';
    public const string AUTHOR_TABLE_PRIMARY_KEY = 'author_id';
    public const string BLOG_TAGS_TABLE_PRIMARY_KEY = 'blog_tags_id';
    /** <-- Tables & Keys */

    /** Fields -> */
    public const string BLOG_ID = 'blog_id';
    public const string BLOG_TITLE = 'blog_title';
    public const string BLOG_CREATED_AT = 'blog_created_at';
    public const string BLOG_UPDATED_AT = 'blog_updated_at';
    public const string BLOG_DESCRIPTION = 'blog_description';
    public const string BLOG_AUTHOR_NAME = 'blog_author_name';
    public const string BLOG_AUTHOR_EMAIL = 'blog_author_email';
    public const string BLOG_DESCRIPTION_SHORT = 'blog_description_short';
    /** <- Fields */
}
