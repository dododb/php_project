<?php
/**
 * Created by PhpStorm.
 * User: FLAVIEN
 * Date: 19/04/2017
 * Time: 11:29
 */

namespace App\Http\Controllers;

Use App\Article;
Use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function getForm()
    {
        return view('article');
    }

    public function postForm(ArticleRequest $request)
    {
        $article = new Article;
        $article->article = $request->input('article');
        $article->save();

        return view('article_ok');
    }

}