@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/work">How it works</a></li>
@stop


@section('title')
    How it works
    <a class="btn btn-success" href="/admin/work/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($works as $work)

            <tr>

                <td>{{ $work->title }}</td>

                <td><?php echo $work->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/work/destroy/{{ $work->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/work/edit/{{ $work->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop