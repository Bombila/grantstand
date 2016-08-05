@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/about">Settings</a></li>
@stop

@section('title')
    About settings
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">

        <button type="submit" class="btn btn-primary">Save</button>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control" name="about" id="about">{{ $settings->about }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{ $settings->image }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image" src="{{ $settings->image }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="value_1">Show image</label>
                    <select class="form-control" id="value_1" name="value_1">
                        <option value="1">Allow</option>
                        <option
                                @if(!$settings->value_1)
                                        selected="selected"
                                @endif
                                value="0">Disallow</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="column_1">Contact us</label>
                    <textarea class="form-control" name="column_1" id="column_1">{{ $settings->column_1 }}</textarea>
                </div>
            </div>
        </div>


        <input type="hidden" name="uploaded_image" value="{{ $settings->image }}">

        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop