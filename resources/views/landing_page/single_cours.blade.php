@extends('landing_page.layout.layout_course')


@section("content")


    <header style="background-image: url({{ asset('images/header_last1.png') }}) !important;background-size: inherit;" class="header-page">
        <div class="container">
            <div class="header-page-content desk-pad-right-30">


                <h1 class="arab"> {{$title}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="arab" href="#">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active arab" aria-current="page">{{$title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <section class="course-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pb-30 order-lg-2">
                    <div class="summery-details-item sidebar-to-header">
                        <div class="summery-box">
                            <div class="summery-iframe">
                                <iframe src="https://www.youtube.com/embed/thjVvXl8vwI"></iframe>
                            </div>
                            <div class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div class="summery-label arab"><i class="flaticon-instructor"></i>مسير الدرس</div>
                                        <div class="summery-option arab">فرانكوا اراب</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label arab"><i class="flaticon-online-learning-1"></i>عدد الوحدات</div>
                                        <div class="summery-option">10</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label arab"><i class="flaticon-reading-book-1"></i>التلميد المسجل</div>
                                        <div class="summery-option arab">انس معتيق</div>
                                    </div>

                                </div>
                                <div class="summery-material-list">
                                    <h4 class="arab"> المواد المرفقة</h4>
                                    <ul>
                                        <li class="arab"><span>-</span> شريط فيديو</li>
                                        <li class="arab"><span>-</span> ملفات PDF</li>
                                    </ul>
                                </div>
                                <div class="summery-buttons">
                                  @if(\Illuminate\Support\Facades\Auth::check())
                                        <a href="{{route("student")}}" class="btn main-btn arab">الذهاب إلى لوحة التحكم</a>
                                      @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: -58px;" class="col-12 col-lg-8 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <ul class="product-tab-list">
                            <li class="active arab" data-product-tab="1">نظرة عامة</li>
                            <li class="arab" data-product-tab="2">مواد الدرس</li>
                            <li class="arab" data-product-tab="3">مسير الدرس</li>

                        </ul>
                        <div class="summery-info-details">
                            <div class="summery-info-details-item summery-info-details-item-active" data-summery-info-details="1">
                                <div class="summery-info-details-inner">
                                    {!! $desc !!}
                                </div>
                            </div>
                            <div class="summery-info-details-item" data-summery-info-details="2">
                                <div class="summery-info-details-inner">
                                    <h4 style="background: aliceblue;
    padding: 10px;
    border-radius: 8px;" class="arab">فيديوهات الدرس</h4>
                                    <ul class="summery-lesson-list">
                                        @foreach($video as $vid)
                                        <li>
                                            <a href="#" class="linkVid" data-toggle="modal" data-target="#modalLarge{{$vid["id"]}}">
                                                <span class="summery-lesson-name arab"> {{ $vid["title"] }} </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <h4 style="background: aliceblue;
    padding: 10px;
    border-radius: 8px;" class="arab">ملفات الدرس</h4>
                                    <ul class="summery-lesson-list">
                                        @foreach($mats as $m)
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modalLargeMat{{$m["id"]}}">
                                                <span class="summery-lesson-name arab">{{ $m["title"] }} </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="summery-info-details-item" data-summery-info-details="3">
                                <div class="summery-info-details-inner">
                                    <div class="summery-info-instructor">
                                        <div class="summery-info-instructor-thumb">
                                            <img src="images/avatar/a-sm.jpg" alt="instructor">
                                        </div>
                                        <div class="summery-info-instructor-details">
                                            <h3 class="arab"> فرانكوا اراب</h3>
                                            <p class="arab">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($video as $vid)
            <div class="modal fade" tabindex="-1" id="modalLarge{{$vid["id"]}}">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal Title</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <video controls width="100%">

                                <source src="{{$vid["url"]}}"
                                        type="video/mp4">

                                Sorry, your browser doesn't support embedded videos.
                            </video>
                        </div>
                        <div class="modal-footer bg-light">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach($mats as $vid)
            <div class="modal fade" tabindex="-1" id="modalLargeMat{{$vid["id"]}}">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal Title</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <iframe style="width: 100% ; height: 80vh" src="//docs.google.com/gview?url={{$vid["url"]}}&embedded=true"  frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer bg-light">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    <!-- .end course-details-section -->
    <!-- course-section -->
    <section class="course-section p-tb-100 bg-off-white">
        <div class="container">
            <div class="section-title-group">
                <div class="section-title section-title-shapeless">
                    <h2><span class="arab">دروس مقترحة</span></h2>
                </div>
            </div>
            <div class="course-carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="course-carousel-item swiper-slide">
                        <div class="course-card">
                            <div class="course-card-thumb">
                                <a href="single-course.html"><img src="assets/images/courses/course-image-1.jpg" alt="course"></a>
                            </div>
                            <div class="course-card-content bg-gray">
                                <ul class="course-info-list">
                                    <li><i class="flaticon-reading"></i> 23 Students</li>
                                    <li><i class="flaticon-online-learning-1"></i> 30 Lessons</li>
                                </ul>
                                <h3><a href="single-course.html">Listening Skills the Ultimate Soft Skills for Beginners</a></h3>
                                <h4 class="course-price">$56.00</h4>
                            </div>
                            <ul class="course-filter-list">
                                <li class="course-filter-danger">Featured</li>
                                <li class="course-filter-success">Free</li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-carousel-item swiper-slide">
                        <div class="course-card">
                            <div class="course-card-thumb">
                                <a href="single-course.html"><img src="assets/images/courses/course-image-2.jpg" alt="course"></a>
                            </div>
                            <div class="course-card-content bg-gray">
                                <ul class="course-info-list">
                                    <li><i class="flaticon-reading"></i> 16 Students</li>
                                    <li><i class="flaticon-online-learning-1"></i> 45 Lessons</li>
                                </ul>
                                <h3><a href="single-course.html">Yoga Medicine’s Guide to Therapeutic Man &amp; Woman</a></h3>
                                <h4 class="course-price">$100.00</h4>
                            </div>
                            <ul class="course-filter-list">
                                <li class="course-filter-danger">Featured</li>
                                <li class="course-filter-success">Free</li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-carousel-item swiper-slide">
                        <div class="course-card">
                            <div class="course-card-thumb">
                                <a href="single-course.html"><img src="assets/images/courses/course-image-3.jpg" alt="course"></a>
                            </div>
                            <div class="course-card-content bg-gray">
                                <ul class="course-info-list">
                                    <li><i class="flaticon-reading"></i> 16 Students</li>
                                    <li><i class="flaticon-online-learning-1"></i> 45 Lessons</li>
                                </ul>
                                <h3><a href="single-course.html">Excel Crash Course: Master Excel for Financial Analysis</a></h3>
                                <h4 class="course-price">$78.00</h4>
                            </div>
                            <ul class="course-filter-list">
                                <li class="course-filter-danger">Featured</li>
                                <li class="course-filter-success">-50%</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-carousel-control">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

<script>
    $("[data-toggle='modal']").on("click" , function (e) {
        console.log("holla ")
        const id = $(this).attr("data-target")
        $(id).modal("show")
    })
</script>
@endsection
