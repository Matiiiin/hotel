@php
    $team = App\Models\Team::all();
@endphp

<div class="team-area-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">تیم</span>
            <h2>بیایید با اعضای ویژه تیم خود ملاقات کنیم.
            </h2>
        </div>
        <div class="team-slider-two owl-carousel owl-theme pt-45">
            @foreach ($team as $item)
            <div class="team-item">
                <a href="#">
                    <img src="{{ asset('upload/team/'.$item->image) }}" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="#">{{ $item->name }}</a></h3>
                    <span>{{ $item->postion }}</span>
                    <ul class="social-link">
                        <li>
                            <a href="{{$item->facebook != "" ? $item->facebook : '#'}}" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="{{$item->linkedin != "" ? $item->linkedin : '#'}}" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </li>
                        <li>
                            <a href="{{$item->instagram != "" ? $item->instagram : '#'}}" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
