@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/review">Reviews</a></li>
    <li><a href="/admin/review/edit">Edit</a></li>
@stop

@section('title')
    Edit review ( WHAT OUR CLIENTS ARE SAYING )
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="client_photo">Photo</label>
                    <input class="form-control" type="file" name=client_photo id="client_photo" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_photo" src="{{ $review->client_photo }}">
            </div>
            <input type="hidden" name="uploaded_photo" value="{{ $review->client_photo }}">
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="client_name">Name</label>
                    <input  class="form-control" type="text" name="client_name" id="client_name" value="{{ $review->client_name }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="client_position">Position</label>
                    <input  class="form-control" type="text" name="client_position" id="client_position" value="{{ $review->client_position }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="client_text">Text</label>
                    <textarea class="form-control" name="client_text" id="client_text">{{ $review->client_text }}</textarea>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@stop