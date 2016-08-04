@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/saying">What our clients are saying</a></li>
@stop


@section('title')
    What our clients are saying
    <a class="btn btn-success" href="/admin/saying/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($sayings as $saying)

            <tr>

                <td>{{ $saying->title }}</td>

                <td><?php echo $saying->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/saying/destroy/{{ $saying->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/saying/edit/{{ $saying->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop