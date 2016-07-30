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

class PageController extends Controller
{
    public function getIndex()
    {
        //dd($_SERVER['REQUEST_URI']);

        $reviews = Review::get();

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
                'menus'     => Menu::getMainMenu()
            ]);
    }

    public function getMobile()
    {
        /*$menu = Menu::find(13);

        foreach($menu->getChildMenu() as $child)
        {
            echo $child->slug . ' ' . $child->name . '<br >' ;
        }

        return;
        dd($menu);*/

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
        //dd($_SERVER['REQUEST_URI']);

        return view('showcase.pages.clients', [
            'modals'    => Modal::get(),
            'menus'     => Menu::getMainMenu()
        ]);
    }
}
