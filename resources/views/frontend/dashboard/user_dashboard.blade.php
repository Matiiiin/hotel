@php
use App\Models\Booking;
$total_booking = Booking::where('user_id' , auth()->user()->id)->get();
$pending = $total_booking->filter(function ($booking) {
    return $booking['payment_status'] == 0;
});
$completed =$total_booking->filter(function ($booking) {
    return $booking['payment_status'] == 1;
});@endphp
@extends('frontend.main_master')
@section('main')

<!-- Inner Banner -->
<div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="{{route('index-home')}}">خانه</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>داشبورد</li>
            </ul>
            <h3>داشبورد</h3>
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


                    <div class="service-article-title">
                        <h2>داشبورد</h2>
                    </div>

                    <div class="service-article-content">
                    <div class="row">

<div class="col-md-4">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
<div class="card-header">تمام رزروها</div>
<div class="card-body">
<h1 class="card-title" style="font-size: 45px;">{{$total_booking->count() }} کل رزرو ها</h1>

</div>
</div>
 </div>

     <div class="col-md-4">
<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
<div class="card-header">رزروهای در انتظار</div>
<div class="card-body">
<h1 class="card-title" style="font-size: 45px;">{{$pending->count()}} در انتظار</h1>

</div>
</div>
 </div>


     <div class="col-md-4">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
<div class="card-header">رزروهای تکمیل شده</div>
<div class="card-body">
<h1 class="card-title" style="font-size: 45px;">{{$completed->count()}} تکمیل شده</h1>

</div>
</div>
 </div>





                    </div>

                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
<!-- Service Details Area End -->


@endsection
