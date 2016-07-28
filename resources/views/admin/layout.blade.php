<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>GrantStand</title>

    <script src="/jquery/jquery-1.11.2.min.js"></script>

    <!--<script src="/packages/lampaweb/common-assets/jquery-ui/jquery-ui.min.js"></script>-->
    <!--<link rel="stylesheet" href="/packages/lampaweb/common-assets/jquery-ui/jquery-ui.min.css">-->

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    {{--sort--}}

    <!--<script src="/packages/lampaweb/positions/js/sort.js"></script>-->

    <!-- Autocomplete -->
    <!--<link rel="stylesheet" href="/bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css">
    <script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="/js/combobox-select.js"></script>-->

    <!-- Datepicker -->
    <!--<link href="/bower_components/air-datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="/bower_components/air-datepicker/dist/js/datepicker.min.js"></script>
    <script src="/bower_components/air-datepicker/dist/js/i18n/datepicker.en.js"></script>-->


    {{--/sort--}}
    {{--REST actions helper--}}

    <script type="text/javascript">

        $(function () {

            $('a.btn-danger').on("click", function (e) {

                if (!confirm("Confirm the action")) {
                    e.preventDefault();
                } else {
                    //
                }

            });

            $('.rest_action').click(function (e) {

                e.preventDefault();

                var form = $('<form/>');

                $(form).attr('action', $(this).data('uri'));
                $(form).attr('method', 'post');

                var pseudoMethod = $('<input type="hidden" name="_method"/>');

                if ($(this).data('method') == "GET") {

                    var uri = $(this).data('uri');

                    var query = $(this).data('query');

                    if (query instanceof Object) {

                        var queryPart = [];

                        $.each(query, function (key, value) {

                            queryPart.push(key + '=' + value);

                        });

                        queryPart = queryPart.join('&');

                        uri = uri + '?' + queryPart;

                    }

                    //alert(1);

                    window.location.href = uri;

                    return true;
                }

                if ($(this).data('method').toLowerCase() == "delete") {
                    if (!confirm('Confirm the deletion')) {
                        return false;
                    }
                }

                $(pseudoMethod).attr('value', $(this).data('method'));
                $(form).append(pseudoMethod);

                var query = $(this).data('query');

                if (query instanceof Object) {
                    $.each(query, function (key, value) {

                        $('<input type="hidden" name="' + key + '" value="' + value + '"/>').appendTo(form);

                    });
                }

                //alert($(form).attr('method'));

                $(form).submit();

            });

        });

    </script>

    {{--/REST actions helper--}}

    @yield('head_scripts')

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <span class="navbar-brand"> GrandStand - Administration</span>
        </div>
        <div class="collapse navbar-collapse">


            <ul class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="/login'">Login</a></li>
                    <!--<li><a href="/register">Register</a></li>-->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>


        </div>
    </div>
</nav>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-3">

            {{-- левое меню --}}
            <ul class="nav nav-pills nav-stacked">
                @include('admin.left_menu')
            </ul>
            {{-- /левое меню --}}

        </div>

        <div class="col-md-9">

            {{-- сообщения --}}
            <div class="row">
                <div class="col-md-12">
                    @if(Session::get('msg'))
                        <div class="alert alert-success" role="alert">{{trans(Session::get('msg'))}}</div>
                    @endif

                    @if($errors->count())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $msg)
                                <p>{{trans($msg)}}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            {{-- /сообщения --}}

            <div class="row">
                <div class="col-md-12">

                    {{-- хлебные крошки --}}
                    <ul class="breadcrumb">
                        <li>
                            <a href="/admin">Administration</a>
                        </li>
                        @yield('breadcrumbs')
                    </ul>
                    {{-- /хлебные крошки --}}

                    {{-- заголовок страницы --}}
                    <h2 class="page-header">@yield('title')</h2>
                    {{-- /заголовок страницы --}}

                    {{-- контент --}}
                    @yield('content')
                    {{-- /контент --}}
                    <br>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>
