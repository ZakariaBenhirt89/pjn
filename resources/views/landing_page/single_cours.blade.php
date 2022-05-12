@extends('landing_page.layout.layout_course')


@section("content")


    <header style="background-image: url({{ asset('images/header_last1.png') }}) !important;background-size: inherit;" class="header-page">
        <div class="container">
            <div class="header-page-content desk-pad-right-30">


                <h1 class="arab"> نموذج العمل التجاري</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="arab" href="#">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active arab" aria-current="page"> نموذج العمل التجاري</li>
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
                                        <div class="summery-label arab"><i class="flaticon-equalizer"></i>المستوى</div>
                                        <div class="summery-option arab">مستوى متقدم</div>
                                    </div>
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

                                    <a href="#" class="btn main-btn arab">الذهاب إلى لوحة التحكم</a>
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
                                    <h4 style="background: aliceblue;padding: 10px;border-radius: 8px;" class="arab">الهدف من المجزوءة</h4>
                                    <ul>
                                        <li class="arab"><i class="flaticon-check"></i>نتعرف على نموذج العمل التجاري و الهدف منو </li>
                                        <li class="arab"><i class="flaticon-check"></i> نعرف الاجزاء ديال النموذج التجاري و كيفاش نطور به فكرة المشروع ديالي </li>

                                    </ul>

                                        <ul style="padding-left: 0;padding-right: revert;">
                                            <li class="arab"></li>
                                            <li class="arab"></li>
                                        </ul>

                                    <h4 style="background: aliceblue;padding: 10px;border-radius: 8px;" class="arab">تذكير</h4>
                                    <p class="arab">كيفما تعرفنا سابقا على مخطط الفرصة لكيخلينا نعرفو امكانية تطبيق فكرة المشروع ديالي فارض الواقع.
                                        نتعرفو على نموذج العمل التجاري لهو عبارة على واحد البطاقة تقنية كتكون من 9 ديال الخانات لكتمكنا من تحليل فكرة المشروع و كتعطينا رؤية شاملة عليه مع مختلف مكوناته.</p>
                                  <h4 style="background: aliceblue;padding: 10px;border-radius: 8px;" class="arab">نتعرفو على مراحل صياغة النموذج العمل التجاري اولا لهما اربعة ׃</h4>
                                    <ul>
                                        <li class="arab"><i class="flaticon-check"></i>الزبناء </li>
                                        <li class="arab"><i class="flaticon-check"></i> العرض </li>
                                        <li class="arab"><i class="flaticon-check"></i> البنية الاساسية</li>
                                        <li class="arab"><i class="flaticon-check"></i>النجاعة المالية</li>
                                    </ul>
                                    <h4 style="background: aliceblue;padding: 10px;border-radius: 8px;" class="arab">كيف سبق لي ذكرت فنموذج العمل التجاري كيتكون من 9 ديال الخانات:</h4>
                                    <ul>

                                        <li class="arab">1-شرائح العملاء، كيفما كنعرفوا جميع الزبناء كيمثلوا القلب ديال المشروع بحيث انه من غير الزبناء ما يمكنش المشروع يعيش، و باش يكون المشروع الناجح خاصني نعرف بالضبط شكون هما الزبناء ديالي فهاذ الخانة كنحدد شكون هما العملاء ديالي بالتحديد واش B to C  بمعنى العميل العادي و كنحدد شكون هو الجنس ديالو،الشريحة العمرية ، الموقع الاستراتيجي ... الخ، و النوع الثاني لهو B to B  بمعنى الشركات و المؤسسات</li>
                                       <br/>
                                        <li class="arab">2-من بعدما عرفنا العملاء ديالنا دابا كنحددو القيم المقترحة بمعنى انه فهاذ الخانة كنحدد القيمة المضافة لكيقترحها المنتوج او الخدمة اللي كنقدم و في نفس الخانة كنجاوب على الاسئلة التالية ׃
                                            - شنو هو الحل لكنقدم لزبناء دياولي باش نرضي الاحتياج ديالهم ؟
                                            - علاش هاذ الزبون غدي يختار الخدمة او المنتوج ديالي و ما غديش يمشي عند المشاريع المناسبة ؟</li>
                                        <li class="arab">3-العلاقات مع العملاء ، هاذ المرحلة تعتبر مهمة جدا كذلك ، لانه كيفما منعرفو البيع مكيتوقفش فقط فمرحلة اخد الزبون للمنتوج او الخدمة و انما كاين مرحلة اخرى لكنسميوها مرحلة ما بعد البيع هنا الزبون ديالي تيحس بانني ماشي غير تندير معاه معاملة تجارية و فقط بل كنواكبو و مكنساهش و فهاذ النقطة بالذات الكليان ديالي متيبقاش غير زبون عادي بل كيقدر يلعب الدور ديال سفير المشروع و يبدا هو يجيب ليا زبائن جداد داكشي علاش خاص نركزو على هاذ النقطة بزاف و منساوهاش و ما بين الاشياء اللي نقدر نقترحها على الزبون ديالي التخفيضات، اعطاء بطاقة الولاء، اقتراح ضمانات ... .</li>
                                        <br/>
                                        <li class="arab">4-القنوات هنا كنحدد فين غدي نبيع الخدمة او المنتوج ديالي بمعنى واش غدي نحتاج محل، نقط البيع ،المعارض، غدي نبيع من خلال الانترنيت... ، و كنحدد قنوات التواصل بمعنى كيفاش الزبناء غدي يتعرفو على المشروع ديالي واش من خلال مواقع التواصل الاجتماعي او من خلال الاشهارات في وسائل الاعلام او من خلال تفريق المنشورات ...</li>
                                        <br/>
                                        <li class="arab">5-الانشطة الرئيسية هنا بالذات كنحاول نتخيل السيناريو لكيدوز منو المنتوج او الخدمة حتى نوصل لمرحلة البيع او ما بعد البيع مثلا ׃ بشراء المواد الخام، من بعد تخزين، صنع المنتوج، بيع و توصيل المنتوج، و في الاخير خدمة ما بعد البيع للمنتوج.</li>
                                        <br/>
                                        <li class="arab">6- الموارد الاساسية مرتبطة بشكل مباشر بالخانة السابقة لهي الانشطة الرئيسية بحيث انه باش نوصل لهاديك الخدمة المنتوج النهائي فكنحتاج لمجموعة من الموارد مثلا المحل فين غادي نخدم ، الاليات باش غدي نصنع ، العمال لغدي ينتجو، الرخصة اللي بيها غادي نقدر نبيع بطريقة قانونية.</li>
                                        <br/>
                                        <li class="arab">7-الشركاء كيفما كيقول المثل المغربي ديال يد وحدة مكتصفقش، كذلك وهو مثال للمؤسسة ديالي باش نقدر نخدم ضروري غدي نحتاج لشركاء هنا كنهدر على الموردون، الشكاء الماليين، الخبراء، شركات التوصيل.</li>
                                        <br/>
                                        <li class="arab">8-هيكل التكاليف هنا كتبدا نهضر على كل ماهو مادي بمعنى الفلوس، اذن فهاذ الخانة كنحدد جميع المصاريف لغدي نبدا نخلص بمعنى  واجب الكراء، تعويضات العمال ثمن فاتورة الماء، الكهرباء، الأنترنت، مصاريف التنقل، ثمن شراء المواد الخام</li>
                                        <br/>
                                        <li class="arab">9-مصادر الإيرادات بمعنى منين غدي نربح الفلوس أي من خلال بيع المنتوج أو المنتوجات و الخدمة أو الخدمات.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="summery-info-details-item" data-summery-info-details="2">
                                <div class="summery-info-details-inner">
                                    <h4 style="background: aliceblue;
    padding: 10px;
    border-radius: 8px;" class="arab">فيديوهات الدرس</h4>
                                    <small><i>General introduction to the course outline</i></small>
                                    <ul class="summery-lesson-list">
                                        <li>
                                            <a href="#">
                                                <span class="summery-lesson-name arab">بطاقة تقنية كتمكنا من تحليل فكرة المشروع  </span>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="summery-lesson-name arab">استراتيجية دراسة السوق لاثارة انتباه الزبنا</span>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="summery-lesson-name arab">النموذج الاقتصادي ديال واحد المؤسسة  </span>

                                            </a>
                                        </li>

                                    </ul>
                                    <h4 style="background: aliceblue;
    padding: 10px;
    border-radius: 8px;" class="arab">ملفات الدرس</h4>
                                    <ul class="summery-lesson-list">
                                        <li>
                                            <a href="#">
                                                <span class="summery-lesson-name arab">بطاقة تقنية كتمكنا من تحليل فكرة المشروع  </span>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="summery-lesson-name arab">استراتيجية دراسة السوق لاثارة انتباه الزبنا</span>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="summery-lesson-name arab">النموذج الاقتصادي ديال واحد المؤسسة  </span>

                                            </a>
                                        </li>

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

@endsection
