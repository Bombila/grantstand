@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/article">News</a></li>
    <li><a href="/admin/article/edit">Edit</a></li>
@stop

@section('title')
    Edit article ( GRANDSTAND IN THE NEWS )
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image" src="{{ $article->image }}">
            </div>
            <input type="hidden" name="uploaded_image" value="{{ $article->image }}">
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input  class="form-control" type="text" name="name" id="name" value="{{ $article->name }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" name="text" id="text">{{ $article->text }}</textarea>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@stop