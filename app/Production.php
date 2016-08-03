<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $fillable = ['title',  'image', 'modal_id'];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }

    public function Modal()
    {
        return $this->BelongsTo(Modal::class);
    }
}
