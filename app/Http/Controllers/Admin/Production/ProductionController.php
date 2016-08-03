<?php

namespace App\Http\Controllers\Admin\Production;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\File;
use App\Production;
use App\Modal;
use Illuminate\Support\Facades\Validator;

class ProductionController extends Controller
{
    public function getIndex()
    {
        $productionList = Production::get();

        //dd($productionList);

        return view('admin.production.list')->withProductions($productionList);
    }

    public function getEdit(Production $production)
    {
        $modals = Modal::get();

        return view('admin.production.edit', [
            'production' => $production,
            'modals' => $modals
        ]);
    }

    public function update(Production $production, Request $request, File $file)
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
                'image' => 'sometimes',
                'modal_id' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $production->update($data);

        return redirect()->route('admin.production.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        $modals = Modal::get();

        return view('admin.production.create')->withModals($modals);
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'image' => 'sometimes',
                'modal_id' => 'required'
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

        $production = Production::create($data);

        $production->save();

        return redirect()->route('admin.production.index')->withMsg('saved successful');
    }

    public function destroy(Production $production)
    {
        $production->delete();

        return redirect()->route('admin.production.index')->withMsg('deleted successful');
    }
}
