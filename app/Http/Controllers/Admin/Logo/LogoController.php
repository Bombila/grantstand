<?php

namespace App\Http\Controllers\Admin\Logo;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;
use App\File;

use Illuminate\Support\Facades\Validator;

class LogoController extends Controller
{
    public function getEdit(Setting $setting)
    {
        $logoSettings = $setting->getLogoSettings();

        return view('admin.logo.edit')->withSettings($logoSettings);
    }

    public function update(Request $request, File $file, Setting $setting)
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
                'image_1'       => 'sometimes',
                'image_2'       => 'sometimes',
            ]
        );

        $logoSettings = $setting->getLogoSettings();

        $logoSettings->update($data);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        return redirect()->route('admin.logo')->withMsg('saved successful');
    }
}
