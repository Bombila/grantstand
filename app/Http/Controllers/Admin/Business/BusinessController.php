<?php

namespace App\Http\Controllers\Admin\Business;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Business;
use App\File;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    public function getIndex()
    {
        $businessList = Business::get();

        //dd($businessList);

        return view('admin.business.list')->withBusinesses($businessList);
    }

    public function getEdit(Business $business)
    {
        $businessLi = $business->getBusinessToLiTag();

        return view('admin.business.edit')->withBusiness($businessLi);
    }

    public function update(Business $business, Request $request, File $file)
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
                'image' => 'sometimes',
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $business->update($data);

        return redirect()->route('admin.business.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.business.create');
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'image' => 'sometimes',
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

        $business = Business::create($data);

        $business->save();

        return redirect()->route('admin.business.index')->withMsg('saved successful');
    }

    public function destroy(Business $business)
    {
        $business->delete();

        return redirect()->route('admin.business.index')->withMsg('deleted successful');
    }
}
