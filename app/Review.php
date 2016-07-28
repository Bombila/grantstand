<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['client_name', 'client_position', 'client_text', 'client_photo'];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->client_photo .'">';
    }
}
