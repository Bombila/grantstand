<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['image', 'name', 'text', ];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }
}
