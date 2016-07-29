@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/modal">Modals</a></li>
@stop


@section('title')
    Modal windows
    <a class="btn btn-success" href="/admin/modal/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Title</th>
                <th>Text</th>
                <th>Type</th>
                <th>Youtube Iframe</th>
                <th>Image</th>
                <th>Social Icons</th>
                <th>Actions</th>
        </tr>

        @foreach($modals as $modal)

            <tr>

                <td>{{ $modal->title }}</td>

                <td>{{ $modal->text }}</td>

                <td>{{ config('modal.' . $modal->type) }}</td>

                <td>{{ $modal->iframe }}</td>

                <td><?php echo $modal->getImageTag(); ?></td>

                <td>

                    @if($modal->social_icons)
                        Allowed
                    @else
                        Disallowed
                    @endif

                </td>

                <td><a class="btn btn-xs btn-danger" href="/admin/modal/destroy/{{ $modal->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/modal/edit/{{ $modal->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop