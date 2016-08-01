@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/help">Helps</a></li>
@stop


@section('title')
    HOW WE CAN HELP
    <a class="btn btn-success" href="/admin/help/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Name</th>
                <th>Text</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($helps as $help)

            <tr>

                <td>{{ $help->name }}</td>

                <td>{{ $help->text }}</td>

                <td><?php echo $help->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/help/destroy/{{ $help->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/help/edit/{{ $help->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop