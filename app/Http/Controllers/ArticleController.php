<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $fields = $request->validate([
            'title'=> 'required',
            'link'=> 'required',
             'keywords'=> 'required',
            'creator'=> 'required',
            'video_url'=> 'required',
            'description'=> 'required',
            'publisheddate'=> 'required',
            'fulldescription'=> 'required',
            'source_id'=> 'required'
        ]);
        
         $fields['keywords'] = json_encode($request['keywords']);
         
         $article = Article::create($fields);
        
         return 'OK';
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
