@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/article">News</a></li>
    <li><a href="/admin/article/create">Create</a></li>
@stop

@section('title')
    Create new article ( GRANDSTAND IN THE NEWS )
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="client_photo">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="">
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
                    <label for="name">Name</label>
                    <input  class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
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


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop