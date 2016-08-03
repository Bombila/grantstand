@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/client">clients</a></li>
@stop


@section('title')
    clients (clients page)
    <a class="btn btn-success" href="/admin/client/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Modal window</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($clientes as $client)

            <tr>

                <td>{{ $client->name }}</td>

                <td>{{ $client->position }}</td>

                <td>{{ $client->Modal->title }}</td>

                <td><?php echo $client->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/client/destroy/{{ $client->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/client/edit/{{ $client->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop