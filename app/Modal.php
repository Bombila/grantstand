<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Modal extends Model
{
    protected $fillable = ['title', 'text', 'type', 'iframe', 'image', 'social_icons'];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }




}
