@extends('showcase.layout')

@section('main-nav')
    <ul id="main-nav" class="nav-menu col-sm-12 col-md-9">
        <li class="nav-menu__item"><a href="services">Services</a></li>
        <li class="nav-menu__item active"><a href="clients">Clients</a></li>
        <li class="nav-menu__item"><a href="about">About Us</a></li>
        <li class="nav-menu__item"><a href="mobile">Mobile Technology</a></li>
    </ul>
    @stop


    @section('content')



<!-- Main-->
<main>
    <section class="info container"><h1 class="heading">About GrandStand</h1>

        <div class="row">
            <div class="info__text col-md-8 col-md-offset-2">Benjamin Franklin, inventor, statesman, writer, publisher
                and economist relates in his autobiography that early in his life he decided to focus on arriving at
                moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a
                summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make
                these virtues a habit, Franklin can up with a method to grade himself on his daily actions. In a journal
                he drew a table with a row for every virtue and a column for every day of the week. Every time he made a
                fault, he made a mark in the appropriate column.
            </div>
        </div>
    </section>
    <section class="team container"><h2 class="heading">Our Talented Team</h2>

        <div class="team__members row">
            <div class="member col-md-3"><img src="images/team-1.jpg" class="member__photo">

                <div class="member__bio">
                    <div class="bio__wrapper">
                        <div class="bio__name">Anthony Casalena</div>
                        <div class="bio__position">Video Prduction</div>
                    </div>
                </div>
            </div>
            <div class="member col-md-3"><img src="images/team-2.jpg" class="member__photo">

                <div class="member__bio">
                    <div class="bio__wrapper">
                        <div class="bio__name">Andrew Bartholomew</div>
                        <div class="bio__position">Video Prduction</div>
                    </div>
                </div>
            </div>
            <div class="member col-md-3"><img src="images/team-3.jpg" class="member__photo">

                <div class="member__bio">
                    <div class="bio__wrapper">
                        <div class="bio__name">John Colton</div>
                        <div class="bio__position">YouTube Producer</div>
                    </div>
                </div>
            </div>
            <div class="member col-md-3"><img src="images/team-4.jpg" class="member__photo">

                <div class="member__bio">
                    <div class="bio__wrapper">
                        <div class="bio__name">Ali Kazemi</div>
                        <div class="bio__position">YouTube Producer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content container"><h2 class="heading">Content Production</h2>

        <div class="content__media row">
            <div class="media col-xs-12 col-md-4"><img src="images/content-1.jpg" class="media__img"><a role="button"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#myModal-1"
                                                                                                        class="media__link">The
                    3 Golden Rules Professional Graphic Designers Don’t Want You To Know About</a></div>
            <div class="media col-xs-12 col-md-4"><img src="images/content-2.jpg" class="media__img"><a role="button"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#myModal-1"
                                                                                                        class="media__link">The
                    Power Of Notes</a></div>
            <div class="media col-xs-12 col-md-4"><img src="images/content-3.jpg" class="media__img"><a role="button"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#myModal-1"
                                                                                                        class="media__link">5
                    Reasons To Purchase Desktop Computers</a></div>
        </div>
    </section>
    <section class="contacts container"><h2 class="heading">Contact Us</h2>

        <div class="contacts__info">You can reach outto us: by phone <span class="text-phone">917.648.0535</span><br>by
            email <span class="text-email">info@grandstand.nyc</span></div>
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