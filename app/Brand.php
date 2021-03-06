<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['image'];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }
}
