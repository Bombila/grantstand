@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/button">Buttons</a></li>
    <li><a href="/admin/button/edit">Edit</a></li>
@stop

@section('title')
    Edit button
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" name="text" id="text">{{ $button->text }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select  class="form-control" id="type" name="type">
                        <option
                                @if($button->type === 'link')
                                    selected="selected"
                                @endif
                                value="link">{{ config('button.link') }}</option>
                        <option
                                @if($button->type === 'modal')
                                    selected="selected"
                                @endif
                                value="modal">{{ config('button.modal') }}</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="link">Link</label>
                    <textarea class="form-control" name="link" id="link">{{ $button->link }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="modal_id">Modal window</label>
                    <select  class="form-control" id="modal_id" name="modal_id">

                        @foreach($modals as $modal)

                            <option
                                    @if($button->modal_id == $modal->id)
                                    selected="selected"
                                    @endif
                                    value="{{ $modal->id }}">{{ $modal->title }}</option>

                        @endforeach

                    </select>
                </div>
            </div>
        </div>





        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop