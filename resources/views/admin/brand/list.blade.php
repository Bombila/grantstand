@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/brand">Brand</a></li>
@stop


@section('title')
    Brands
    <a class="btn btn-success" href="/admin/brand/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Actions</th>
        </tr>

        @foreach($brands as $brand)

            <tr>

            <td>{{ $brand->id }}</td>

            <td><?php echo $brand->getImageTag(); ?></td>

            <td><a class="btn btn-xs btn-danger" href="/admin/brand/destroy/{{ $brand->id }}">Delete</a>
                <a class="btn btn-xs btn-primary" href="/admin/brand/edit/{{ $brand->id }}">Edit</a></td>

                </tr>

        @endforeach
    </table>

@stop