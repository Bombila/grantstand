<?php

namespace App\Http\Controllers\Admin\Work;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\File;
use App\Work;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    public function getIndex()
    {
        $workList = Work::get();

        //dd($workList);

        return view('admin.work.list')->withWorks($workList);
    }

    public function getEdit(Work $work)
    {
        return view('admin.work.edit', [
            'work' => $work,
        ]);
    }

    public function update(Work $work, Request $request, File $file)
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

        $work->update($data);

        return redirect()->route('admin.work.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.work.create');
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

        $work = Work::create($data);

        $work->save();

        return redirect()->route('admin.work.index')->withMsg('saved successful');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return redirect()->route('admin.work.index')->withMsg('deleted successful');
    }
}
