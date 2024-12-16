@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp

<div class="service-side-bar">
    <div class="services-bar-widget">
        <h3 class="title">منو کاربری</h3>
        <div class="side-bar-categories">
            @if(auth()->user()->role == 'admin')
                <img
                    src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}"
                    class="rounded mx-auto d-block" alt="Image" style="width:100px; height:100px;">
            @else
                <img
                    src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}"
                    class="rounded mx-auto d-block" alt="Image" style="width:100px; height:100px;">
            @endif
            <center>
                <b> {{ $profileData->name }}</b><br>
                <b>{{ $profileData->email }}</b>
            </center>
            <br>
            <ul>

                <li>
                    <a href="{{ route('dashboard') }}">داشبورد کاربر</a>
                </li>
                <li>
                    <a href="{{ route('user.profile') }}">پروفایل</a>
                </li>
                <li>
                    <a href="{{ route('user.change.password') }}">تغییر رمز عبور</a>
                </li>
                <li>
                    <a href="{{ route('user.booking') }}">جزئیات رزروها </a>
                </li>
                <li>
                    <a href="{{ route('user.logout') }}">خروج </a>
                </li>
            </ul>
        </div>
    </div>


</div>
