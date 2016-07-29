<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['welcome'];

    public function getUploadedBrandLogo()
    {
        return $this->value_1;
    }

    public function getLogoSettings()
    {
        return Setting::where('name', '=', 'logo')->first();
    }
}
