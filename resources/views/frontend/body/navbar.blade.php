@php
    $setting = App\Models\SiteSetting::find(1);
@endphp


<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href={{route('index-home')}} class="logo">
            <img src="{{ asset($setting->logo) }}" class="logo-one" alt="Logo">
            <img src="{{ asset($setting->logo) }}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{route('index-home')}}">
                    <img src="{{ asset($setting->logo) }}" class="logo-one" alt="Logo">
                    <img src="{{ asset($setting->logo) }}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                خانه
                            </a>

                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="about.html" class="nav-link">--}}
{{--                                درباره ما--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                               Restaurant--}}
{{--                            </a>--}}

{{--                        </li>--}}

                        <li class="nav-item">
                            <a href="{{ route('show.gallery') }}" class="nav-link">
                              گالری
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.list') }}" class="nav-link">
                                مقالات
                            </a>

                        </li>
    @php
        $room = App\Models\Room::latest()->get();
    @endphp
                        <li class="nav-item">
                            <a href="{{ route('froom.all') }}" class="nav-link">
                                تمام اتاق‌ها
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($room  as $item)
                                <li class="nav-item">
                                    <a href='{{route('RoomDetailsPage' ,$item->id)}}' class="nav-link">
                                        {{ $item->name }}
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact.us') }}" class="nav-link">
                                تماس با ما
                            </a>
                        </li>

                        <li class="nav-item-btn">
                            <a href='{{route('froom.all')}}' class="default-btn btn-bg-one border-radius-5">رزرو کنید</a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href='{{route('froom.all')}}' class="default-btn btn-bg-one border-radius-5">رزرو کنید</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>