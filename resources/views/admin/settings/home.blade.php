@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/button">Settings</a></li>
@stop

@section('title')
    Home settings
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="welcome">Welcome message</label>
                    <textarea class="form-control" name="welcome" id="welcome">{{ $settings->welcome }}</textarea>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop