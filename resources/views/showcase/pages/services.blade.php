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
            <div class="trigger trigger--straight col-md-4"><img src="images/icons/how-1.png" alt=""
                                                                 class="trigger__icon">

                <div class="trigger__header">Sports <br>Representation</div>
                <div class="clearfix hidden-lg-up"></div>
                <ol class="trigger__list">
                    <li><span>Scouting and development</span></li>
                    <li><span>Recruitment and draft preparations</span></li>
                    <li><span>Contract negotiations</span></li>
                    <li><span>Player placement</span></li>
                </ol>
            </div>
            <div class="trigger trigger--straight col-md-4"><img src="images/icons/how-2.png" alt=""
                                                                 class="trigger__icon">

                <div class="trigger__header">Marketing & Brand Development</div>
                <div class="clearfix hidden-lg-up"></div>
                <ol class="trigger__list">
                    <li><span>Endorsements and sponsorship deals</span></li>
                    <li><span>Public relations and communications</span></li>
                    <li><span>Social media and digital content strategy</span></li>
                </ol>
            </div>
            <div class="trigger trigger--straight col-md-4"><img src="images/icons/how-3.png" alt=""
                                                                 class="trigger__icon">

                <div class="trigger__header">Business & Professional Services</div>
                <div class="clearfix hidden-lg-up"></div>
                <ol class="trigger__list">
                    <li><span>Wills, trusts and estates, and tax planning</span></li>
                    <li><span>Investment opportunities including management and capital placement</span></li>
                    <li><span>Lifestyle concierge and personal event planning</span></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="about"><h2 class="heading">Representation</h2>

        <div class="container">
            <div class="row">
                <div class="about__text col-md-8 col-md-offset-2"> Our experienced legal team negotiates and and secures
                    even the smallest details on your behalf during the negotiation process, with teams and brands.
                    Whether we discuss terms in labor and employment agreements, or evaluate broadcastin, eondorsement,
                    and publishing deals,, Grandstand is the full service one stop shop you are looking for.
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
                    <div class="descr__heading">Recruitment <br>& Skill Dev</div>
                    <div class="descr__text">Acres of Diamonds… you’ve read the famous story, or at least had it related
                        to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm
                        and hikes off over the horizon, never to be heard from again.
                    </div>
                </div>
                <div class="descr col-md-3">
                    <div class="descr__heading">Draft Strategy</div>
                    <div class="descr__text descr__text--line-down">Have you ever heard the expression, “Do not count
                        your chickens before they hatch?” Maybe an older, wiser individual would tell you this to keep
                        you from getting ahead of yourself. Like buying a new car before you actually got that new job.
                    </div>
                </div>
                <div class="descr col-md-3">
                    <div class="descr__heading">Contract Negotiations</div>
                    <div class="descr__text">Any time we start something new it is exciting and we are very motivated
                        and committed. As time goes by, however, the burst of enthusiasm can wane as the reality of how
                        much work is going to be involved kicks in.
                    </div>
                </div>
                <div class="descr col-md-3">
                    <div class="descr__heading">Player Placement</div>
                    <div class="descr__text descr__text--line-down">I am upset. At this moment, as I sit here typing
                        this up, I am truly upset. Something happened a little while ago. I got into an argument and I
                        am now reaping the results of that. It’s a true bounty of results, I can tell you.
                    </div>
                </div>
            </div>
            <section class="marketing">
                <div class="centered"><h2 class="heading heading--border">Marketing & Branding</h2></div>
                <div class="row">
                    <div class="marketing__text col-xs-12 col-md-8 col-md-offset-2">Take it on a Thursday or Friday,
                        when the big Sunday advertisements are in process of construction, the scene is remarkably
                        lively, and the man at the head of the advertising department has plenty occasions to exercise
                        his ready cleverness and level-headedness.
                    </div>
                </div>
                <div class="marketing__text-blocks row">
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">Demographic Based Market Research</div>
                    </div>
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">Concept development & strategy</div>
                    </div>
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">Endorsements</div>
                    </div>
                    <div class="text-block col-xs-12 col-lg-3">
                        <div class="text-block__descr">PR & Communicatons</div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="info info--nopadding container"><h2 class="heading">Business & Professional Services</h2>

        <div class="row">
            <div class="info__text col-xs-12 col-md-8 col-md-offset-2">Our experienced legal team negotiates and secures
                even the smallest details on your behalf during the negotiation process, with THE teams and brands we do
                business with. Whether your needs are related to terms in labor and employment agreements, broadcasting,
                - eondorsement,- or publishing deals, Grandstand is the full service one stop shop you are looking for,
                allowing you to stay focussed on developing your gifts and your skill, and perform to the best of your
                ability come game time.
            </div>
        </div>
        <div class="info__blocks row">
            <div class="block col-xs-12 col-sm-6 col-md-4">
                <div class="block__bg block__bg--legal">
                    <div class="block__text">Legal<br>Services</div>
                </div>
            </div>
            <div class="block col-xs-12 col-sm-6 col-md-4">
                <div class="block__bg block__bg--financial">
                    <div class="block__text">Financial <br>Services</div>
                </div>
            </div>
            <div class="block col-xs-12 col-sm-6 col-md-4">
                <div class="block__bg block__bg--concierge">
                    <div class="block__text">Concierge <br> & Philantrophy</div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End of Main-->

@stop