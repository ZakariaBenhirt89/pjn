@extends('landing_page.layout.layout_app')
<!-- header -->
@section('content')
<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div style="max-width:none;" class="header-page-content">
            <h1 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ trans('messages.Axe_Entrepreneuriat') }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="@if( app()->getLocale() == 'ar' ) arab @endif" style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                    <li class="breadcrumb-item active @if( app()->getLocale() == 'ar' ) arab @endif" aria-current="page">{{ trans('messages.Axe_Entrepreneuriat') }}</li>
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
                            <h3 class="font-family-3">Axe
                                <br/>Appui à <br/>
                                l’Entrepr<br/>
                                eneuriat<br/>
                                des Jeunes</h3>
                        </div>
                        <h2><span style="color: #06933e;">Axe Appui à l’Entrepreneuriat des Jeunes</span></h2>
                        <p style="text-align: justify;">L’appui à l’entrepreneuriat chez les jeunes vise à promouvoir et développer la culture de l’entrepreneuriat chez les jeunes et encourager les concours d’idées dans les secteurs porteurs et ce à travers :</p>
                        <p style="text-align: justify;">L’appui à la création d’une nouvelle génération de projets générateurs de revenu notamment des petites et très petites entreprises </p>
                        <p style="text-align: justify;">La mise en œuvre d’une offre d’appui couvrant de façon homogène et continue tout le processus d’appui à l’entrepreneuriat (appui pré et post création).</p>
                        <p style="text-align: justify;">L’Amélioration de revenu vise à apporter un accompagnement au profit des porteurs de projets issus de l’analyse des chaines de valeur et des coopératives ainsi que les autres organisations professionnelles œuvrant dans le domaine de l’économie sociale et solidaire.</p>
                        <p style="text-align: justify;">L’objectif consiste à développer les perspectives des activités économiques locales issues des résultats des analyses de chaines de valeurs à travers l’accompagnement des porteurs de projets, des structures existantes ayant un fort potentiel de croissance et créant des opportunités d’emploi pour les jeunes ou des structures nouvellement créées répondant aux critères de création de valeur.</p>

                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-5 pb-30 desk-plr-0 order-lg-1 pb-30">
                <div class="text-center">
                    <img style="width: 95%;" src="{{ asset('images/hrj.png') }}" alt="study">
                </div>
            </div>
        </div>
        <div class="about-section pb-70 position-relative overflow-hidden">
            <div class="background-shapes">
                <div class="background-shape-item">
                    <img src="assets/images/shapes/curved-line.png" alt="line">
                </div>
                <div class="background-shape-item">
                    <img src="assets/images/shapes/half-circle-shape.png" alt="line">
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div style="max-width: 100% !important;" class="section-title mt-15">
                            <h2><span>Axe de soutien à l’économie sociale et solidaire </span>  </h2>
                            <p>Des mesures d’accompagnement spécifiques sont mises en œuvre pour appuyer les coopératives, les groupements d’intérêt économique et les TPMEs existantes et les accompagner dans leur développement à travers : </p>
                        </div>

                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 pb-30">

                        <div class="about-item-card about-item-card-thirdcolor">
                            <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                            <div class="about-card-text">
                                <h6><span style="color: #06933e;" class="">Appui Technique </span></h6>
                                <p>concerne d’apporter de l’aide lors de la création des coopératives ou TPMEs porteurs de projets à fort impact, ou la mobilisation d’une assistance technique pour la labélisation et la certification de qualité, et ce de concerte avec les départements ministériels concernés.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 pb-30">
                        <div class="about-item-card about-item-card-thirdcolor">
                            <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                            <div class="about-card-text">
                                <h6><span style="color: #06933e;" class=""> Appui Financier</span></h6>
                                <p>destinée à appuyer le processus d'exploitation des coopératives, GIE et TPMEs afin de les inciter à la création de l’emploi et de l’auto-emploi, en particulier pour les jeunes.<br/><br/></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div style="max-width: 100% !important;" class="section-title mt-15">
                            <h2><span>Axe de soutien aux projets générateurs de revenu </span>  </h2>
                            <p>L’axe de soutien aux projets générateurs de revenu prévoit l’organisation d’un concours d’idée inspiré des Hackathons en substitution des appels à projets classiques. 14 Il s'agit en l'occurrence de mobiliser les jeunes dans un esprit de concours d’idées et de faire émerger des projets innovants qui répondent à des problématiques de développement local en relation avec les chaines de valeurs. Le concours d’idée concerne  </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4 col-lg-4 pb-30">
                            <div class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-resume"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les coopératives et leurs unions (conforme à la loi 112-12) </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 pb-30">
                            <div class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les GIE (le Groupement d’intérêt économique) </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 pb-30">
                            <div class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les TPMEs (Société de Personnes et SARL)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3> Les personnes disposant du statut<br/> « Auto-entrepreneurs » </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>  Les jeunes âgé (e)s de 18-45 ans</h3>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div  class="text-details-content  desk-pad-right-40">


                        <p>L’Heure Joyeuse est une association à but non lucratif créée en 1959 ; reconnue d’utilité publique, elle est engagée pour la lutte contre l’exclusion sociale et professionnelle des personnes en situation défavorisée. Elle a pour mission d’œuvrer, à travers l’Education, l’employabilité et l’entrepreneuriat, à l’inclusion socio-économique des jeunes en situation vulnérable, en plaçant l’innovation sociale au cœur de son action. Sa vision est de Donner aux jeunes l’opportunité de s’accomplir et trouver leur voie, et de façonner leur avenir avec dignité. Composée aujourd’hui de 10 centres, au siège - Belvédère, la plateforme - Sidi-Maarouf, Dar Bouazza - la plateforme des jeunes Nouaceur, l’antenne et CFA – Mkanssa, l’antenne et CFA Bouskoura, à l’antenne – Oulad SALAH, la Plateforme des jeunes - BENMSIK, la plateforme des Jeunes - Ain Sbaa et la plateforme des Jeunes - Roches Noires tous situés dans la région du Grand Casablanca.</p>

                    </div>


                    <div style="max-width: 100% !important;" class="section-title mt-15">
                        <h2><span>L’Heure Joyeuse est organisée en 4 pôles :</span>  </h2>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                <div class="about-card-icon">
                                    <i class="flaticon-book-of-black-cover-closed"></i>  <!-- for background icon -->
                                    <i class="flaticon-mortarboard"></i>  <!-- for foreground icon -->
                                </div>
                                <div class="about-card-text">
                                    <h6><span style="color: #06933e;" class="">1/Pôle Education </span></h6>
                                    <p>
                                        Ce pôle a pour objectif d‘assurer un accompagnement éducatif, pédagogique et scolaire adapté aux besoins des enfants peu ou pas scolarisés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                <div class="about-card-icon">
                                    <i class="flaticon-laptop"></i>  <!-- for background icon -->
                                    <i class="flaticon-web"></i>  <!-- for foreground icon -->
                                </div>
                                <div class="about-card-text">
                                    <h6><span style="color: #06933e;" class="">2/ Pôle Employabilité </span></h6>
                                    <p>Ce pôle a pour objectif de renforcer l’employabilité des jeunes en situation de NEET, peu ou qualifiés. Deux programmes phares sont mis en place au sein de ce pôle, à savoir : La COIP : Cellule d’orientation et d’insertion professionnelle et la Formation Professionnelle.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                <div class="about-card-icon">
                                    <i class="flaticon-pencil"></i>  <!-- for background icon -->
                                    <i class="flaticon-agenda"></i>  <!-- for foreground icon -->
                                </div>
                                <div class="about-card-text">
                                    <h6><span style="color: #06933e;" class="">3/ Pôle Entrepreneuiat </span></h6>
                                    <p>Ce pôle a pour objectif d’accompagner les jeunes porteurs d’idées de projets ou de projets informels dans le lancement et/ou la structuration de leurs projets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                <div class="about-card-icon">
                                    <i class="flaticon-monitor"></i>  <!-- for background icon -->
                                    <i class="flaticon-address-book"></i>  <!-- for foreground icon -->
                                </div>
                                <div class="about-card-text">
                                    <h6><span style="color: #06933e;" class="">4/Pôle Engagement Citoyen</span></h6>
                                    <p>Ce pôle a été créé avec objectif principal de réaffirmer l’engagement social et sociétal continu de l’Heure Joyeuse, les programmes que met en place ce pôle sont : la sensibilisation aux ODD, l’accompagnement des associations et le plaidoyer.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</section>
<section class="about-section">
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
<div class="about-section  pb-70 position-relative">


    <div class="container position-relative">
        <div class="record-grid">
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
                        <div class="counter">199</div>
                        <span>+</span>
                    </div>
                    <div class="record-item-text">
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>
            <div class="record-grid-item">
                <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                    <div class="record-item-number">
                        <div class="counter">150</div>
                        <span>+</span>
                    </div>
                    <div class="record-item-text">
                        <p>Online Students</p>
                    </div>
                </div>
            </div>
            <div class="record-grid-item">
                <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                    <div class="record-item-number">
                        <div class="counter">20</div>
                        <span>+</span>
                    </div>
                    <div class="record-item-text">
                        <p>Years of Experience</p>
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
                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-297.5px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-prev" style="width: 277.5px; margin-right: 20px;">
                                <a href="{{ asset('images/axe_entrepreneuriat/axe_entrepreneuriat1.jpg') }}" data-fancybox="gallery">
                                    <div class="image" style="background-image: url({{ asset('images/axe_entrepreneuriat/axe_entrepreneuriat1.jpg') }})">
                                        <div class="overlay">
                                            <em class="mdi mdi-magnify-plus"></em>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;">
                                <a href="{{ asset('images/axe_entrepreneuriat/axe_entrepreneuriat2.jpg') }}" data-fancybox="gallery">
                                    <div class="image" style="background-image: url({{ asset('images/axe_entrepreneuriat/axe_entrepreneuriat2.jpg') }})">
                                        <div class="overlay">
                                            <em class="mdi mdi-magnify-plus"></em>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                <!--#Carousel Gallery-->



                <!-- /.gallery-slider -->


            </div>
        </div>
    </div>
</section>
<div class="terms-policy-section p-tb-100">
    <div class="container">
        <div class="section-title">
            <h2><span>Concours D’idée De Projet</span></h2>
            <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
        </div>
        <div class="text-details-content ">
            <div>
                <img src="images/brands-people-Ax8IA8GAjVg-unsplash.jpg" alt="terms">
            </div>
            <p>This Privacy Policy contents was last updated on January 1, 2020.</p>
            <h3 style="text-align: center;">برنامج تحسين الدخل و الادماج الاقتصادي</h3>
            <ol>
                <li>Icta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur     magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est sit amet luptatem. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</li>
                <li>Icta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur     magni dolores eos qui ratione voluptatem sequi nesciunt. </li>
                <li>Cta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur     magni dolores eos qui ratione voluptatem sequi nesciuntLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem..</li>
            </ol>

            <h3 style="text-align: center;" class="mb-4">سلاسل القيم الواعدة بالعمالة حسب القطاع</h3>
              </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-12 pb-30">
                <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                    <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                    <div class="about-card-icon">
                        <i class="flaticon-book-of-black-cover-closed"></i>  <!-- for background icon -->
                        <i class="flaticon-mortarboard"></i>  <!-- for foreground icon -->
                    </div>
                    <div class="about-card-text">
                        <h6><span style="color: #06933e;" class="">ملف طلب الدعم </span></h6>
                        <p>
                            Ce pôle a pour objectif d‘assurer un accompagnement éducatif, pédagogique et scolaire adapté aux besoins des enfants peu ou pas scolarisés.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 pb-30">
                <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                    <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                    <div class="about-card-icon">
                        <i class="flaticon-book-of-black-cover-closed"></i>  <!-- for background icon -->
                        <i class="flaticon-mortarboard"></i>  <!-- for foreground icon -->
                    </div>
                    <div class="about-card-text">
                        <h6><span style="color: #06933e;" class="">شروط المشاركة </span></h6>
                        <p>
                            Ce pôle a pour objectif d‘assurer un accompagnement éducatif, pédagogique et scolaire adapté aux besoins des enfants peu ou pas scolarisés.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 pb-30">
                <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                    <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                    <div class="about-card-icon">
                        <i class="flaticon-laptop"></i>  <!-- for background icon -->
                        <i class="flaticon-web"></i>  <!-- for foreground icon -->
                    </div>
                    <div class="about-card-text">
                        <h6><span style="color: #06933e;" class="">الفئة المستهدفة </span></h6>
                        <p>Ce pôle a pour objectif de renforcer l’employabilité des jeunes en situation de NEET, peu ou qualifiés. Deux programmes phares sont mis en place au sein de ce pôle, à savoir : La COIP : Cellule d’orientation et d’insertion professionnelle et la Formation Professionnelle.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 pb-30">
                <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                    <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                    <div class="about-card-icon">
                        <i class="flaticon-pencil"></i>  <!-- for background icon -->
                        <i class="flaticon-agenda"></i>  <!-- for foreground icon -->
                    </div>
                    <div class="about-card-text">
                        <h6><span style="color: #06933e;" class="">دعم الأفكار المنتقاة</span></h6>
                        <p>Ce pôle a pour objectif d’accompagner les jeunes porteurs d’idées de projets ou de projets informels dans le lancement et/ou la structuration de leurs projets.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="offer-section pt-100 pb-70">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-lg-5">
                <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">
                    <small class="font-family-3">Entrepreneurs</small>
                    <h2>Voir Tous Les  <span>Entrepreneurs</span></h2>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 pb-30">
                <div class="about-feedback">
                    <p class="about-feedback-paragraph">Minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in magnam aliquam quaerat voluptatem</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0508.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">John Andre</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0512.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Olivia Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0514.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Richard Clark</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0518.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Isabella Tomas</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0519.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Amelia Disuza</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0523.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Amelia Disuza</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0525.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0527.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0529.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0531.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0535.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0538.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0540.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0543.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0544.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="#"><img src="images/_Q7B0550.jpg" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3><a href="#">Charlotte Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
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


