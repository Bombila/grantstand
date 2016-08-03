<?php

namespace App\Http\Controllers\Admin\Client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use App\File;
use App\Modal;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function getIndex()
    {
        $clientList = Client::get();

        //dd($clientList);

        return view('admin.client.list')->withClientes($clientList);
    }

    public function getEdit(Client $client)
    {
        $modals = Modal::get();

        return view('admin.client.edit', [
            'client' => $client,
            'modals' => $modals
        ]);
    }

    public function update(Client $client, Request $request, File $file)
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
                'position' => 'required',
                'image' => 'sometimes',
                'modal_id' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $client->update($data);

        return redirect()->route('admin.client.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        $modals = Modal::get();

        return view('admin.client.create')->withModals($modals);
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'position' => 'required',
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

        $client = Client::create($data);

        $client->save();

        return redirect()->route('admin.client.index')->withMsg('saved successful');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('admin.client.index')->withMsg('deleted successful');
    }
}
