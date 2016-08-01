<?php

namespace App\Http\Controllers\Admin\Service;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function getIndex()
    {
        $settings = Setting::where('page', '=', 'services')->first();

        //dd($settings);

        return view('admin.settings.service')->withSettings($settings);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'representation' => 'sometimes',
                'column_1'      => 'sometimes',
                'column_2'      => 'sometimes',
                'column_3'      => 'sometimes',
                'column_4'      => 'sometimes',
                'value_1'       => 'sometimes',
                'value_2'       => 'sometimes',
                'value_3'       => 'sometimes',
                'value_4'       => 'sometimes',
            ]
        );

        $settings = Setting::where('page', '=', 'services')->first();

        $settings->update($request->all());

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        return redirect()->route('admin.service')->withMsg('saved successful');
    }
}
