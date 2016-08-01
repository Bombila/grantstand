<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function getIndex()
    {
        $settings = Setting::where('page', '=', 'home')->first();

        return view('admin.settings.home')->withSettings($settings);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'welcome' => 'required'
            ]
        );

        $settings = Setting::where('page', '=', 'home')->first();

        $settings->update($request->all());

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        return redirect()->route('admin.home')->withMsg('saved successful');
    }


}
