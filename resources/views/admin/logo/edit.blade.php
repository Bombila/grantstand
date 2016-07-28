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

        <div>
            <ul class="light-list" style="margin-top: 30px">
                <li>
                    <div id="loading-file" class="float-right">{{ $settings->getUploadedBrandLogo() }}</div>
                    <div  id="loading-file-description">Loading file</div>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                        <label for="brand_logo">Brand logo</label>
                        <input type="file" name="brand_logo" id="brand_logo" value="">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@stop