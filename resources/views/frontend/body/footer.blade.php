@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{route('index-home')}}">
                                <img src="{{ asset($setting->logo) }}" alt="Images">
                            </a>
                        </div>
                        <p>
                            برند هتل ما با تمرکز بر کیفیت بالا و تجربه بی‌نظیر مهمانان، محیطی گرم و دلنشین را برای مسافران فراهم می‌کند.                         <ul class="footer-list-contact">
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <a href="#">{{ $setting->address }}</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget pl-5">
                        <h3>درباره ما</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    درباره ما
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    سرویس ها
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    تیم
                                </a>
                            </li>
                            <li>
                                <a href="{{route('show.gallery')}}" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    گالری
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    شرایط و مقررات
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    سیاست حفظ حریم خصوصی
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>لینک‌های مفید</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{route('index-home')}}" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    خانه
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog.list')}}" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    مقالات
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    سوالات متداول
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    نظرات مشتریان
                                </a>
                            </li>
                            <li>
                                <a href="{{route('froom.all')}}" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    تمامی اتاق ها
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contact.us')}}" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    تماس با ما
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>خبرنامه</h3>
                        <p>
                            به ما بپیوندید و از مزایای ویژه‌ای که برای مشترکین خود در نظر گرفته‌ایم، بهره‌مند شوید!
                        </p>
                        <div class="footer-form">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="ایمیل شما" name="EMAIL" required autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-one">
                                            اشتراک
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right-area">
            <div class="row">
{{--                <div class="col-lg-8 col-md-8">--}}
{{--                    <div class="copy-right-text text-align1">--}}
{{--                        <p>--}}
{{--                            {{ $setting->copyright }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-4 col-md-4">
                    <div class="social-icon text-align2">
                        <ul class="social-link">
                            <li>
                                <a href="{{ $setting->facebook }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                            </li>
                            <li>
                                <a href="{{ $setting->twitter }}" target="_blank"><i class='bx bxl-twitter'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
