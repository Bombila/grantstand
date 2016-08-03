<?php

namespace App\Http\Controllers\Showcase;

use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Article;
use App\Modal;
use App\Button;
use App\Setting;
use App\Menu;
use App\Help;
use App\Business;
use App\Client;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('showcase.pages.index', [
            'reviews'   => Review::get(),
            'brands'    => Brand::get(),
            'articles'  => Article::get(),
            'modals'    => Modal::get(),
            'buttons'   => Button::get(),
            'settings'  => Setting::where('page', '=', 'home')->first(),
            'menus'     => Menu::getMainMenu()
        ]);
    }

    public function getServices()
    {
        return view('showcase.pages.services',
            [
                'menus'     => Menu::getMainMenu(),
                'helps'     => Help::getHelpsWithTags(),
                'settings'  => Setting::where('page', '=', 'services')->first(),
                'businesses' => Business::get()
            ]);
    }

    public function getMobile()
    {
        return view('showcase.pages.mobile',
            [
                'menus'     => Menu::getMainMenu()
            ]);
    }

    public function getAbout()
    {
        return view('showcase.pages.about', [
            'modals'    => Modal::get(),
            'menus'     => Menu::getMainMenu()
        ]);
    }

    public function getClients()
    {
        return view('showcase.pages.clients', [
            'modals'    => Modal::get(),
            'menus'     => Menu::getMainMenu(),
            'clients'   => Client::get()
        ]);
    }
}
