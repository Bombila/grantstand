@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/review">Reviews</a></li>
@stop


@section('title')
    Client Reviews
    <a class="btn btn-success" href="/admin/review/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Name</th>
                <th>Position</th>
                <th>text</th>
                <th>photo</th>
                <th>Actions</th>
        </tr>

        @foreach($reviews as $review)

            <tr>

            <td>{{ $review->client_name }}</td>

            <td>{{$review->client_position  }}</td>

            <td>{{ $review->client_text }}</td>

            <td><?php echo $review->getImageTag(); ?></td>

            <td><a class="btn btn-xs btn-danger" href="/admin/review/destroy/{{ $review->id }}">Delete</a>
                <a class="btn btn-xs btn-primary" href="/admin/review/edit/{{ $review->id }}">Edit</a></td>

                </tr>

        @endforeach
    </table>

@stop