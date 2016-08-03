@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/client">clientes</a></li>
    <li><a href="/admin/client/edit">Edit</a></li>
@stop

@section('title')
    Edit client (clients page)
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input  class="form-control" type="text" name="name" id="name" value="{{ $client->name }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="position">Position</label>
                    <input  class="form-control" type="text" name="position" id="position" value="{{ $client->position }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{ $client->image }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img  width="250px" id="uploaded_image" src="{{ $client->image }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="modal_id">Modal window</label>
                    <select  class="form-control" id="modal_id" name="modal_id">

                        @foreach($modals as $modal)

                            <option
                                    @if($client->modal_id == $modal->id)
                                    selected="selected"
                                    @endif
                                    value="{{ $modal->id }}">{{ $modal->title }}</option>

                        @endforeach

                    </select>
                </div>
            </div>
        </div>

        <input type="hidden" name="uploaded_image" value="{{ $client->image }}">


        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop