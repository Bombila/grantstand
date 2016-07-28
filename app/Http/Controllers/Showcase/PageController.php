<?php

namespace App\Http\Controllers\Showcase;

use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Article;

class PageController extends Controller
{
    public function getIndex()
    {
        $reviews = Review::get();

        return view('showcase.pages.index', [
            'reviews'   => Review::get(),
            'brands'    => Brand::get(),
            'articles'  => Article::get()
        ]);
    }

    public function getServices()
    {
        return view('showcase.pages.services');
    }

    public function getMobile()
    {
        return view('showcase.pages.mobile');
    }

    public function getAbout()
    {
        return view('showcase.pages.about');
    }

    public function getClients()
    {
        return view('showcase.pages.clients');
    }
}
