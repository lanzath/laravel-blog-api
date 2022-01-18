<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        // TO-DO: WORK ON PAGINATION AND API RESOURCE RESPONSE
        $posts = Post::with(['author', 'category'])->get();
        return response(PostResource::collection($posts));
    }
}
