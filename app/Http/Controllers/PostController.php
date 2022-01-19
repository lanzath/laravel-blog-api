<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = new PostResource(Post::simplePaginate(10));
        return response()->json($posts, Response::HTTP_OK);
    }
}
