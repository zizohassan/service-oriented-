<?php

namespace App\Services\Contracts;

use App\Dto\PostDto;
use App\Models\Post;
use Illuminate\Http\Request;

interface PostContract
{
    public function createPost(PostDto $postDto): Post;
}
