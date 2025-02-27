<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AiArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Article\Http\Requests\AiArticleStoreRequest;
use Modules\Article\Models\TextServiceArticle;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('so');
        $articles = TextServiceArticle::all();
        return view('article::tgs.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AiArticleStoreRequest $request)
    {

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('article::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('article::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function deleteArticles(){

    }

    public function accept($id)
    {

    }
}
