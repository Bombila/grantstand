@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/production">Content Production</a></li>
@stop


@section('title')
    Content Production
    <a class="btn btn-success" href="/admin/production/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Title</th>
                <th>Modal window</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($productions as $production)

            <tr>

                <td>{{ $production->title }}</td>

                <td>{{ $production->Modal->title }}</td>

                <td><?php echo $production->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/production/destroy/{{ $production->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/production/edit/{{ $production->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop