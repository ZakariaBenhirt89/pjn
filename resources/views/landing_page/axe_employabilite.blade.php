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
                        <img style="width: 70%;" src="{{ asset('images/logo_al_jisr.png') }}" alt="study">
                    </div>
                </div>
            </div>
            <div class="about-section pb-70 position-relative overflow-hidden">


                <div class="container">
                    <div class="section-title">
                        <h2><span style="color: #06933e;"> Lorem Ipsum est simplement </span></h2>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div style="background: #0498e4;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                                <div class="about-card-text">
                                    <h6 style="color: #fff;background: #7bdf02;padding: 11px;border-radius: 8px;"><span style="color: #ffffff;font-size: 22px;font-weight: bold;" class="">Formation-Employabilité </span></h6>
                                    <p style="color: #fefefe;">Consiste à proposer une panoplie de formations en Soft Skills destinées à renforcer les compétences des jeunes en techniques de recherche d’emploi à travers des ateliers de rédaction de CV et lettre de motivation, des sessions de préparation aux entretiens d’embauche et réseautage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div style="    background: #9a1ca8;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                                <div class="about-card-text">
                                    <h6 style="background: #74dc00;padding: 11px;border-radius: 8px;"><span style="color: #fefefe;font-size: 22px;font-weight: bold;" class="">Formation-Insertion</span></h6>
                                    <p style="color: #fff;">En plus des formations en compétences techniques, comportementales et linguistiques demandées sur le marché du travail, les jeunes chercheurs d’emploi bénéficieront d’une formation dans des métiers en croissance demandés par le marché de l’emploi.<br/><br/></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-details-content  desk-pad-right-40">


                            <p>Les jeunes ayant suivi des formations de type « Formation-Insertion » bénéficieront d’une insertion en emploi formel, tout en étant déclaré par un organisme employeur affilié à la Caisse Nationale de Sécurité Sociale (CNSS). Cela vise à assurer le maintien en emploi formel pour les bénéficiaires ayant été insérés.<p>
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
            <div class="pb-70">
                <div class="section-title">
                    <h2>Explore <span>How Can</span> I Help You</h2>
                    <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
                </div>
                <div class="row">



                    <!--Carousel Gallery-->
                    <div class="gallery-tab-details popup-gallery">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 element-item photos campus pb-30" style="position: absolute; left: 0px; top: 0px;">
                                <div class="gallery-card">
                                    <div class="gallery-card-thumb">
                                        <img src="{{ asset('images/axe_employabilite/IMG_0164.jpg') }}" alt="gallery">
                                    </div>
                                    <div class="gallery-zoom">
                                        <a href="{{ asset('images/axe_employabilite/IMG_0164.jpg') }}" title="Photos"><i class="flaticon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 400px; top: 0px;">
                                <div class="gallery-card">
                                    <div class="gallery-card-thumb">
                                        <img src="{{ asset('images/axe_employabilite/IMG_0226.jpg') }}" alt="gallery">
                                    </div>
                                    <div class="gallery-zoom">
                                        <a href="{{ asset('images/axe_employabilite/IMG_0226.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 element-item students photos pb-30" style="position: absolute; left: 800px; top: 0px;">
                                <div class="gallery-card">
                                    <div class="gallery-card-thumb">
                                        <img src="{{ asset('images/axe_employabilite/IMG_0235.jpg') }}" alt="gallery">
                                    </div>
                                    <div class="gallery-zoom">
                                        <a href="{{ asset('images/axe_employabilite/IMG_0235.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 0px; top: 400px;">
                                <div class="gallery-card">
                                    <div class="gallery-card-thumb">
                                        <img src="{{ asset('images/axe_employabilite/IMG_0264.jpg') }}" alt="gallery">
                                    </div>
                                    <div class="gallery-zoom">
                                        <a href="{{ asset('images/axe_employabilite/IMG_0264.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                                <div class="gallery-card">
                                    <div class="gallery-card-thumb">
                                        <img src="{{ asset('images/axe_employabilite/IMG_0304.jpg') }}" alt="gallery">
                                    </div>
                                    <div class="gallery-zoom">
                                        <a href="{{ asset('images/axe_employabilite/IMG_0304.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--#Carousel Gallery-->



                    <!-- /.gallery-slider -->


                </div>
            </div>
        </div>
    </section>
    <section  style="background: #f5feff;" class="course-section p-tb-100 position-relative">
        <div class="container">
            <div class="section-title section-title-shapeless section-title-lineless section-title-thirdcolor">

                <h2><span>Les Offres d'emploi</span></h2>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années!!</p>
            </div>
            <div class="row">







                <div class="col-12 col-lg-6 pb-30">
                    <div style="background: #f0fffb;" class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb ">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li>

                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;background-color: #7bdf02;border-color: #91d93a; width: 120px;" href="#" class="btn btn-success">Voir Plus</a>
                                </li>
                                <li>
                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                </li>
                            </ul>


                        </div>
                    </div>
                </div> <div class="col-12 col-lg-6 pb-30">
                    <div style="background: ;" class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb ">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li>

                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;background-color: #7bdf02;border-color: #91d93a; width: 120px;" href="#" class="btn btn-success">Voir Plus</a>
                                </li>
                                <li>
                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                </li>
                            </ul>


                        </div>
                    </div>
                </div> <div class="col-12 col-lg-6 pb-30">
                    <div style="background: #f0fffb;" class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb ">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li>

                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;background-color: #7bdf02;border-color: #91d93a; width: 120px;" href="#" class="btn btn-success">Voir Plus</a>
                                </li>
                                <li>
                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                </li>
                            </ul>


                        </div>
                    </div>
                </div> <div class="col-12 col-lg-6 pb-30">
                    <div style="background: #f0fffb;" class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb ">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li>

                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;background-color: #7bdf02;border-color: #91d93a; width: 120px;" href="#" class="btn btn-success">Voir Plus</a>
                                </li>
                                <li>
                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                </li>
                            </ul>


                        </div>
                    </div>
                </div> <div class="col-12 col-lg-6 pb-30">
                    <div style="background: #f0fffb;" class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb ">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li>

                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;background-color: #7bdf02;border-color: #91d93a; width: 120px;" href="#" class="btn btn-success">Voir Plus</a>
                                </li>
                                <li>
                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                </li>
                            </ul>


                        </div>
                    </div>
                </div> <div class="col-12 col-lg-6 pb-30">
                    <div style="background: #f0fffb;" class="course-card course-card-list course-card-thirdcolor">
                        <div class="course-card-thumb ">
                            <a href="#"><img src="{{ asset('images/_Q7B0025.jpg') }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <h3><a href="single-course.html">Annonce d'un appel à propositions de projets</a></h3>
                            <ul class="course-info-list">
                                <li><i class="flaticon-reading"></i> email@gmail.com</li>
                                <li><i class="flaticon-online-learning-1"></i> Lieu de travail</li>
                            </ul>
                            <ul class="course-filter-list">
                                <li>

                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;background-color: #7bdf02;border-color: #91d93a; width: 120px;" href="#" class="btn btn-success">Voir Plus</a>
                                </li>
                                <li>
                                    <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                </li>
                            </ul>


                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="#" class="btn main-btn btn-thirdcolor">Voir toutes les offres d’emploi <i class="flaticon-edit"></i></a>
            </div>
        </div>
    </section>
    <section class="offer-section pt-100 pb-70">
        <div class="container">
            <div style="margin-bottom: 24px;" class="row align-items-end">
                <div class="col-12 col-lg-5">
                    <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">

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
                @isset($Entrepreneurs)
                    @foreach($Entrepreneurs as $Entrepreneur)
                             <div class="col-12 col-sm-6 col-lg-3 pb-30">
                                <div class="offer-card offer-card-thirdcolor">
                                    <div class="offer-card-inner">
                                        <div style="background-color: #0098e6;" class="offer-card-thumb">
                                            <img src="{{ asset('images/entrepreneurs/'.$Entrepreneur->image_profile) }}" alt="course">
                                        </div>
                                        <div class="offer-card-content">
                                            <h3>{{ $Entrepreneur->{'title_'.app()->getLocale() }  }}</h3>
                                            <div class="entren">{!! $Entrepreneur->{'short_description_'.app()->getLocale()} !!}</div>
                                        </div>
                                        <a href="{{ route('axe-entrepreneuriat-single',$Entrepreneur->id) }}" class="offer-redirect-link"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endisset


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

    @if( app()->getLocale() == "ar" )
        <script>
            $(document).ready(function (){
                $('.entren p').addClass('arab');
                $('.entren span').addClass('arab');
            });
        </script>
    @endif

    @if( app()->getLocale() == "fr" )
        <script>
            $(document).ready(function (){
                $('.entren p').addClass('avenir');
                $('.entren span').addClass('avenir');
            });
        </script>
    @endif
@endsection
