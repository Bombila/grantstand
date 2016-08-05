<?php

namespace App\Http\Controllers\Admin\Help;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Help;
use App\File;
use Illuminate\Support\Facades\Validator;
use App\Modal;

class HelpController extends Controller
{
    public function getIndex()
    {
        $helpList = Help::get();

        //dd($helpList);

        return view('admin.help.list')->withHelps($helpList);
    }

    public function getEdit(Help $help)
    {

        $modals = Modal::get();

        return view('admin.help.edit', [
            'modals' => $modals,
            'help'  => $help
        ]);
    }

    public function update(Help $help, Request $request, File $file)
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
                'name' => 'required',
                'text' => 'required',
                'image' => 'sometimes',
                'modal_id' => 'sometimes'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $help->update($data);

        return redirect()->route('admin.help.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        $modals = Modal::get();

        return view('admin.help.create')->withModals($modals);
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'text' => 'required',
                'image' => 'sometimes',
                'modal_id' => 'sometimes'
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

        $help = Help::create($data);

        $help->save();

        return redirect()->route('admin.help.index')->withMsg('saved successful');
    }

    public function destroy(Help $help)
    {
        $help->delete();

        return redirect()->route('admin.help.index')->withMsg('deleted successful');
    }
}
