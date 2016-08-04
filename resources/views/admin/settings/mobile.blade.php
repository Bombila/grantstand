@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/mobile">Settings</a></li>
@stop

@section('title')
    Mobile settings
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">

        <button type="submit" class="btn btn-primary">Save</button>

        <!-- First -->

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="title_1">Title 1</label>
                    <input class="form-control" name="title_1" id="title_1" value="{{ $settings->title_1 }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="text_1">Text 1</label>
                    <textarea class="form-control" name="text_1" id="text_1">{{ $settings->text_1 }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image_1">Photo 1</label>
                    <input class="form-control" type="file" name="image_1" id="image_1" value="{{ $settings->image_1 }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image_1" src="{{ $settings->image_1 }}">
            </div>
        </div>
        <input type="hidden" name="uploaded_image_1" value="{{ $settings->image_1 }}">

        <!-- Second -->

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="title_2">Title 2</label>
                    <input class="form-control" name="title_2" id="title_2" value="{{ $settings->title_2 }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="text_2">Text 2</label>
                    <textarea class="form-control" name="text_2" id="text_2">{{ $settings->text_2 }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image_2">Photo 2</label>
                    <input class="form-control" type="file" name="image_2" id="image_2" value="{{ $settings->image_2 }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image_2" src="{{ $settings->image_2 }}">
            </div>
        </div>
        <input type="hidden" name="uploaded_image_2" value="{{ $settings->image_2 }}">



        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop