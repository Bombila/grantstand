@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/score">Your brand scores</a></li>
@stop


@section('title')
    Your brand scores
    <a class="btn btn-success" href="/admin/score/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($scores as $score)

            <tr>

                <td>{{ $score->title }}</td>

                <td><?php echo $score->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/score/destroy/{{ $score->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/score/edit/{{ $score->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop