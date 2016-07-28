<?php

namespace App\Http\Controllers\Admin\Material;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\File;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function getIndex()
    {
        $articleList = Article::get();

        //dd($articleList);

        return view('admin.article.list')->withArticles($articleList);
    }

    public function getEdit(Article $article)
    {
        return view('admin.article.edit')->withArticle($article);
    }

    public function update(Article $article, Request $request, File $file)
    {
        $data = $request->all();

        if(!isset($data['image']))
        {
            $data['image'] = $data['uploaded_image'];
        }
        else
        {
            $data['image'] = $file->uploadFile($request->file('image'));
        }

        $validator = Validator::make(
            $data,
            [
                'name' => 'required',
                'text' => 'required',
                'image' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $article->update($data);

        return redirect()->route('admin.article.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.article.create');
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'text' => 'required',
                'image' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        $data['image'] = $file->uploadFile($request->file('image'));

        $article = Article::create($data);

        $article->save();

        return redirect()->route('admin.article.index')->withMsg('saved successful');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.article.index')->withMsg('deleted successful');
    }
}
