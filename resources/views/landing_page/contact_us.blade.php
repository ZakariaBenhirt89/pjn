@extends('landing_page.layout.layout_app')

@section('content')
<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div style="max-width:none;" class="header-page-content">
            <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.Contactez_Nous') }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                    <li class="breadcrumb-item active @if( app()->getLocale() == "ar" ) arab @endif" aria-current="page">{{ trans('messages.Contactez_Nous') }}</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- .end header -->
<section class="contact-form-section p-tb-100">
    <div class="container">
        <div class="contact-form-box">
            <div class="sub-section-title text-center">
                <h3 class="sub-section-title-heading">Laisser un message</h3>
                <p>Votre adresse email ne sera pas publiée. Les champs requis sont indiqués *</p>
            </div>
            <form class="contact-form" id="contactForm" novalidate="true">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-user"></i></span>
                                </div>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nom*" required="" data-error="S'il vous plaît entrez votre nom">
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                </div>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email*" required="" data-error="Veuillez saisir votre e-mail">
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-phone-call"></i></span>
                                </div>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Mobile*" required="" data-error="Veuillez entrer votre numéro de téléphone">
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-book"></i></span>
                                </div>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Sujet*" required="" data-error="Veuillez entrer votre sujet">
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="form-group mb-20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                </div>
                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Votre commentaire*"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="input-checkbox mb-20">
                            <input type="checkbox" id="contact1">
                            <label for="contact1">J'accepte <a href="#">Conditions d'utilisation</a> et <a href="#">Politique de confidentialité</a></label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 text-center">
                        <button class="btn main-btn disabled" type="submit" style="pointer-events: all; cursor: pointer;">ENVOYER UN MESSAGE</button>
                        <div id="msgSubmit"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="contact-information-section pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 pb-30">
                <div class="contact-information-item">
                    <div class="section-title section-title-shapeless section-title-left text-start">
                        <h2><span>Contact</span></h2>
                    </div>
                    <div class="contact-options">
                        <div class="contact-option-item">
                            <div class="contact-option-icon"><i class="flaticon-phone-call"></i></div>
                            <div class="contact-option-details">
                                <p>Mobile: <a href="tel:0522-41-93-00">0522 41 93 00</a></p>
                                <p>Fax: <a href="tel:0522-24-50-69">0522 24 50 69</a></p>
                                <p>Email: <a href="mailto:accueil@heurejoyeuse.ma">accueil@heurejoyeuse.ma</a></p>
                            </div>
                        </div>
                        <div class="contact-option-item">
                            <div class="contact-option-icon"><i class="flaticon-network"></i></div>
                            <div class="contact-option-details">
                                <p>05, rue Abbas El Jiraoui, Belvédère, Casablanca.</p>
                            </div>
                        </div>
                        <div class="contact-option-item">
                            <div class="contact-option-icon"><i class="flaticon-clock"></i></div>
                            <div class="contact-option-details">
                                <p>Lundi - Vendredi: <span>09:00 am - 18:00 pm</span></p>
                                <p>Dimanche &amp; Samedi: <span>09:30 am - 12:00 pm</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pb-30">
                <div class="contact-information-item">
                    <div style="width: 88% !important;" class="">
                        <img src="images/_Q7B0473.jpg" alt="contact">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

