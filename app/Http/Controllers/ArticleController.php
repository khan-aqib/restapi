<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return Article::all();
    }
 
    public function show($id)
    {
        return Article::find($id)->toJson();
    }

    public function store(Request $request)
    {
        return Article::create($request->all())->toJson();
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article->toJson();
    }

    public function destroy(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}
