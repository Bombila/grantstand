@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/client">clients</a></li>
    <li><a href="/admin/client/create">Create</a></li>
@stop

@section('title')
    Create new client (clients page)
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input  class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="position">Position</label>
                    <input  class="form-control" type="text" name="position" id="position" value="{{ old('position') }}">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{ old('image') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <img id="uploaded_image" src="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="modal_id">Modal window</label>
                    <select  class="form-control" id="modal_id" name="modal_id">

                        @foreach($modals as $modal)

                            <option value="{{ $modal->id }}">{{ $modal->title }}</option>

                        @endforeach

                    </select>
                </div>
            </div>
        </div>




        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop