
@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<header class="top-header top-header-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-2 pr-0">
                <div class="language-list">
{{--                    <select class="language-list-item">--}}
{{--                        <option>English</option>--}}
{{--                        <option>العربيّة</option>--}}
{{--                        <option>Deutsch</option>--}}
{{--                        <option>Português</option>--}}
{{--                        <option>简体中文</option>--}}
{{--                    </select>	--}}
                </div>
            </div>

            <div class="col-lg-9 col-md-10">
                <div class="header-right">
                    <ul>
                        <li>
                            <i class='bx bx-home-alt'></i>
                            <a href="#">{{ $setting->address }}</a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </li>

  @auth

  <li>
    <i class='bx bxs-user-pin'></i>
    <a href="{{ route('dashboard') }}">داشبورد</a>
</li>

<li>
    <i class='bx bxs-user-rectangle'></i>
    <a href="{{ route('user.logout') }}">خروج</a>
</li>

  @else

  <li>
    <i class='bx bxs-user-pin'></i>
    <a href="{{ route('login') }}">ورود</a>
</li>

<li>
    <i class='bx bxs-user-rectangle'></i>
    <a href="{{ route('register') }}">ثبت نام</a>
</li>

  @endauth


                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
