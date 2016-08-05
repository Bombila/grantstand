@extends('showcase.layout')

@section('additional-header-classes')
    <?php echo 'header--has-second-menu'; ?>
@stop

@section('main-nav')

    @include('showcase.pages._main-nav')

    @stop

    @section('content')

<!-- Main-->
<main>
    <section class="info container"><h2 class="heading">How We Can Help</h2>

        <div class="info__text row">

            @foreach($helps as $help)

                <div class="trigger trigger--straight col-md-4"><img src="{{ $help->image }}" alt=""
                                                                     class="trigger__icon">

                    <div class="trigger__header">
                        <a
                                href="#"
                                class="media__link"
                                data-toggle="modal"
                                data-target="#myModal-{{ $help->modal_id }}">{{ $help->name }}
                        </a>
                    </div>
                    <div class="clearfix hidden-lg-up"></div>
                    <?php echo($help->text); ?>
                </div>

            @endforeach

        </div>
    </section>
    <section class="about"><h2 class="heading">Representation</h2>

        <div class="container">
            <div class="row">
                <div class="about__text col-md-8 col-md-offset-2">{{ $settings->representation }}
                </div>
            </div>
            <div class="about__triggers row">
                <div class="trigger col-md-2 col-md-offset-2">
                    <div class="trigger__circle"><img src="images/icons/represent-1.png" alt="" class="trigger__icon">

                        <div class="trigger__header">Basketball</div>
                    </div>
                </div>
                <div class="trigger col-md-2 col-md-offset-1">
                    <div class="trigger__circle"><img src="images/icons/represent-2.png" alt="" class="trigger__icon">

                        <div class="trigger__header">Soccer</div>
                    </div>
                </div>
                <div class="trigger col-md-2 col-md-offset-1">
                    <div class="trigger__circle"><img src="images/icons/represent-3.png" alt="" class="trigger__icon">

                        <div class="trigger__header">Other</div>
                    </div>
                </div>
            </div>
            <div class="about__arrows">
                <div class="trigger__arrow trigger__arrow--1"></div>
                <div class="trigger__arrow trigger__arrow--2"></div>
                <div class="trigger__arrow trigger__arrow--3"></div>
                <div class="trigger__arrow trigger__arrow--4"></div>
            </div>
            <div class="about__descr row">
                <div class="descr col-md-3">
                    <div class="descr__heading">{{ $settings->value_1 }}</div>
                    <div class="descr__text">{{ $settings->column_1 }}
                    </div>
                </div>
                <div class="descr col-md-3">
                    <div class="descr__heading">{{ $settings->value_2 }}</div>
                    <div class="descr__text descr__text--line-down">{{ $settings->column_2 }}
                    </div>
                </div>
                <div class="descr col-md-3">
                    <div class="descr__heading">{{ $settings->value_3 }}</div>
                    <div class="descr__text">{{ $settings->column_3 }}
                    </div>
                </div>
                <div class="descr col-md-3">
                    <div class="descr__heading">{{ $settings->value_4 }}</div>
                    <div class="descr__text descr__text--line-down">{{ $settings->column_4 }}
                    </div>
                </div>
            </div>
            <section class="marketing">
                <div class="centered"><h2 class="heading heading--border">Marketing & Branding</h2></div>
                <div class="row">
                    <div class="marketing__text col-xs-12 col-md-8 col-md-offset-2">{{ $settings->marketing }}
                    </div>
                </div>
                <div class="marketing__text-blocks row">
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">{{ $settings->box_1 }}</div>
                    </div>
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">{{ $settings->box_2 }}</div>
                    </div>
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">{{ $settings->box_3 }}</div>
                    </div>
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">{{ $settings->box_4 }}</div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="info info--nopadding container"><h2 class="heading">Business & Professional Services</h2>

        <div class="row">
            <div class="info__text col-xs-12 col-md-8 col-md-offset-2">{{ $settings->business }}
            </div>
        </div>
        <div class="info__blocks row">

            @foreach($businesses as $business)

                <div class="block col-xs-12 col-sm-6 col-md-4">
                    <div style="background: url({{ $business->image }}) center no-repeat;" class="block__bg block__bg--legal">
                        <div class="block__text">{{ $business->name }}</div>
                    </div>
                </div>

            @endforeach

        </div>
    </section>
</main><!-- End of Main-->

@stop

@include('showcase.pages._modals')