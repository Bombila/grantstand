<?php

namespace App\Http\Controllers\Admin\Logo;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;

class LogoController extends Controller
{
    public function getEdit(Setting $setting)
    {
        $logoSettings = $setting->getLogoSettings();

        return view('admin.logo.edit')->withSettings($logoSettings);
    }

    public function update()
    {
        //return redirect()->back()->withInput()->withErrors('Brand logos uploaded');
        return redirect()->back()->withMsg('Brand logos uploaded');
    }
}
