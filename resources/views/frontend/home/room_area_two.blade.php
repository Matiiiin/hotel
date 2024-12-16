@php
    $room = App\Models\Room::find(5);
@endphp

<div class="book-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="book-content-two">
                    <div class="section-title">
                        <h2 class="sp-color">{{ $room->name }}</h2>
{{--                        <h2>{{ $bookarea->main_title }}</h2>--}}
                        <h3>
                            {{ $room->short_desc }}
                        </h3>
                        <p>
                            {{ $room->description }}
                        </p>
                    </div>
                    <a href="{{route('RoomDetailsPage' ,$room->id)}}" class="default-btn btn-bg-three">رزرو سریع</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="{{ asset('upload/roomimg/'.$room->image) }}" alt="Images" width="650px" height="550px">
                </div>
            </div>
        </div>
    </div>
</div>
