<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'parent_id'];

    public function getPageName()
    {
        return;
    }

    public function getParentMenuName()
    {
        $menu = Menu::find($this->parent_id);

        if($menu)
        {
            return $menu->name;
        }
        else
        {
            return '';
        }
    }

    public function isCurrentMenu()
    {
        if($_SERVER['REQUEST_URI'] == $this->slug || $_SERVER['REQUEST_URI'] == '/' . $this->slug)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function getMainMenu()
    {
        return Menu::where('parent_id', '<' , 1)->get();
    }

    public function hasChildren()
    {
        $checkMenus = $this->getChildMenu();

        if (count($checkMenus) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getChildMenu()
    {
        return Menu::where('id', '!=', $this->id)->where('parent_id', '=', $this->id)->get();
    }

    public static function getInverseClass()
    {
        if($_SERVER['REQUEST_URI'] == '/mobile')
        {
            return ' nav-menu--inverse';
        }
        else
        {
            return '';
        }
    }
}
