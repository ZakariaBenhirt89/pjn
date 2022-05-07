@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ trans('messages.Axe_employabilité') }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == 'ar' ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active @if( app()->getLocale() == 'ar' ) arab @endif" aria-current="page">{{ trans('messages.Axe_employabilité') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <!-- .end header -->
    <section class="about-section pt-50 pb-70">
        <div class="container-fluid desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-7 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="desk-mr-auto desk-pad-left-30">
                        <div style="padding-right: 30px;"  class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                            <div class="overlay-text">
                                <h3 class="font-family-3">Axe<br/> Employa<br/>bili
                                    té</h3>
                            </div>
                            <h2><span style="color: #06933e;">Axe Employabilité</span></h2>
                            <p style="text-align: justify;">L’élaboration des programmes de formation adaptés aux profils des candidats, aux besoins et aux spécificités locales représente une étape déterminante dans le processus d’accompagnement. Le programme doit comprendre des formations axées sur les besoins du marché du travail au niveau Préfectoral et Provincial, principalement pour bénéficier aux jeunes peu qualifiés.</p>
                            <p style="text-align: justify;">A l’issue de la phase d’élaboration des programmes de formation, deux types de parcours peuvent être proposés en fonction du profil des candidats, le parcours de « Formation-Employabilité » et le parcours « Formation-Insertion ».</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-5 pb-30 desk-plr-0 order-lg-1 pb-30">
                    <div class="text-center">
                        <img style="width: 95%;" src="{{ asset('assets/images/aljeser.jpeg') }}" alt="study">
                    </div>
                </div>
            </div>
            <div class="about-section pb-70 position-relative overflow-hidden">


                <div class="container">
                    <div class="section-title">
                        <h2><span style="color: #06933e;">Title</span></h2>
                        <p>Description</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div style="background: #0498e4;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                                <div class="about-card-text">
                                    <h6 style="color: #fff;background: #7bdf02;padding: 11px;border-radius: 8px;"><span style="color: #ffffff;font-size: 22px;font-weight: bold;" class="">Formation-Employabilité </span></h6>
                                    <p style="color: #fefefe;">consiste à proposer une panoplie de formations en Soft Skills destinées à renforcer les compétences des jeunes en techniques de recherche d’emploi à travers des ateliers de rédaction de CV et lettre de motivation, des sessions de préparation aux entretiens d’embauche et réseautage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div style="    background: #9a1ca8;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                                <div class="about-card-text">
                                    <h6 style="background: #74dc00;padding: 11px;border-radius: 8px;"><span style="color: #fefefe;font-size: 22px;font-weight: bold;" class="">Formation-Insertion</span></h6>
                                    <p style="color: #fff;">en plus des formations en compétences techniques, comportementales et linguistiques demandées sur le marché du travail, les jeunes chercheurs d’emploi bénéficieront d’une formation dans des métiers en croissance demandés par le marché de l’emploi.<br/><br/></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-details-content  desk-pad-right-40">


                            <p>Les jeunes ayant suivi des formations de type « Formation-Insertion » bénéficieront d’une insertion en emploi formel dans un emploi dans lequel il est déclaré par un organisme employeur affilié à la Caisse Nationale de Sécurité Sociale (CNSS). En l’occurrence d’assurer le maintien en emploi formel pour les bénéficiaires ayant été insérés.</p>
                            <p>« Créée en 1999, l’association Al Jisr a l’insigne privilège d’être placée sous la Présidence d’honneur de Sa Majesté le Roi Mohammed VI et bénéficie de la Reconnaissance d’Utilité Publique depuis 2007. Al Jisr s’est donné pour mission de construire des projets de formation et d’insertion, de consolider des ponts entre l’école et l’entreprise, afin de permettre à chaque jeune de devenir pleinement acteur de sa vie, pour préparer ensemble le Maroc de demain.>></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="about-section ">
        <div class="container-fluid desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-12 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="desk-mr-auto desk-pad-left-30">
                        <div class="about-section-title text-center section-title section-title-left section-title-shapeless section-title-lineless section-title-secondcolor position-relative">
                            <div class="overlay-text">
                                <h3 class="font-family-3">Les Indicateurs</h3>
                            </div>
                            <h2><span style="color: #06933e;">Les Indicateurs</span></h2>
                            <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <div style="background-color: aliceblue;" class="about-section  position-relative">


        <div class="container position-relative">
            <div style="padding-top: 30px;" class="record-grid">
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div class="counter">200</div>
                            <span>+</span>
                        </div>
                        <div class="record-item-text">
                            <p>Projects Finished</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div style="color: #e52a2e !important;" class="counter">199</div>
                            <span style="color: #e52a2e !important;">+</span>
                        </div>
                        <div class="record-item-text">
                            <p style="color: #e52a2e !important;">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div style="color: #00afe2 !important" class="counter">150</div>
                            <span style="color: #00afe2 !important">+</span>
                        </div>
                        <div class="record-item-text">
                            <p style="color: #00afe2 !important">Online Students</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div style="color: #fcc400 !important;" class="counter">20</div>
                            <span style="color: #fcc400 !important;">+</span>
                        </div>
                        <div class="record-item-text">
                            <p style="color: #fcc400 !important;">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="help-section pt-100">
        <div class="container">
            <div class="pb-70 border-bottom">
                <div class="section-title">
                    <h2>Explore <span>How Can</span> I Help You</h2>
                    <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
                </div>
                <div class="row">



                    <!--Carousel Gallery-->
                    <div class="carousel-gallery">
                        <div class="swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                    <a href="{{ asset('images/axe_employabilite/axe_employabilite1.jpg') }}" data-fancybox="gallery">
                                        <div class="image" style="background-image: url({{ asset('images/axe_employabilite/axe_employabilite1.jpg') }})">
                                            <div class="overlay">
                                                <em class="mdi mdi-magnify-plus"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>  <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                    <a href="{{ asset('images/axe_employabilite/axe_employabilite1.jpg') }}" data-fancybox="gallery">
                                        <div class="image" style="background-image: url({{ asset('images/axe_employabilite/axe_employabilite1.jpg') }})">
                                            <div class="overlay">
                                                <em class="mdi mdi-magnify-plus"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>  <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                    <a href="{{ asset('images/axe_employabilite/axe_employabilite1.jpg') }}" data-fancybox="gallery">
                                        <div class="image" style="background-image: url({{ asset('images/axe_employabilite/axe_employabilite1.jpg') }})">
                                            <div class="overlay">
                                                <em class="mdi mdi-magnify-plus"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                    <a href="{{ asset('images/axe_employabilite/axe_employabilite1.jpg') }}" data-fancybox="gallery">
                                        <div class="image" style="background-image: url({{ asset('images/axe_employabilite/axe_employabilite1.jpg') }})">
                                            <div class="overlay">
                                                <em class="mdi mdi-magnify-plus"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>      <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                    <a href="{{ asset('images/axe_employabilite/axe_employabilite1.jpg') }}" data-fancybox="gallery">
                                        <div class="image" style="background-image: url({{ asset('images/axe_employabilite/axe_employabilite1.jpg') }})">
                                            <div class="overlay">
                                                <em class="mdi mdi-magnify-plus"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>      <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                    <a href="{{ asset('images/axe_employabilite/axe_employabilite1.jpg') }}" data-fancybox="gallery">
                                        <div class="image" style="background-image: url({{ asset('images/axe_employabilite/axe_employabilite1.jpg') }})">
                                            <div class="overlay">
                                                <em class="mdi mdi-magnify-plus"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
{{--                                <div class="swiper-slide swiper-slide-next" style="width: 277.5px; margin-right: 20px;">--}}
{{--                                    <a href="images/_Q7B0468.jpg" data-fancybox="gallery">--}}
{{--                                        <div class="image" style="background-image: url(http://localhost:8000/images/_Q7B0468.jpg)">--}}
{{--                                            <div class="overlay">--}}
{{--                                                <em class="mdi mdi-magnify-plus"></em>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}


                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <!--#Carousel Gallery-->



                    <!-- /.gallery-slider -->


                </div>
            </div>
        </div>
    </section>
    <section class="course-section p-tb-100 position-relative bg-off-white">
        <div class="container">
            <div class="section-title section-title-shapeless section-title-lineless section-title-thirdcolor">

                <h2><span>Les Offres d'emploi</span></h2>
                <p>Description !!</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 pb-30">
                    <div class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb course-card-thumb-thirdcolor">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li class="course-filter-thirdcolor">
                                    <button class="btn">Voir Plus</button>
                                </li>
                                <li class="course-filter-success">
                                    <button class="btn">Postuler</button>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="#" class="btn main-btn btn-thirdcolor">Voir Tous Les Offres d'emploi <i class="flaticon-edit"></i></a>
            </div>
        </div>
    </section>
    <section class="offer-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-5">
                    <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">
                        <small class="font-family-3">Succès Story</small>
                        <h2>Voir Tous Les  <span>Succès Story</span></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 pb-30">
                    <div class="about-feedback">
                        <p class="about-feedback-paragraph">Minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in magnam aliquam quaerat voluptatem</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 pb-30">
                    <div class="offer-card offer-card-thirdcolor">
                        <div class="offer-card-inner">
                            <div class="offer-card-thumb">
                                <img src="assets/images/shapes/offer-shape-1.png" alt="shape">
                            </div>
                            <div class="offer-card-content">
                                <h3>Business Studies</h3>
                                <p>Skills veniam, quis nosttation ullamco laboris nsiprhederit in magnaalquaquaerat</p>
                            </div>
                            <a href="#" class="offer-redirect-link"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pb-30">
                    <div class="offer-card offer-card-thirdcolor">
                        <div class="offer-card-inner">
                            <div class="offer-card-thumb">
                                <img src="assets/images/shapes/offer-shape-2.png" alt="shape">
                            </div>
                            <div class="offer-card-content">
                                <h3>Web Development</h3>
                                <p>Design veniam, quis nosttation ullamco laboris nsiprhederit in magnaalquaquaerat</p>
                            </div>
                            <a href="#" class="offer-redirect-link"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pb-30">
                    <div class="offer-card offer-card-thirdcolor">
                        <div class="offer-card-inner">
                            <div class="offer-card-thumb">
                                <img src="assets/images/shapes/offer-shape-3.png" alt="shape">
                            </div>
                            <div class="offer-card-content">
                                <h3>Idea Discussion</h3>
                                <p>Planning veniam, quis nosttation ullamco laboris nsiprhederit in magnaalquaquaerat</p>
                            </div>
                            <a href="#" class="offer-redirect-link"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pb-30">
                    <div class="offer-card offer-card-thirdcolor">
                        <div class="offer-card-inner">
                            <div class="offer-card-thumb">
                                <img src="assets/images/shapes/offer-shape-4.png" alt="shape">
                            </div>
                            <div class="offer-card-content">
                                <h3>Graphic Design</h3>
                                <p>Illustration veniam, quis nosttation ullamco laboris nsiprhederit in magnaalquaquaerat</p>
                            </div>
                            <a href="#" class="offer-redirect-link"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">



        /*start gellery*/
        $(function(){

            var swiper = new Swiper('.carousel-gallery .swiper-container', {
                effect: 'slide',
                speed: 900,
                slidesPerView: 4,
                spaceBetween: 20,
                simulateTouch: true,
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.carousel-gallery .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    // when window width is <= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5
                    },
                    // when window width is <= 480px
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    // when window width is <= 640px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            });



        });

    </script>
@endsection
