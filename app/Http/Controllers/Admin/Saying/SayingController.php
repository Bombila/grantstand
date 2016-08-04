<?php

namespace App\Http\Controllers\Admin\Saying;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\File;
use App\Saying;
use Illuminate\Support\Facades\Validator;

class SayingController extends Controller
{
    public function getIndex()
    {
        $sayingList = Saying::get();

        //dd($sayingList);

        return view('admin.saying.list')->withSayings($sayingList);
    }

    public function getEdit(Saying $saying)
    {
        return view('admin.saying.edit', [
            'saying' => $saying
        ]);
    }

    public function update(Saying $saying, Request $request, File $file)
    {
        $data = $request->all();

        if(!isset($data['image']))
        {
            $data['image'] = $data['uploaded_image'];
        }
        else
        {
            $data['image'] = $file->uploadFile($request->file('image'));
        }

        $validator = Validator::make(
            $data,
            [
                'title' => 'required',
                'image' => 'sometimes'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $saying->update($data);

        return redirect()->route('admin.saying.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.saying.create');
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'image' => 'sometimes'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        if(isset($data['image']))
        {
            $data['image'] = $file->uploadFile($request->file('image'));
        }

        $saying = Saying::create($data);

        $saying->save();

        return redirect()->route('admin.saying.index')->withMsg('saved successful');
    }

    public function destroy(Saying $saying)
    {
        $saying->delete();

        return redirect()->route('admin.saying.index')->withMsg('deleted successful');
    }
}
