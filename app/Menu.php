<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    public function getPageName()
    {
        return;
    }

    public function getParentMenuName()
    {
        return;
    }
}