@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div style="width: 60% !important;" class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div style="max-width: 100% !important;" class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $carriere->{'title_'.app()->getLocale() }  }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active  @if( app()->getLocale() == "ar" ) arab @endif " aria-current="page">{{ $carriere->{'title_'.app()->getLocale() }  }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="event-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pb-30 order-lg-2">
                    <div class="summery-details-item">
                        <div class="summery-box mb-30">
                            <div class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div class="summery-label @if( app()->getLocale() == "ar" ) arab @endif "><i class="flaticon-calendar"></i>{{ trans('messages.date_de_publication') }}</div>
                                        <div class="summery-option">{{ $carriere->date_creation }}</div>
                                    </div>

                                    <div class="summery-list-item">
                                        <div class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"><i class="flaticon-placeholder"></i>{{ trans('messages.Emplacement') }}</div>
                                        <div class="summery-option  @if( app()->getLocale() == "ar" ) arab @endif">{{ $carriere->{'lieu_'.app()->getLocale() }  }}</div>
                                    </div>

                                    <div class="summery-list-item">
                                        <div class="summery-label  @if( app()->getLocale() == "ar" ) arab @endif"><i class="flaticon-envelope"></i>{{ trans('messages.Email') }}</div>
                                        <div class="summery-option"><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="mailto:".{{ $carriere->email  }}>{{ $carriere->email  }}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"><i class="flaticon-envelope"></i>{{ trans('messages.telephone') }}</div>
                                        <div class="summery-option"><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ $carriere->tele  }}</a></div>
                                    </div>
                                </div>
                                <div class="summery-buttons">
                                    <a href="#" class="btn main-btn @if( app()->getLocale() == "ar" ) arab @endif" data-bs-toggle="modal" data-target="#eventModal">{{ trans('messages.postulez_maintenant') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="summery-box">
                            <div class="summery-inner">
                                <div class="sidebar-title">
                                    <h3 @if( app()->getLocale() == "ar" ) class="arab"  @endif>{{ trans('messages.modern_carriere') }}</h3>
                                </div>
                                <!-- this "blog-recent-content" class with inner classes will be use for the recent job as well. -->
                                <div class="blog-recent-content">
                                    @isset($carriere_autre)
                                        @foreach($carriere_autre as $carriere_autr)
                                          <div class="blog-recent-content-item">
                                        <div class="blog-recent-content-details">
                                            <ul class="course-entry-list">
                                                <li @if( app()->getLocale() == "ar" ) class="arab" @endif><i class="flaticon-online-learning-1"></i> {{ $carriere_autr->date_creation }}</li>
                                            </ul>
                                            <h3><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="{{ route('single.carriere',$carriere_autr->id) }}">{{ $carriere_autr->{'title_'.app()->getLocale() }  }}</a></h3>
                                        </div>
                                    </div>
                                        @endforeach
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <div class="summery-info-details">
                            <div class="summery-info-details-inner">
                                <h2  @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $carriere->{'title_'.app()->getLocale() }  }}</h2>
                                <p @if( app()->getLocale() == "ar" ) class="arab" @endif>
                                    {{ $carriere->{'short_description_'.app()->getLocale() }  }}
                                </p>
                                <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.Overview') }}</h3>
                                <div class="carriere_content @if( app()->getLocale() == "ar" ) arab @endif" >

                                    {!! $carriere->{'content_'.app()->getLocale()} !!}

                                </div>
                                <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.telecharger_le_fichier') }}</h3>
                                <a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" target="_blank" href="{{ asset('images/carriere/attachment/'.  $carriere->attachement  ) }}"><span>{{ trans('messages.Fiche_Poste') }}</span> - {{ $carriere->{'title_'.app()->getLocale() }  }}</a>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- .end become-section -->
@endsection()

