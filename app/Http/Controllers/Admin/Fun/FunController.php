<?php

namespace App\Http\Controllers\Admin\Fun;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\File;
use App\Fun;
use Illuminate\Support\Facades\Validator;

class FunController extends Controller
{
    public function getIndex()
    {
        $funList = Fun::get();

        //dd($funList);

        return view('admin.fun.list')->withFuns($funList);
    }

    public function getEdit(Fun $fun)
    {
        return view('admin.fun.edit', [
            'fun' => $fun,
        ]);
    }

    public function update(Fun $fun, Request $request, File $file)
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

        $fun->update($data);

        return redirect()->route('admin.fun.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.fun.create');
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

        $fun = Fun::create($data);

        $fun->save();

        return redirect()->route('admin.fun.index')->withMsg('saved successful');
    }

    public function destroy(Fun $fun)
    {
        $fun->delete();

        return redirect()->route('admin.fun.index')->withMsg('deleted successful');
    }
}
