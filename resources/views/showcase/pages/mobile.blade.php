@extends('showcase.layout')

@section('additional-header-classes')
    <?php echo 'header--small header--has-second-menu'; ?>
@stop

@section('main-nav')

    @include('showcase.pages._main-nav')

@stop


@section('content')

<main>
    <section style="background: url(<?php echo $settings->image_2; ?>) center center no-repeat; background-position: center center; background-size: cover;"  class="showcase showcase--left showcase__bg--1 wow fadeInLeft">
        <div class="container">
            <div class="row">
                <div class="col-md-8 showcase__text--small"><h2 class="heading">{{ $settings->title_1 }}</h2>

                    <div class="info__text">{{ $settings->text_1 }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(<?php echo $settings->image_2; ?>) center center no-repeat; background-position: center center; background-size: cover;" class="showcase showcase--center showcase__bg--2 wow fadeInRight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-3"><h2 class="heading">{{ $settings->title_2 }}</h2>

                    <div class="info__text">{{ $settings->text_2 }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content container"><h2 class="heading">What our clients are saying</h2>

        <div class="content__media row">

            @foreach ($sayings as $saying)

                <div class="media media--circle col-xs-12 col-md-4 wow slideInLeft">
                    <img src="{{ $saying->image }}"
                          class="media__img">
                    <p style="padding-top: 10px;" class="media_link">{{ $saying->title }}</p>
                </div>

            @endforeach

        </div>
    </section>
    <section class="pros"><h2 class="heading">Your brand scores<img src="images/icons/100.png" alt=""
                                                                    class="brand-score"></h2>

        <div class="container">
            <div class="pros__triggers row">

                @foreach ($scores as $score)

                    <div class="trigger trigger--brand col-md-6">
                        <img src="{{ $score->image }}" alt="" class="trigger__icon">

                        <div class="trigger__text">
                            {{ $score->title }}
                        </div>
                    </div>

                @endforeach


            </div>


            <h2 class="heading">And funs win too</h2>

            <div class="pros__triggers row wow bounceInUp">

                @foreach ($funs as $fun)

                    <div class="trigger trigger--brand col-md-3">
                        <img src="{{ $fun->image }}" alt="" class="trigger__icon">

                        <div class="trigger__text">
                            {{ $fun->title }}
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <section class="how-it-works container"><h2 class="heading">How it works</h2>

        <div class="how-it-works__triggers row wow flipInX">


                @foreach ($works as $work)

                <div class="trigger trigger--how-it-works col-md-3">
                    <div class="trigger__icon-wrapper">
                        <img src="{{ $work->image }}" alt="" class="trigger__icon">
                    </div>
                    <div class="trigger__header">{{ $work->title }}</div>
                </div>

                @endforeach

        </div>
    </section>
</main><!-- End of Main-->

@stop
