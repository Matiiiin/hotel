@extends('frontend.main_master')
@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="{{route('index-home')}}">خانه</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>تغییر رمز عبور</li>
            </ul>
            <h3>تغییر رمز عبور</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
             <div class="col-lg-3">

                @include('frontend.dashboard.user_menu')

            </div>


            <div class="col-lg-9">
                <div class="service-article">


    <section class="checkout-area pb-70">
    <div class="container">
        <form action="{{ route('password.change.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">تغییر رمز عبور</h3>

                        <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label> رمز قدیمی<span class="required">*</span></label>
                <input type="password" name="old_password"  class="form-control @error('old_password') is-invalid @enderror" id="old_password" >
                @error('old_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label>رمز جدید<span class="required">*</span></label>
                <input type="password" name="new_password"  class="form-control @error('new_password') is-invalid @enderror" id="new_password" >
                @error('new_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>


        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label> تکرار رمز جدید <span class="required">*</span></label>
                <input type="password" name="new_password_confirmation"  class="form-control" id="new_password_confirmation" >

            </div>
        </div>


<button type="submit" class="btn btn-danger">ذخیره </button>
</div>
</div>
</div>
</div>
</form>

    </div>
</section>

                </div>
            </div>


        </div>
    </div>
</div>
<!-- Service Details Area End -->




@endsection
