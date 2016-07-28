@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/article">News</a></li>
@stop


@section('title')
    News ( GRANDSTAND IN THE NEWS )
    <a class="btn btn-success" href="/admin/article/create">Create</a>
@stop

@section('content')

    <table class="table table-condensed table-bordered table-hover">

        <tr>
                <th>Name</th>
                <th>text</th>
                <th>photo</th>
                <th>Actions</th>
        </tr>

        @foreach($articles as $article)

            <tr>

            <td>{{ $article->name }}</td>

            <td>{{ $article->text }}</td>

            <td><?php echo $article->getImageTag(); ?></td>

            <td><a class="btn btn-xs btn-danger" href="/admin/article/destroy/{{ $article->id }}">Delete</a>
                <a class="btn btn-xs btn-primary" href="/admin/article/edit/{{ $article->id }}">Edit</a></td>

                </tr>

        @endforeach
    </table>

@stop