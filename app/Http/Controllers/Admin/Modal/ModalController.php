<?php

namespace App\Http\Controllers\Admin\Modal;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modal;
use App\File;
use Illuminate\Support\Facades\Validator;

class ModalController extends Controller
{
    public function getIndex()
    {
        $modalList = Modal::get();

        //dd($modalList);

        return view('admin.modal.list')->withModals($modalList);
    }

    public function getEdit(Modal $modal)
    {
        return view('admin.modal.edit')->withModal($modal);
    }

    public function update(Modal $modal, Request $request, File $file)
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
                'text' => 'required',
                'type' => 'required',
                'iframe' => 'sometimes',
                'image' => 'sometimes',
                'social_icons' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $modal->update($data);

        return redirect()->route('admin.modal.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.modal.create');
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'text' => 'required',
                'type' => 'required',
                'iframe' => 'sometimes',
                'image' => 'sometimes',
                'social_icons' => 'required'
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

        $modal = Modal::create($data);

        $modal->save();

        return redirect()->route('admin.modal.index')->withMsg('saved successful');
    }

    public function destroy(Modal $modal)
    {
        $modal->delete();

        return redirect()->route('admin.modal.index')->withMsg('deleted successful');
    }
}
