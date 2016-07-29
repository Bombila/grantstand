<?php

namespace App\Http\Controllers\Admin\Button;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modal;
use App\Button;
use App\File;
use Illuminate\Support\Facades\Validator;

class ButtonController extends Controller
{
    public function getIndex()
    {
        $buttonList = Button::get();

        //dd($buttonList);

        return view('admin.button.list')->withButtons($buttonList);
    }

    public function getEdit(Button $button)
    {
        $modals = Modal::get();

        return view('admin.button.edit', ['button' => $button, 'modals' => $modals]);
    }

    public function update(Button $button, Request $request, File $file)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'text' => 'required',
                'type' => 'required',
                'link' => 'sometimes',
                'modal_id' => 'sometimes'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $button->update($data);

        return redirect()->route('admin.button.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        $modals = Modal::get();

        return view('admin.button.create')->withModals($modals);
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'text' => 'required',
                'type' => 'required',
                'link' => 'sometimes',
                'modal_id' => 'sometimes'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        $button = Button::create($data);

        $button->save();

        return redirect()->route('admin.button.index')->withMsg('saved successful');
    }

    public function destroy(Button $button)
    {
        $button->delete();

        return redirect()->route('admin.button.index')->withMsg('deleted successful');
    }
}
