@extends('showcase.layout')

@section('additional-head-links')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css">
@stop

@section('main-nav')

    @include('showcase.pages._main-nav')

@stop

@section('content')

<div class="video">
    <div class="video__play-button"><a href="#"><img src="images/play-button.png" alt=""></a></div>
    <div class="video__preview"></div>
</div><!-- Main-->
<main><!-- Welcome-->
    <section class="info container"><h2 class="heading">Welcome to Grandstand</h2>

        <div class="row">
            <div class="info__text col-md-8 col-md-offset-2">{{ $settings->welcome }}
                <div class="centered">

                    @foreach($buttons as $button)

                        <a href="
                            @if($button->type === 'link')
                                {{ $button->link }}
                            @else
                                #
                            @endif
                        "
                           @if($button->type === 'modal')
                                data-toggle="modal"
                           @endif
                           data-target="#myModal-{{ $button->modal_id }}" class="button button--block">
                            {{ $button->text }}
                        </a>

                    @endforeach

                </div>
            </div>
        </div>
    </section><!-- What We Do-->
    <section class="info info--what-we-do"><h2 class="heading">What We Do</h2>

        <div class="container">
            <div class="info__text row">
                <div class="trigger trigger--wwd"><img src="images/icons/whatwedo-1.png" alt="" class="trigger__icon">

                    <div class="trigger__heading">Talent Representation</div>
                </div>
                <div class="trigger trigger--wwd"><img src="images/icons/whatwedo-2.png" alt="" class="trigger__icon">

                    <div class="trigger__heading">Brand Managment</div>
                </div>
                <div class="trigger trigger--wwd"><img src="images/icons/whatwedo-3.png" alt="" class="trigger__icon">

                    <div class="trigger__heading">Professional Business Services</div>
                </div>
                <div class="trigger trigger--wwd"><img src="images/icons/whatwedo-4.png" alt="" class="trigger__icon">

                    <div class="trigger__heading">Video & Content Production</div>
                </div>
                <div class="trigger trigger--wwd"><img src="images/icons/whatwedo-5.png" alt="" class="trigger__icon">

                    <div class="trigger__heading">Mobile Technology</div>
                </div>
            </div>
        </div>
    </section><!-- End of What We Do--><!-- Reviews-->
    <section class="info info--reviews container"><h2 class="heading">What Our Clients are Saying</h2>

        <div class="info__text row">

            @foreach($reviews as $review)

                <div class="client col-md-4"><img src="{{ $review->client_photo }}" alt="" class="client__photo">

                    <div class="client-bio">
                        <div class="client__name">{{ $review->client_name }}</div>
                        <div class="client__position">{{ $review->client_position }}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="client__text">{{ $review->client_text }}
                    </div>
                </div>

            @endforeach

        </div>
    </section><!-- End of Reviews--><!-- Partners-->
    <section class="partners container"><h2 class="heading heading--line"><span>Brands and Organizations We Work</span>
        </h2>

        <div class="partners__logos">

            @foreach($brands as $brand)

                <div class="partner"><img src="{{ $brand->image }}" alt="" class="partner__logo"></div>

            @endforeach

        </div>
    </section><!-- End of Partners--><!-- Press-->
    <section class="press container"><h2 class="heading">GrandStand in the News</h2>

        <div class="media-tabs">
            <div id="media-tabs" data-ride="carousel" class="row carousel slide">
                <div role="listbox" class="col-md-8 carousel-inner">

                    <?php $i = 0; ?>

                    @foreach($articles as $article)

                        <div class="carousel-item item <?php if(!$i) { echo ' active'; }?>"><img src="{{ $article->image }}" data-holder-rendered="true">

                            <div class="carousel-caption"><h3 class="heading heading--tab">{{ $article->name }}</h3>

                                <p>{{ $article->text }}</p>
                            </div>
                        </div>

                        <?php $i++; ?>

                    @endforeach


                </div>

                <ol class="col-md-4 carousel-indicators">

                    <?php $i = 0; ?>

                    @foreach($articles as $article)

                        <li data-target="#media-tabs" data-slide-to="<?php echo $i; ?>" <?php if(!$i) { echo ' class="active"'; }?>>
                            {{ $article->name }}
                        </li>

                        <?php $i++; ?>

                    @endforeach

                </ol>
            </div>
        </div>
    </section><!-- End of Press-->
</main><!-- End of Main--><!-- Modals-->

@stop

@include('showcase.pages._modals')