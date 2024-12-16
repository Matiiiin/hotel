@php use App\Models\RoomNumber;use Illuminate\Support\Facades\Session; @endphp
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
                    <li>جزئیات اتاق</li>
                </ul>
                <h3>{{ $roomdetails->type->name }}</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Room Details Area End -->
    <div class="room-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="room-details-side">
                        <div class="side-bar-form">
                            <h3>صفحه رزرو </h3>
                            <form action="{{ route('add_booking' , ['room_id' => $roomdetails->id]) }}" method="POST">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>ورود</label>
                                            <div class="input-group">
                                                <input id="datetimepicker" type="text" class="form-control"
                                                       placeholder="09/29/2020" name="check_in">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>خروج</label>
                                            <div class="input-group">
                                                <input id="datetimepicker-check" type="text" class="form-control"
                                                       placeholder="09/29/2020" name="check_out">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>تعداد نفرات</label>
                                            <select class="form-control" name="persion">
                                                @for($i=1 ; $i<=$roomdetails->room_capacity ; $i++)
                                                    <option>{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>تعداد اتاق ها</label>
                                            <select class="form-control" name="number_of_rooms">
                                                {{ $number_of_room = RoomNumber::where('rooms_id' , $roomdetails->id)->where('status' , 'در دسترس')->count() }}
                                                @if($number_of_room > 0)
                                                    @for($j = 1 ; $j<=$number_of_room ; $j++)
                                                        <option>{{$j}}</option>
                                                    @endfor
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5"
                                                id="submit-btn">
                                            رزرو
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="room-details-article">

                        <div class="room-details-slider owl-carousel owl-theme">
                            @foreach ($multiImage as $image)
                                <div class="room-details-item">
                                    <img src="{{ asset('upload/roomimg/multi_img/'.$image->multi_img) }}" alt="Images">
                                </div>
                            @endforeach

                        </div>


                        <div class="room-details-title">
                            <h2>{{ $roomdetails->type->name }}</h2>
                            <ul>

                                <li>
                                    <b>هر شب : {{ $roomdetails->price }} تومان</b>
                                </li>

                            </ul>
                        </div>

                        <div class="room-details-content">
                            <p>
                                {!! $roomdetails->description !!}
                            </p>


                            <div class="side-bar-plan">
                                <h3>امکانات</h3>
                                <ul>
                                    @foreach ($facility as $fac)
                                        <li><a href="#">{{ $fac->facility_name }}</a></li>
                                    @endforeach
                                </ul>


                            </div>


                            <div class="row">
                                <div class="col-lg-6">


                                    <div class="services-bar-widget">
                                        <h3 class="title">جزئیات اتاق </h3>
                                        <div class="side-bar-list">
                                            <ul>
                                                <li>
                                                    <a href="#"> <b>گنجایش : </b> {{ $roomdetails->room_capacity }}
                                                        نفر <i class='bx bxs-cloud-download'></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"> <b>ابعاد : </b> {{ $roomdetails->size }}متر مربع <i
                                                            class='bx bxs-cloud-download'></i></a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-lg-6">
                                    <div class="services-bar-widget">
                                        <h3 class="title">جزئیات مکانی </h3>
                                        <div class="side-bar-list">
                                            <ul>
                                                <li>
                                                    <a href="#"> <b>چشم انداز : </b> {{ $roomdetails->view }} <i
                                                            class='bx bxs-cloud-download'></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"> <b>نوع تخت : </b> {{ $roomdetails->bed_style }} <i
                                                            class='bx bxs-cloud-download'></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        {{--                    <div class="room-details-review">--}}
                        {{--                        <h2>Clients Review and Retting's</h2>--}}
                        {{--                        <div class="review-ratting">--}}
                        {{--                            <h3>Your retting: </h3>--}}
                        {{--                            <i class='bx bx-star'></i>--}}
                        {{--                            <i class='bx bx-star'></i>--}}
                        {{--                            <i class='bx bx-star'></i>--}}
                        {{--                            <i class='bx bx-star'></i>--}}
                        {{--                            <i class='bx bx-star'></i>--}}
                        {{--                        </div>--}}
                        {{--                        <form >--}}
                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-lg-12 col-md-12">--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <textarea name="message" class="form-control"  cols="30" rows="8" required data-error="Write your message" placeholder="Write your review here.... "></textarea>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="col-lg-12 col-md-12">--}}
                        {{--                                    <button type="submit" class="default-btn btn-bg-three">--}}
                        {{--                                        Submit Review--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Details Area End -->

    <!-- Room Details Other -->
    <div class="room-details-other pb-70">
        <div class="container">
            <div class="room-details-text">
                <h2>دیگر اتاق ها</h2>
            </div>

            <div class="row ">

                @foreach ($otherRooms as $item)
                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="{{ url('room/details/'.$item->id) }}">
                                            <img src="{{ asset( 'upload/roomimg/'.$item->image ) }}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                        <h3>
                                            <a href="{{ url('room/details/'.$item->id) }}">{{ $item['type']['name'] }}</a>
                                        </h3>
                                        <span>تومان {{ $item->price }} / هر شب </span>
                                        {{--                                <div class="rating">--}}
                                        {{--                                    <i class='bx bxs-star'></i>--}}
                                        {{--                                    <i class='bx bxs-star'></i>--}}
                                        {{--                                    <i class='bx bxs-star'></i>--}}
                                        {{--                                    <i class='bx bxs-star'></i>--}}
                                        {{--                                    <i class='bx bxs-star'></i>--}}
                                        {{--                                </div>--}}
                                        <p>{{ $item->short_desc }}</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> {{ $item->room_capacity }} نفر</li>
                                            <li><i class='bx bx-expand'></i>  {{ $item->size }} مترمربع </li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i>{{ $item->view }}</li>
                                            <li><i class='bx bxs-hotel'></i> {{ $item->bed_style }}</li>
                                        </ul>

                                        <a href="{{ url('room/details/'.$item->id) }}" class="book-more-btn">
                                           رزرو کنید
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
    <!-- Room Details Other End -->


    <script>
        document.getElementById('submit-btn').addEventListener('click', function (e) {
            var checkInDate = document.getElementById('datetimepicker').value;
            var checkOutDate = document.getElementById('datetimepicker-check').value;

            // Convert input values to Date objects
            var checkIn = new Date(checkInDate);
            var checkOut = new Date(checkOutDate);

            if (checkOut <= checkIn) {
                alert("Check-out date must be after the check-in date.");
                e.preventDefault();  // Prevent form submission if validation fails
            }
        });

    </script>

@endsection
