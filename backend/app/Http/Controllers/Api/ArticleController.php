<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // GET /api/articles
    public function index()
    {
        return Article::latest()->get();
    }

    // POST /api/articles
    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'source' => $request->source,
            'published_at' => $request->published_at,
        ]);

        return response()->json($article, 201);
    }
}