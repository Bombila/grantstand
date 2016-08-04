<?php

namespace App\Http\Controllers\Admin\Mobile;

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
        $settings = Setting::where('page', '=', 'mobile')->first();

        //dd($settings);

        return view('admin.settings.mobile')->withSettings($settings);
    }

    public function update(Request $request, File $file)
    {
        $data = $request->all();

        //dd($data);

        if(!isset($data['image_1']))
        {
            // when update
            if(isset($data['uploaded_image_1']))
            {
                $data['image_1'] = $data['uploaded_image_1'];
            }
            // when create without image
            else
            {
                $data['image_1'] = '';
            }
        }
        else
        {
            // when create
            $data['image_1'] = $file->uploadFile($request->file('image_1'));
        }

        //dd($data);

        if(!isset($data['image_2']))
        {
            if(isset($data['uploaded_image_2']))
            {
                $data['image_2'] = $data['uploaded_image_2'];
            }
            else
            {
                $data['image_2'] = '';
            }
        }
        else
        {
            $data['image_2'] = $file->uploadFile($request->file('image_2'));
        }

        $validator = Validator::make(
            $request->all(),
            [
                'title_1'       => 'sometimes',
                'title_2'       => 'sometimes',
                'image_1'       => 'sometimes',
                'image_2'       => 'sometimes',
                'text_1'        => 'sometimes',
                'text_2'        => 'sometimes',
            ]
        );

        $settings = Setting::where('page', '=', 'mobile')->first();

        $settings->update($data);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        return redirect()->route('admin.mobile')->withMsg('saved successful');
    }
}
