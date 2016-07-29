@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/modal">Modals</a></li>
    <li><a href="/admin/modal/create">Create</a></li>
@stop

@section('title')
    Create new modal window
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input  class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" name="text" id="text">{{ old('text') }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="iframe">Youtube iframe</label>
                    <textarea class="form-control" name="iframe" id="iframe">{{ old('iframe') }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select  class="form-control" id="type" name="type">
                        <option value="youtube">Youtube</option>
                        <option value="text">Text only</option>
                        <option value="image">Text with image</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{ old('image') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img id="uploaded_image" src="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="social_icons">Social Icons</label>
                    <select class="form-control" id="social_icons" name="social_icons">
                        <option value="1">Allow</option>
                        <option value="0">Disallow</option>
                    </select>
                </div>
            </div>
        </div>






        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop