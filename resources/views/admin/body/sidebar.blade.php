<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
{{--            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">--}}
        </div>
        <div>
            <h4 class="logo-text">منو</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">داشبورد</div>
            </a>
        </li>

{{--        @if(Auth::user()->can('team.menu'))--}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">مدیریت اعضای تیم</div>
            </a>
            <ul>
{{--                @if(Auth::user()->can('team.all'))--}}
                <li> <a href="{{ route('all.team') }}"><i class='bx bx-radio-circle'></i>نمایش کل اعضا</a>
                </li>
{{--                @endif--}}
{{--                @if(Auth::user()->can('team.add'))/--}}
                <li> <a href="{{ route('add.team') }}"><i class='bx bx-radio-circle'></i>اضافه کردن</a>
                </li>
{{--                @endif--}}
            </ul>
        </li>
{{--        @endif--}}

{{--        @if(Auth::user()->can('bookarea.menu'))--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class="bx bx-category"></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Manage Book Area </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                @if(Auth::user()->can('update.bookarea'))--}}
{{--                <li> <a href="{{ route('book.area') }}"><i class='bx bx-radio-circle'></i>Update BookArea </a>--}}
{{--                </li>--}}
{{--                @endif--}}

{{--            </ul>--}}
{{--        </li>--}}
{{--        @endif--}}

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">مدیریت اتاق ها </div>
            </a>
            <ul>
                <li> <a href="{{ route('room.type.list') }}"><i class='bx bx-radio-circle'></i>لیست اتاق ها </a>
                </li>

            </ul>
        </li>


        <li class="menu-label">مدیریت عملیات </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">رزروها </div>
            </a>
            <ul>
                <li> <a href="{{ route('booking.list') }}"><i class='bx bx-radio-circle'></i>لیست رزرو ها </a>
                </li>
                <li> <a href="{{ route('admin.booking.create') }}"><i class='bx bx-radio-circle'></i>اضافه کردن رزرو </a>
                </li>

            </ul>
        </li>
{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Manage RoomList</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="{{ route('view.room.list') }}"><i class='bx bx-radio-circle'></i>Room List</a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </li>--}}


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">تنظیمات</div>
            </a>
            <ul>
{{--                <li> <a href="{{ route('smtp.setting') }}"><i class='bx bx-radio-circle'></i>SMTP Setting</a>--}}
{{--                </li>--}}

                <li> <a href="{{ route('site.setting') }}"><i class='bx bx-radio-circle'></i>تنظیمات سایت</a>
                </li>


            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">نظرات سایت</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.testimonial') }}"><i class='bx bx-radio-circle'></i>تمامی نظرات</a>
                </li>

                <li> <a href="{{ route('add.testimonial') }}"><i class='bx bx-radio-circle'></i>اضافه کردن</a>
                </li>


            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">مقالات سایت</div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>دسته بندی ها</a>
                </li>

                <li> <a href="{{ route('all.blog.post') }}"><i class='bx bx-radio-circle'></i>تمامی مقالات</a>
                </li>


            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">مدیریت کامنت ها</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.comment') }}"><i class='bx bx-radio-circle'></i>تمامی کامنت ها </a>
                </li>

            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">گزارش رزرو ها</div>
            </a>
            <ul>
                <li> <a href="{{ route('booking.report') }}"><i class='bx bx-radio-circle'></i>جستجو </a>
                </li>

            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">گالری هتل</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.gallery') }}"><i class='bx bx-radio-circle'></i>گالری </a>
                </li>

            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">پیامهای ارسال شده</div>
            </a>
            <ul>
                <li> <a href="{{ route('contact.message') }}"><i class='bx bx-radio-circle'></i>پیام ها</a>
                </li>

            </ul>
        </li>



        <li class="menu-label">نقش ها</li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">نقش های سایت </div>
            </a>
            <ul>
{{--                <li> <a href="{{ route('all.permission') }}"><i class='bx bx-radio-circle'></i>All Permission </a>--}}
{{--                </li>--}}
                <li> <a href="{{ route('all.roles') }}"><i class='bx bx-radio-circle'></i>تمامی نقش ها</a>
                </li>

{{--                <li> <a href="{{ route('add.roles.permission') }}"><i class='bx bx-radio-circle'></i>Role In Permission </a>--}}
{{--                </li>--}}

{{--                <li> <a href="{{ route('all.roles.permission') }}"><i class='bx bx-radio-circle'></i>All Role In Permission </a>--}}
{{--                </li>--}}

            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">مدیریت ادمین ها</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.admin') }}"><i class='bx bx-radio-circle'></i>تمامی ادمین ها </a>
                </li>
                <li> <a href="{{ route('add.admin') }}"><i class='bx bx-radio-circle'></i>اضافه کردن ادمین </a>
                </li>



            </ul>
        </li>


{{--        <li class="menu-label">Others</li>--}}


{{--        <li>--}}
{{--            <a href="#" target="_blank">--}}
{{--                <div class="parent-icon"><i class="bx bx-support"></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Support</div>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
    <!--end navigation-->
</div>
