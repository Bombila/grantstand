@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/logo">Logo</a></li>
@stop

@section('title')
    Brand logo
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <!-- Logo type -->
        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="value_1">Logo type</label>
                    <select class="form-control" name="value_1">
                        <option
                                @if ($settings->value_1)
                                    selected="selected"
                                @endif
                                value="1">Vector Logo
                        </option>
                        <option
                                @if (!$settings->value_1)
                                    selected="selected"
                                @endif
                                value="0">Simple Logo
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <!-- First logo -->

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image_1">Vector Logo</label>
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


        <!-- Second logo -->

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image_2">Simple Logo</label>
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