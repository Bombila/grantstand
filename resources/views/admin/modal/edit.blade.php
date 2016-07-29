@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/modal">Modals</a></li>
    <li><a href="/admin/modal/edit">Edit</a></li>
@stop

@section('title')
    Edit modal window
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input  class="form-control" type="text" name="title" id="title" value="{{ $modal->title }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" name="text" id="text">{{ $modal->text }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="iframe">Youtube iframe</label>
                    <textarea class="form-control" name="iframe" id="iframe">{{ $modal->iframe }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="stype">Type</label>
                    <select id="type" name="type">
                        <option
                                @if($modal->type === 'youtube')
                                    selected="selected"
                                @endif
                                value="youtube">
                            Youtube
                        </option>
                        <option
                                @if($modal->type === 'text')
                                selected="selected"
                                @endif
                                value="text">Text only
                        </option>
                        <option
                                @if($modal->type === 'image')
                                selected="selected"
                                @endif
                                value="image">
                            Text with image
                        </option>
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{ $modal->image }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image" src="{{ $modal->image }}">
            </div>
        </div>

        <input type="hidden" name="uploaded_image" value="{{ $modal->image }}">

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="social_icons">Social Icons</label>
                    <select id="social_icons" name="social_icons">
                        <option
                                @if($modal->type)
                                selected="selected"
                                @endif
                                value="1">
                            Allow
                        </option>
                        <option
                                @if(!$modal->type)
                                selected="selected"
                                @endif
                                value="0">
                            Disallow
                        </option>
                    </select>
                </div>
            </div>
        </div>






        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop