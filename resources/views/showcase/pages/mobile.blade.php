@extends('showcase.layout')

@section('additional-header-classes')
    <?php echo 'header--small header--has-second-menu'; ?>
@stop

@section('main-nav')

    @include('showcase.pages._main-nav')

@stop


@section('content')

<main>
    <section class="showcase showcase--left showcase__bg--1 wow fadeInLeft">
        <div class="container">
            <div class="row">
                <div class="col-md-8 showcase__text--small"><h2 class="heading">The number 1 secret of success</h2>

                    <div class="info__text">The Law – Everything is energy. Choose to believe this law. You must accept
                        it. Your thoughts, your feelings, what you focus on are all energy. Do you understand that you
                        have created the person you have become and created the quality of life you have.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showcase showcase--center showcase__bg--2 wow fadeInRight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-3"><h2 class="heading">Know yourself your inner power</h2>

                    <div class="info__text">You can change any and everything in my life by simply changing yourself.
                        This puts me in the driving seat of my life and makes my life my responsibility. It eliminates
                        fear and apprehension for I know that no matter what life gives me I can always get to the next
                        level and take the next step by simply making the internal shift in my own psychology.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content container"><h2 class="heading">What our clients are saying</h2>

        <div class="content__media row">
            <div class="media media--circle col-xs-12 col-md-4 wow slideInLeft"><img src="images/reviews-1.png"
                                                                                     class="media__img"><a href="#"
                                                                                                           class="media__link">When
                    fans participant in our camps and tournaments</a></div>
            <div class="media media--circle col-xs-12 col-md-4 wow slideInUp"><img src="images/reviews-2.png"
                                                                                   class="media__img"><a href="#"
                                                                                                         class="media__link">When
                    our clients use social media</a></div>
            <div class="media media--circle col-xs-12 col-md-4 wow slideInRight"><img src="images/reviews-3.png"
                                                                                      class="media__img"><a href="#"
                                                                                                            class="media__link">Wen
                    we publish our digital content</a></div>
        </div>
    </section>
    <section class="pros"><h2 class="heading">Your brand scores<img src="images/icons/100.png" alt=""
                                                                    class="brand-score"></h2>

        <div class="container">
            <div class="pros__triggers row">
                <div class="trigger trigger--brand col-md-6"><img src="images/icons/scores-1.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Tap right into the energy and enthusiasm  of grandstand and sports
                        fans.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-6"><img src="images/icons/scores-2.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Brand integration with the successful moments and achievements of our
                        client.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-6"><img src="images/icons/scores-3.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Targeted promotions that enhance or improve your business bottleline.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-6"><img src="images/icons/scores-4.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Easy to use technology that helps you control. All parameters of your
                        promotions and message on social media.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-6"><img src="images/icons/scores-5.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Vibrant fan engagement with context on the rapidly growing mobile
                        platform.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-6"><img src="images/icons/scores-6.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Consistent promotion of your brand and offerings across multiple channels
                        including live properties.
                    </div>
                </div>
            </div>
            <h2 class="heading">And funs win too</h2>

            <div class="pros__triggers row wow bounceInUp">
                <div class="trigger trigger--brand col-md-3"><img src="images/icons/steps-1.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">More engagement with your favorite athletes and companies.</div>
                </div>
                <div class="trigger trigger--brand col-md-3"><img src="images/icons/steps-2.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Be prefered customer of premier and selective group of brands and
                        companies.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-3"><img src="images/icons/steps-3.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">Brag and share your excitement and offers with friends on social media.
                    </div>
                </div>
                <div class="trigger trigger--brand col-md-3"><img src="images/icons/steps-4.png" alt=""
                                                                  class="trigger__icon">

                    <div class="trigger__text">First access to new and exclusive content.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-it-works container"><h2 class="heading">How it works</h2>

        <div class="how-it-works__triggers row wow flipInX">
            <div class="trigger trigger--how-it-works col-md-3">
                <div class="trigger__icon-wrapper"><img src="images/icons/works-1.jpg" alt="" class="trigger__icon">
                </div>
                <div class="trigger__header">Download App</div>
            </div>
            <div class="trigger trigger--how-it-works col-md-3">
                <div class="trigger__icon-wrapper"><img src="images/icons/works-2.jpg" alt="" class="trigger__icon">
                </div>
                <div class="trigger__header">Take a Picture</div>
            </div>
            <div class="trigger trigger--how-it-works col-md-3">
                <div class="trigger__icon-wrapper"><img src="images/icons/works-3.jpg" alt="" class="trigger__icon">
                </div>
                <div class="trigger__header">Share on Social Media</div>
            </div>
            <div class="trigger trigger--how-it-works col-md-3">
                <div class="trigger__icon-wrapper"><img src="images/icons/works-4.jpg" alt="" class="trigger__icon">
                </div>
                <div class="trigger__header">Get Access to
                    <mark>GRANDSTAND</mark>
                </div>
            </div>
        </div>
    </section>
</main><!-- End of Main-->

@stop
