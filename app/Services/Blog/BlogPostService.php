<?php

namespace App\Services\Blog;

use App\DataTransferObjects\BlogPostDto;
use App\Enums\BlogPostSource;
use App\Models\BlogPost;

class BlogPostService
{
    public function store(BlogPostDto $dto)
    {
       return BlogPost::create([
            'title' => $dto->title,
            'content' => $dto->content,
            'source' => $dto->source,
        ]);
    }

    public function update(BlogPost $blogPost, BlogPostDto $dto)
    {
        return tap($blogPost)->update([
            'title' => $dto->title,
            'content' => $dto->content,
            'source' => $dto->source,
        ]);
    }
}
