<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'position', 'text', 'image', 'modal_id'];

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }

    public function Modal()
    {
        return $this->BelongsTo(Modal::class);
    }
}
