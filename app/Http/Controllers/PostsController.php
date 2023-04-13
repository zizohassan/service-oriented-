<?php

namespace App\Http\Controllers;

use App\Dto\PostDto;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\Contracts\PostContract;
use App\Services\Facades\PostFacade;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(PostRequest $request)
    {
        return response()->json(PostFacade::createPost(PostDto::create($request)));
    }
}
/////////////////////////////////
/// service-oriented architecture
/// facade Design pattern
/// Dto (Data Transfer Objects)
/// Repository Pattern



