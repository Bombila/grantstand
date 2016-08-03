<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['welcome',
        'value_1',
        'value_2',
        'value_3',
        'value_4',
        'column_1',
        'column_2',
        'column_3',
        'column_4',
        'representation',
        'marketing',
        'box_1',
        'box_2',
        'box_3',
        'box_4',
        'box_5',
        'box_6',
        'box_7',
        'business',
        'about',
        'image'
    ];

    public function getUploadedBrandLogo()
    {
        return $this->value_1;
    }

    public function getLogoSettings()
    {
        return Setting::where('name', '=', 'logo')->first();
    }
}
