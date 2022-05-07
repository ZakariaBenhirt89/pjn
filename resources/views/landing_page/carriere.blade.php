@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.Carriere') }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="{{ route('index') }}">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active @if( app()->getLocale() == "ar" ) arab @endif" aria-current="page">{{ trans('messages.Carriere') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
<!-- .end header -->
<section class="career-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2><span @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;">{{ trans('messages.Obtenez_votre_emploi') }}</span></h2>
        </div>
        <div class="row">
            @isset($carrieres)
                @foreach($carrieres as $carriere)
                  <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="career-card">
                    <div class="career-card-title">
                        <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $carriere->{'title_'.app()->getLocale() }  }}</h3>
                        <h5 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $carriere->{'lieu_'.app()->getLocale() }  }}</h5>

                    </div>
                    <div class="career-card-brief">
                        <div  class="pb-30 @if( app()->getLocale() == "ar" ) arab @endif" >
                            {{ $carriere->{'short_description_'.app()->getLocale() }  }}
                        </div>
                    </div>
                    <a href="{{ route('single.carriere',$carriere->id) }}" class="btn main-btn @if( app()->getLocale() == "ar" ) arab @endif">{{ trans('messages.postulez_maintenant') }}</a>
                </div>
            </div>
                @endforeach
            @endisset
        </div>
    </div>
</section>

<!-- .end become-section -->
@endsection()

