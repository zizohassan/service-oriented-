<?php

namespace App\Services\Services;

use App\Dto\PostDto;
use App\Models\Post;
use App\Repositories\PostRepository;
use App\Services\Contracts\PostContract;
use Illuminate\Http\Request;

class PostService implements PostContract
{
    protected PostRepository $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function createPost(PostDto $postDto): Post
    {
        return $this->postRepository->create($postDto);
    }
}
