<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    protected $fillable = ['text', 'type', 'link', 'modal_id'];

    public function Modal()
    {
        return $this->belongsTo(Modal::class);
    }

}
