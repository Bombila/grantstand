@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/saying">What our clients are saying</a></li>
    <li><a href="/admin/saying/edit">Edit</a></li>
@stop

@section('title')
    Edit saying
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input  class="form-control" type="text" name="title" id="title" value="{{ $saying->title }}">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{ $saying->image }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image" src="{{ $saying->image }}">
            </div>
        </div>

        <input type="hidden" name="uploaded_image" value="{{ $saying->image }}">


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop