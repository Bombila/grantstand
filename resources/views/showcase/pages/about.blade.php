@extends('showcase.layout')

@section('main-nav')

@include('showcase.pages._main-nav')

@stop


    @section('content')



<!-- Main-->
<main>
    <section class="info container"><h1 class="heading">About GrandStand</h1>

        @if($settings->value_1)

        <div class="row">
            <div class="info__text col-md-6 col-md-offset-2">{{ $settings->about }}
            </div>
            <div class="col-md-4 "><img src="{{ $settings->image }}">
            </div>
        </div>

        @else

            <div class="row">
                <div class="info__text col-md-8 col-md-offset-2">{{ $settings->about }}
                </div>
            </div>

        @endif

    </section>
    <section class="team container"><h2 class="heading">Our Talented Team</h2>

        <div class="team__members row">

            @foreach($teams as $team)

                <div class="member col-md-3"><img src="{{ $team->image }}" class="member__photo">

                    <div class="member__bio">
                        <div class="bio__wrapper">
                            <div class="bio__name">{{ $team->name }}</div>
                            <div class="bio__position">{{ $team->position }}</div>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>
    </section>
    <section class="content container"><h2 class="heading">Content Production</h2>

        <div class="content__media row">

            @foreach ($productions as $production)

                <div class="media col-xs-12 col-md-4"><img src="{{ $production->image }}" class="media__img">
                    <a role="button"
                                       data-toggle="modal"
                                       data-target="#myModal-{{ $production->modal_id }}"
                                       class="media__link">
                        {{ $production->title }}
                    </a>
                </div>

            @endforeach

        </div>
    </section>
    <section class="contacts container"><h2 class="heading">Contact Us</h2>

            <div class="contacts__info"><?php echo $settings->column_1; ?></div>
        <form id="contacts" method="post" action="contacts.php" class="contacts__form"><input type="text"
                                                                                              title="Enter you name here"
                                                                                              placeholder="Your Name"
                                                                                              required
                                                                                              class="form__input"><input
                    type="email" title="Your email, please" placeholder="Your Email" required class="form__input"><input
                    type="tel" placeholder="Your Phone (optional)" class="form__input"><textarea
                    title="Place for your message" rows="8" placeholder="Your Message" required
                    class="form__input"></textarea><input type="submit" value="Submit"
                                                          class="form__submit button button--block"></form>
    </section>
    <div class="contacts__bg"></div>
</main><!-- End of Main-->


    @include('showcase.pages._modals')

    @stop