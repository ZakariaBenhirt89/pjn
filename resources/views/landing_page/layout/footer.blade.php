<footer>
    <div style="background-color: #06943e;" class="footer-upper pt-60 pb-60 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="footer-content-item">
                        <div class="footer-logo">
                            <img style="width: 40%;" src="{{ asset('images/logo_landing.png') }}" alt="logo" class="logo">
                        </div>
                        <div style="margin-top: 16px !important;" class="footer-details footer-address-info">
                            <div class="footer-address-info-item">
                                <h4 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.footer.appelez_nous') }}</h4>
                                <p class="footer-contact-number"><a href="tel:0522-41-93-00">0522 41 93 00 </a><span>/</span><a href="tel:0522-24-50-69">0522 24 50 69 </a></p>
                            </div>
                            <div class="footer-address-info-item">
                                <p class="footer-email"><a href="mailto:accueil@heurejoyeuse.ma">accueil@heurejoyeuse.ma</a></p>
                            </div>

                            <div class="footer-address-info-item">
                                <p class="footer-physical-address @if( app()->getLocale() == "ar" ) arab @endif">{{ trans('messages.footer.address_app') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="footer-right pl-80">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.footer.A_Propos_De_Nous') }}</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.footer.A_Propos_De_Nous') }}</a></li>
                                        <li><a  href="#">INDH</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.Contactez_Nous') }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.Actualite') }}</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.footer.Liens') }}</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.Carriere') }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.Actualite') }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans("messages.connexion") }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.footer.Les_partenaires') }}</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.footer.Support') }}</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.footer.Politique_de_confidentialite') }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.footer.Conditions_dutilisation') }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.créer_un_compte') }}</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ trans('messages.footer.FAQ') }}</a></li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower bg-off-white">
        <div class="background-shapes">
            <div class="background-shape-item">
                <img src="assets/images/shapes/curved-line.png" alt="line">
            </div>


        </div>
        <div class="container">
            <div class="footer-lower-grid">
                <div class="footer-lower-item footer-lower-info">
                    <div class="footer-copyright-text">
                        <p>Copyright ©2022 Design &amp; Developed By <a href="#" target="_blank">AOBC</a></p>
                    </div>
                </div>
                <div class="footer-lower-item">
                    <ul class="social-list">
                        <li><a href="#"><img src="assets/images/facebook.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/twitter.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/linkedin.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/instagram.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/youtube.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/skype.png" alt="social"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
