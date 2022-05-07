
@extends('landing_page.layout.layout_app')

@section('content')
    <header class="header-bg-three">
        <div class="container-fluid">
            <div style="margin-top: -71px;" class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div style="margin-left: 39px;" class="header-content header-content-full desk-pad-right-30">
                        <div class="header-content-text">
                            <h1 style="color: #fcc400;font-size: 52px; font-family: 'Avenir', sans-serif !important;">Plateforme des jeunes Nouaceur</h1>
                            <p style="margin-bottom: 15px;">We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
                            <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 videio">
                    <div class="card">
                        <div class="card-play"></div>
                        <div class="card-video">
                            <iframe id="video" src="https://www.youtube.com/embed/JE9z-gy4De4?enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- .end header -->
    <section class="about-section pt-100 pb-70">
        <div class="container-fluid desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="max-600 desk-mr-auto desk-pad-left-30">
                        <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-secondcolor position-relative">
                            <div class="overlay-text">
                                <h3 class="font-family-3">Jeunes de Nouaceur</h3>
                            </div>
                            <h2>La Plateforme Des <span style="color:#06933e !important;">Jeunes de Nouaceur</span></h2>
                            <p>Un projet royal, réalisé dans le cadre du programme III de l’INDH : Amélioration du revenu et inclusion économique des jeunes qui vise à contribuer à l’amélioration de la situation économique et sociale des populations défavorisées de la Province de Nouaceur,</p>
                            <p>notamment les jeunes par l’accompagnement à l’emploi, à l’entrepreneuriat ainsi qu’à l’appui aux projets s’inscrivant dans l’économie sociale et solidaire.</p>
                        </div>
                        <div class="section-button-group">
                            <div class="section-button-item">
                                <a href="about-us.html" class="btn main-btn-2 btn-secondcolor">LEARN MORE <i class="flaticon-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-1 pb-30">
                    <div class="text-center">
                        <img style="width: 73% !important;position: relative;top: 13px;" src="{{ asset('images/logo_landing.png') }}" alt="cook">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section -->

    <!-- .end about-section -->
    <section class="help-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>La Plateforme joue aujourd’hui un <span>rôle</span> de : </h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div class="help-card help-card-center">
                        <div class="help-card-thumb">
                            <img width="40" src="{{ asset('images/espaces_daccueil.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Espaces d’Accueil, d’Ecoute & d’orientation</h3>
                            <p>Accueil des visiteurs,Ecoute et recueil des besoins,Conseil et orientation</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div class="help-card help-card-center">
                        <div class="help-card-thumb">
                           <img width="40" src="{{ asset('images/espace_de_formation.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Espace de formation en Employabilité</h3>
                            <p>Soft Skills,Placement,Suivi</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div class="help-card help-card-center">
                        <div class="help-card-thumb">
                            <img width="40" src="{{ asset('images/accompagnement.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Espace de formation et Accompagnement en Entrepreneuriat/Economie sociale et solidaire.</h3>
                            <p>Sourcing terrain,Conseil et accompagnement,Suivi des porteurs de projets</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div class="help-card help-card-center">
                        <div class="help-card-thumb">
                            <img width="40" src="{{ asset('images/rencontre.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Hub de rencontre et d’échange</h3>
                            <p>Renforcement des acteurs locaux ,Développement de partenariat ,Organisation des événements</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="course-section pt-80  position-relative">
        <div class="section-title section-title-shapeless section-title-lineless section-title-secondcolor">
            <small class="font-family-3">Online Indicateurs</small>
            <h2>Les <span>Indicateurs</span> des réalisations</h2>
        </div>
        <div class="about-section  pb-70 position-relative">

            <div class="container position-relative">
                <div class="record-grid">
                    <div class="record-grid-item">
                        <div class="record-grid-item-inner">
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
                        <div class="record-grid-item-inner">
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
                        <div class="record-grid-item-inner">
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
                        <div class="record-grid-item-inner">
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
    </section>

    <!-- about-section -->
    <section class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 pb-30">
                    <div class="section-title section-title-left text-start">
                        <h2>Avec qui allez-vous <span style="color: #06933e;"> apprendre ??</span> </h2>
                        <p>Vous pouvez répertorier ici les marques de vos partenaires ou de vos instructeurs pour montrer la réputation de votre site et les étudiants peuvent vous faire davantage confiance.</p>
                    </div>
                    <div class="faq-accordion">
                        <div class="header-button-item">
                            <a style="background-color: #06933e;" href="#" class="btn main-btn-2 btn-secondcolor">Voir tous les partenaires <i style="color: #06933e;" class="flaticon-edit"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 pb-30">
                    <div class="text-center">
                        <img style="width: 100% !important;position: relative;top: 13px;" src="{{ asset('images/_Q7B0264.jpg') }}" alt="cook">
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="course-section pt-100 pb-70">
        <div class="container">
            <div class="section-title-group">
                <div class="section-title section-title-shapeless">
                    <h2>Nos prochains événements éducatifs <span>Cours en ligne</span></h2>
                </div>
                <a href="#" class="btn main-btn">VOIR TOUS LES ÉVÉNEMENTS <i class="flaticon-edit"></i></a>
            </div>
            <div class="row">
                @foreach($actualites as $actualite)
                <div class="col-12 col-md-6 col-lg-4 pb-30">
                    <div class="course-flat-card">
                        <div class="course-card-thumb">
                            <a href="{{ route('single.actualite',$actualite->id) }}"><img src="images/actualite/{{ $actualite->photo }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <ul class="course-location">
                                <li><i class="flaticon-placeholder"></i> Plateforme des Jeunes Nouaceur </li>
                            </ul>
                            <h3 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ $actualite->{'title_'.app()->getLocale()} }}</h3>
                            <p><a href="{{ route('single.actualite',$actualite->id) }}" class="redirect-link @if( app()->getLocale() == 'ar' ) arab  @endif">{{ trans('messages.actulite.title') }}<i class="flaticon-right-arrow"></i></a></p>
                        </div>
                        <ul class="course-filter-list">
                            <li class="course-filter-danger">{{ $actualite->created_at }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- .end course-section -->
    <!-- partner-section -->

    <section class="about-section pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12 pb-30">
                    <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">

                        <h2 style="text-align: center;"><span style="color: #06933e">Plateforme des Jeunes Nouaceur</span></h2>
                    </div>

                </div>
                <div class="col-12 col-lg-12 pb-30">
                    <div class="about-feedback">
                        <p class="about-feedback-paragraph">Une Plateforme Provinciale Physique dédiée aux jeunes : </p>
                        <p class="about-feedback-paragraph">« Plateformes des jeunes / Carrefour des jeunes » créée au niveau de DAR BOUAZZA avec 4 antennes d’Accueil, d’Ecoute et D’Orientation au niveau de Lemkanssa, Bouskoura, Oulad Salah et la Nouaceur ; Pour accueillir les jeunes en quête d’opportunités. Réparti en trois axes :</p>
                    </div>
                </div>
                <div class="col-12 col-lg-12 pb-30">
                    <div class="about-section  position-relative overflow-hidden">
                        <div class="background-shapes">
                            <div class="background-shape-item">
                                <img src="assets/images/shapes/curved-line.png" alt="line">
                            </div>
                            <div class="background-shape-item">
                                <img src="assets/images/shapes/half-circle-shape.png" alt="line">
                            </div>
                        </div>

                        <div class="">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-lg-4 pb-30">
                                    <div style="height: 100%;"  class="about-item-card about-item-card-thirdcolor">
                                        <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                        <div class="about-card-icon">
                                            <i class="flaticon-book-of-black-cover-closed"></i>  <!-- for background icon -->
                                            <i class="flaticon-mortarboard"></i>  <!-- for foreground icon -->
                                        </div>
                                        <div class="about-card-text">
                                            <h6><span style="color: #06933e;" class="">Axe gestion</span></h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-4 pb-30">
                                    <div style="height: 100%;"  class="about-item-card about-item-card-thirdcolor">

                                        <img  src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                        <div class="about-card-icon">
                                            <i class="flaticon-laptop"></i>  <!-- for background icon -->
                                            <i class="flaticon-web"></i>  <!-- for foreground icon -->
                                        </div>
                                        <div class="about-card-text">
                                            <h6><span style="color: #06933e;" class="">Axe Appui à l’Entrepreneuriat des Jeunes</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-4 pb-30">
                                    <div style="height: 100%;" class="about-item-card about-item-card-thirdcolor">
                                        <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">
                                        <div class="about-card-icon">
                                            <i class="flaticon-pencil"></i>  <!-- for background icon -->
                                            <i class="flaticon-agenda"></i>  <!-- for foreground icon -->
                                        </div>
                                        <div class="about-card-text">
                                            <h6><span style="color: #06933e;" class="">Axe Employabilité </span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 pb-30">

                                    <div class="about-feedback">
                                        <p class="about-feedback-paragraph"><p>Elle joue le rôle d’un hub qui interconnecte les différents intervenants de l’écosystème mis en place pour assurer l’intégration des jeunes. <br>Une structure dédiée principalement à l’écoute, l’orientation et l’accompagnement est dotée des espaces de travail en commun (coworking spaces), offrant ainsi aux jeunes l’accès à l’information et le réseautage, des opportunités en matière d’employabilité ainsi que le soutien à l’entrepreneuriat. <br></p>
                                        <div class="section-title mt-15">
                                            <h2><span>A savoir</span>  </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div class="help-card-thumb">
                                                        <i class="flaticon-resume"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Un espace d’accueil</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div class="help-card-thumb">
                                                        <i class="flaticon-satisfaction"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Un espace d’écoute et orientation </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div class="help-card-thumb">
                                                        <i class="flaticon-satisfaction"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Un espace d’accompagnement</h3>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="section-title mt-15">
                                            <h2><span>Population cible</span>  </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div class="help-card-thumb">
                                                        <i class="flaticon-resume"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Jeunes âgés de 18 à 45 ans</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div class="help-card-thumb">
                                                        <i class="flaticon-satisfaction"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>En recherche active d’emploi</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div class="help-card-thumb">
                                                        <i class="flaticon-satisfaction"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Résidant dans la Préfecture de Nouaceur</h3>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="partner-section pt-80 pb-100  mt-40 position-relative">

        <div class="container">
            <div class="partner-carousel-two swiper-container">
                <div class="swiper-wrapper">
                    <div class="partner-item swiper-slide">
                        <a href="#"><img src="{{ asset('images/hrj.png') }}" alt="partner"></a>
                    </div>
                    <div class="partner-item swiper-slide">
                        <a href="#"><img style="margin-top: 59%;" src="{{ asset('images/hj.png') }}" alt="partner"></a>
                    </div>
                    <div class="partner-item swiper-slide">
                        <a href="#"><img src="{{ asset('images/jeser.jpeg') }}" alt="partner"></a>
                    </div>
                    <div class="partner-item swiper-slide">
                        <a href="#"><img src="{{ asset('images/royal.png') }}" alt="partner"></a>
                    </div>
                    <div class="partner-item swiper-slide">
                        <a href="#"><img src="{{ asset('images/logo_landing.png') }}" alt="partner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection



