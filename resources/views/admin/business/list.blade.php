@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/business">businesses</a></li>
@stop


@section('title')
    BUSINESS & PROFESSIONAL SERVICES
    <a class="btn btn-success" href="/admin/business/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
        </tr>

        @foreach($businesses as $business)

            <tr>

                <td>{{ $business->name }}</td>

                <td><?php echo $business->getImageTag(); ?></td>

                <td><a class="btn btn-xs btn-danger" href="/admin/business/destroy/{{ $business->id }}">Delete</a>
                    <a class="btn btn-xs btn-primary" href="/admin/business/edit/{{ $business->id }}">Edit</a></td>

            </tr>

        @endforeach
    </table>

@stop