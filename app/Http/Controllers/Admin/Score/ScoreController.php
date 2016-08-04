<?php

namespace App\Http\Controllers\Admin\Score;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\File;
use App\Score;
use Illuminate\Support\Facades\Validator;

class ScoreController extends Controller
{
    public function getIndex()
    {
        $scoreList = Score::get();

        //dd($scoreList);

        return view('admin.score.list')->withScores($scoreList);
    }

    public function getEdit(Score $score)
    {
        return view('admin.score.edit', [
            'Score' => $score
        ]);
    }

    public function update(Score $score, Request $request, File $file)
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

        $score->update($data);

        return redirect()->route('admin.score.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.score.create');
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

        $score = Score::create($data);

        $score->save();

        return redirect()->route('admin.score.index')->withMsg('saved successful');
    }

    public function destroy(Score $score)
    {
        $score->delete();

        return redirect()->route('admin.score.index')->withMsg('deleted successful');
    }
}
