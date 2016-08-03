@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/team">Our team</a></li>
@stop


@section('title')
    Our team (OUR TALENTED TEAM)
    <a class="btn btn-success" href="/admin/team/create">Create</a>
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

        @foreach($teames as $team)

            <tr>

                <td>{{ $team->name }}</td>

                <td>{{ $team->position }}</td>

                <td>{{ $team->Modal->title }}</td>

                <td><?php echo $team->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/team/destroy/{{ $team->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/team/edit/{{ $team->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop