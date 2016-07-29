<?php

namespace App\Http\Controllers\Admin\Review;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Review;
use App\File;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function getIndex()
    {
        $reviewList = Review::get();

        //dd($reviewList);

        return view('admin.review.list')->withReviews($reviewList);
    }

    public function getEdit(Review $review)
    {
        return view('admin.review.edit')->withReview($review);
    }

    public function update(Review $review, Request $request, File $file)
    {
        $data = $request->all();

        if(!isset($data['client_photo']))
        {
            $data['client_photo'] = $data['uploaded_photo'];
        }
        else
        {
            $data['client_photo'] = $file->uploadFile($request->file('client_photo'));
        }

        $validator = Validator::make(
            $data,
            [
                'client_name' => 'required',
                'client_position' => 'required',
                'client_text' => 'required',
                'client_photo' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $review->update($data);

        return redirect()->route('admin.review.index')->withMsg('saved successful');
    }

    public function getCreate()
    {
        return view('admin.review.create');
    }

    public function store(Request $request, File $file)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'client_name' => 'required',
                'client_position' => 'required',
                'client_text' => 'required',
                'client_photo' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        $data['client_photo'] = $file->uploadFile($request->file('client_photo'));

        $review = Review::create($data);

        $review->save();

        return redirect()->route('admin.review.index')->withMsg('saved successful');
    }

    public function destroy(review $review)
    {
        $review->delete();

        return redirect()->route('admin.review.index')->withMsg('deleted successful');
    }
}
