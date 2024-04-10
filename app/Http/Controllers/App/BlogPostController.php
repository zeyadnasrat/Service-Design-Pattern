<?php

namespace App\Http\Controllers\App;

use App\DataTransferObjects\BlogPostDto;
use App\Enums\BlogPostSource;
use App\Http\Requests\App\BlogPostRequest;
use App\Http\Resources\Api\BlogPostResource;
use App\Models\BlogPost;
use App\Services\Blog\BlogPostService;
use Illuminate\Http\Request;

class BlogPostController
{
    public function __construct(
        protected BlogPostService $service,
    )
    {

    }

    public function store(BlogPostRequest $request):BlogPostResource
    {
        $post = $this->service->store(
            BlogPostDto::fromAppRequest($request),
        );

        return BlogPostResource::make(
            $post,
        );

    }

    public function update(BlogPostRequest $request, BlogPost $blogPost):BlogPostResource
    {
        $post = $this->service->update(
            $blogPost,
            BlogPostDto::fromAppRequest($request),
        );

        return BlogPostResource::make(
            $post,
        );

    }
}
