@extends('frontend.main_master')
@section('main')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg10">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="{{route('index-home')}}">خانه</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>ثبت نام</li>
                </ul>
                <h3>ثبت نام</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Sign Up Area -->
    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">ثبت نام</span>
                                <h2>حساب کاربری خود را بسازید</h2>
                            </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

        <div class="row">
            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" required data-error="نام و نام خانوادگی خود را وارد کنید" placeholder="نام  و نام خانوادگی">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" required data-error="ایمیل خود را وارد کنید" placeholder="ایمیل">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" required data-error="رمز عبور خود را وارد کنید" placeholder="رمز عبور">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="تکرار رمز عبور">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 text-center">
                <button type="submit" class="default-btn btn-bg-three border-radius-5">
                    ثبت نام
                </button>
            </div>

            <div class="col-12">
                <p class="account-desc">
                    <a href="{{ route('login') }}">وارد شوید</a>
                    حساب کاربری دارید؟

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
    <!-- Sign Up Area End -->



@endsection
