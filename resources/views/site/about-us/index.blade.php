@extends('site.layouts.app')
@section('content')
    <!-- About section -->
    <div id="about">
        <div class="container">
            <div class="section-title">
                <h3>نبذة عننا </h3>
                <p dir="ltr">درايف ايز هي شركة رائدة في مجال تأجير السيارات، وهي مكرسة لتزويد العملاء بحلول نقل مريحة
                    وموثوقة. مع
                    سنوات من الخبرة في هذا المجال، نحن نفخر بتقديم خدمة استثنائية وتجربة تأجير سلسة للمسافرين في جميع أنحاء
                    العالم.</p>
            </div>
            <div class="about-desc">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="circleList row">
                            <li class="col-md-4 col-sm-4">
                                <div class="cricle"><i class="fa fa-car" aria-hidden="true"></i></div>
                                <div class="title"> مركبات متميزة، جودة مضمونة</div>
                            </li>
                            <li class="col-md-4 col-sm-4">
                                <div class="cricle"><i class="fa fa-users" aria-hidden="true"></i></div>
                                <div class="title">رضاكم، أولويتنا</div>
                            </li>
                            <li class="col-md-4 col-sm-4">
                                <div class="cricle"><i class="fa fa-tags" aria-hidden="true"></i></div>
                                <div class="title">الخبرة التي يمكنك الوثوق بها</div>
                            </li>
                        </ul>
                        <p>درايف ايز، مهمتنا هي تزويد العملاء بإمكانية الوصول إلى أسطول متنوع من المركبات التي تتم صيانتها
                            جيدًا، إلى جانب الخدمة الشخصية والأسعار التنافسية.<br><br>نحن نهدف إلى تجاوز توقعات عملائنا من
                            خلال تقديم إيجارات عالية الجودة ودعم استثنائي للعملاء
                        </p>
                        <ul class="orderlist">
                            <li>أسطول حديث وحسن الصيانة.</li>
                            <li>فريق عمل ودود وواسع المعرفة وفعال.</li>
                            <li>مواقع متعددة وخيارات حجز مرنة.</li>
                            <li>لا رسوم خفية أو مفاجآت.</li>
                            <li>الارتياح الخاص بك هو على رأس أولوياتنا.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="postimg"><img src="{{ asset('assets/images/about-img.jpg') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tagline Section -->
    <div class="taglinewrap">
        <div class="container">
            <h2>ابدأ اليوم</h2>
            <p>أطلق العنان للراحة والاختيار معنا . من الدرجة الاقتصادية إلى الرفاهية، نضمن لك رحلة سلسة مصممة خصيصًا
                لتلبية احتياجاتك.</p>
            <a href="/"> احجز الان <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
@endsection
