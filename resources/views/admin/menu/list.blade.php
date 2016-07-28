@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/menu">Menu</a></li>
@stop


@section('title')
    Menus
    <a class="btn btn-success" href="/admin/menu/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Page</th>
                <th>Parent menu</th>
                <th>Actions</th>
        </tr>

        @foreach($menus as $menu)

            <tr>

                <td>{{ $menu->name }}</td>

                <td>{{$menu->slug  }}</td>

                <td>{{ $menu->description }}</td>

                <td>{{ $menu->getPageName() }}</td>

                <td>{{$menu->getParentMenuName()  }}</td>

                <td><a class="btn btn-xs btn-danger" href="/admin/menu/destroy/{{ $menu->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/menu/edit/{{ $menu->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop