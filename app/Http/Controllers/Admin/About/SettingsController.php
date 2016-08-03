<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Validator;
use App\File;

class SettingsController extends Controller
{
    public function getIndex()
    {
        $settings = Setting::where('page', '=', 'about')->first();

        //dd($settings);

        //dd($settings);

        return view('admin.settings.about')->withSettings($settings);
    }

    public function update(Request $request, File $file)
    {
        $data = $request->all();

        //dd($data);

        if(!isset($data['image']))
        {
            if(isset($data['uploaded_image']))
            {
                $data['image'] = $data['uploaded_image'];
            }
            else
            {
                $data['image'] = '';
            }
        }
        else
        {
            $data['image'] = $file->uploadFile($request->file('image'));
        }

        $validator = Validator::make(
            $request->all(),
            [
                'about' => 'sometimes',
                'image'      => 'sometimes',
                'value_1'   => 'sometimes'
            ]
        );

        $settings = Setting::where('page', '=', 'about')->first();

        $settings->update($data);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        return redirect()->route('admin.about')->withMsg('saved successful');
    }
}
