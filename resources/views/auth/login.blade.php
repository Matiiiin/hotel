@extends('frontend.main_master')
@section('main')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg9">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="{{route('index-home')}}">خانه</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>ورود به حساب کاربری
                    </li>
                </ul>
                <h3>ورود به حساب کاربری
                </h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Sign In Area -->
    <div class="sign-in-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">ورود به حساب کاربری
</span>
                                <h2>به حسابتان وارد شوید</h2>
                            </div>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="login" id="login" class="form-control" required
                                                   data-error="لطفاًایمیل خود را وارد کنید"
                                                   placeholder="لطفاًایمیل خود را وارد کنید">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" id="password" type="password" name="password"
                                                   placeholder="رمز عبور">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 form-condition">
{{--                                        <div class="agree-label">--}}
{{--                                            <input type="checkbox" id="chb1">--}}
{{--                                            <label for="chb1">--}}
{{--                                                من را به خاطر بسپار--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
                                    </div>

{{--                                    <div class="col-lg-6 col-sm-6">--}}
{{--                                        <a class="forget" href="{{ route('password.request') }}">رمز عبور خود را فراموش--}}
{{--                                            کرده اید؟</a>--}}
{{--                                    </div>--}}

                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            هم‌اکنون وارد شوید
                                        </button>
                                    </div>

                                    <div class="col-12">
                                        <p class="account-desc">
                                            <a href="{{ route('register') }}">ثبت نام کنید</a>
                                            عضو نیستید؟
                                        </p>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Area End -->

@endsection
