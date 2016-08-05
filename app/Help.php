<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable = ['name', 'text', 'image', 'modal_id'];

    public function Modal()
    {
        return $this->belongsTo(Modal::class);
    }

    public function getImageTag()
    {
        return '<img  height="50px" id="uploaded_photo" src="'. $this->image .'">';
    }

    public function getHelpToLiTag()
    {
        //return;
        $this->text = str_replace("\r\n", '</span></li><li><span>', $this->text);

        $this->text =  '<ol class="trigger__list"><li><span>' . $this->text . '</ol>';

        return $this;
    }

    public static function getHelpsWithTags()
    {
        $helps = Help::get();

        foreach($helps as $help)
        {
            $help = $help->getHelpToLiTag();
        }

        return $helps;
    }

}
