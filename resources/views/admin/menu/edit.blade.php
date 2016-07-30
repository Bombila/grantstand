@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/menu">Menu</a></li>
    <li><a href="/admin/menu/edit">Edit</a></li>
@stop

@section('title')
    Edit menu
@stop

@section('content')

    <form action="" method="post">


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $menu->name }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description">{{ $menu->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input class="form-control" type="text" name="slug" id="slug" value="{{ $menu->slug }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="parent_id">Parent menu</label>
                    <select class="form-control" name="parent_id" id="parent_id">

                        <option
                                @if(!$menu->parent_id)
                                      selected="selected"
                                @endif
                                value="0">Not selected</option>

                        @foreach($parents as $parent)

                                <option
                                        @if($menu->parent_id == $parent->id)
                                                selected="selected"
                                        @endif
                                        value="{{ $parent->id }}">{{ $parent->name }}</option>

                        @endforeach

                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@stop