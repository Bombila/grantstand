<?php

namespace App\Http\Controllers\Admin\BRAND;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Brand;
use App\File;
use Illuminate\Support\Facades\Validator;

class BRANDController extends Controller
{
    public function getIndex()
    {
        $brandList = Brand::get();

        //dd($brandList);

        return view('admin.brand.list')->withBrands($brandList);
    }

    public function getEdit(Brand $brand)
    {
        return view('admin.brand.edit')->withBrand($brand);
    }

    public function update(Brand $brand, Request $request, File $file)
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
                'image' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $brand->update($data);

        return redirect()->route('admin.brand.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        $data['image'] = $file->uploadFile($request->file('image'));

        $brand = Brand::create($data);

        $brand->save();

        return redirect()->route('admin.brand.index')->withMsg('saved successful');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin.brand.index')->withMsg('deleted successful');
    }
}
