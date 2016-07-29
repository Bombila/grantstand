@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/button">Buttons</a></li>
@stop


@section('title')
    Buttons
    <a class="btn btn-success" href="/admin/button/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Text</th>
                <th>Type</th>
                <th>Link</th>
                <th>Modal window</th>
                <th>Actions</th>
        </tr>

        @foreach($buttons as $button)

            <tr>

            <td>{{ $button->text }}</td>

            <td>{{ config('button.' . $button->type) }}</td>

            <td> {{ $button->link }} </td>

                <td> {{ $button->Modal->title }} </td>

            <td><a class="btn btn-xs btn-danger" href="/admin/button/destroy/{{ $button->id }}">Delete</a>
                <a class="btn btn-xs btn-primary" href="/admin/button/edit/{{ $button->id }}">Edit</a></td>

                </tr>

        @endforeach
    </table>

@stop