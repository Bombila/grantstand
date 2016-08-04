<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fun extends Model
{
    protected $fillable = ['title',  'image'];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }
}
