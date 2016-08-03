@extends('showcase.layout')

@section('main-nav')

@include('showcase.pages._main-nav')

@stop


    @section('content')

<!-- Main-->
<main class="container"><h1 class="heading">Our Clients</h1>

    <div class="team__members row">

        @foreach ($clients as $client)

            <div role="button" data-toggle="modal" data-target="#myModal-{{ $client->modal_id }}" class="member member--client col-md-3"><img
                        src="{{ $client->image }}" class="member__photo">

                <div class="member__bio">
                    <div class="bio__wrapper">
                        <div class="bio__name">{{ $client->name }}</div>
                        <div class="bio__position">{{ $client->position }}</div>
                    </div>
                </div>
            </div>

        @endforeach


    </div>
</main><!-- End of Main-->

    @stop

@include('showcase.pages._modals')