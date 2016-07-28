@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/brand">Brands</a></li>
    <li><a href="/admin/brand/edit">Edit</a></li>
@stop

@section('title')
    Edit brand ( BRANDS AND ORGANIZATIONS WE WORK )
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
                <img  width="250px" id="uploaded_image" src="{{ $brand->image }}">
            </div>
            <input type="hidden" name="uploaded_image" value="{{ $brand->image }}">
        </div>


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@stop