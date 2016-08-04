@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/fun">And fun win too</a></li>
@stop


@section('title')
    And fun win too
    <a class="btn btn-success" href="/admin/fun/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($funs as $fun)

            <tr>

                <td>{{ $fun->title }}</td>

                <td><?php echo $fun->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/fun/destroy/{{ $fun->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/fun/edit/{{ $fun->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop