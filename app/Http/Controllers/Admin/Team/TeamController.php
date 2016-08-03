<?php

namespace App\Http\Controllers\Admin\Team;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\File;
use App\Team;
use App\Modal;
use Illuminate\Support\Facades\Validator;


class TeamController extends Controller
{
    public function getIndex()
    {
        $teamList = Team::get();

        //dd($teamList);

        return view('admin.team.list')->withTeames($teamList);
    }

    public function getEdit(Team $team)
    {
        $modals = Modal::get();

        return view('admin.team.edit', [
            'team' => $team,
            'modals' => $modals
        ]);
    }

    public function update(Team $team, Request $request, File $file)
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

        $team->update($data);

        return redirect()->route('admin.team.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        $modals = Modal::get();

        return view('admin.team.create')->withModals($modals);
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

        $team = Team::create($data);

        $team->save();

        return redirect()->route('admin.team.index')->withMsg('saved successful');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('admin.team.index')->withMsg('deleted successful');
    }
}
