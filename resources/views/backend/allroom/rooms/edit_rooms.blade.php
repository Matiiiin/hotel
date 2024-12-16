@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">

        <div class="container">
            <div class="main-body">
                <div class="row">


                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-primary" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                                       aria-selected="true">
                                        <div class="d-flex align-items-center">
                                            <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                                            </div>
                                            <div class="tab-title">مدیریت اتاق</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab"
                                       aria-selected="false" tabindex="-1">
                                        <div class="d-flex align-items-center">
                                            <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                                            </div>
                                            <div class="tab-title">شماره اتاق</div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <div class="tab-content py-3">
                                <div class="tab-pane fade active show" id="primaryhome" role="tabpanel">

                                    <div class="col-xl-12 mx-auto">

                                        <div class="card">
                                            <div class="card-body p-4">
                                                <h5 class="mb-4">ویرایش اتاق </h5>

                                                <form class="row g-3" action="{{ route('update.room',$editData->id) }}"
                                                      method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="col-md-4">
                                                        <label for="input1" class="form-label">نام اتاق </label>
                                                        <input type="text" name="roomtype_id" class="form-control"
                                                               id="input1" value="{{ $editData['type']['name'] }}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">مجموع بزرگسال</label>
                                                        <input type="text" name="total_adult" class="form-control"
                                                               id="input2" value="{{ $editData->total_adult }}">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">محموع خردسال </label>
                                                        <input type="text" name="total_child" class="form-control"
                                                               id="input2" value="{{ $editData->total_child }}">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <label for="input3" class="form-label">عکس اصلی </label>
                                                        <input type="file" name="image" class="form-control" id="image">

                                                        <img id="showImage"
                                                             src="{{ (!empty($editData->image)) ? url('upload/roomimg/'.$editData->image) : url('upload/no_image.jpg') }}"
                                                             alt="Admin" class="bg-primary" width="70" height="50">
                                                    </div>


                                                    <div class="col-md-6">
                                                        <label for="input4" class="form-label">عکسهای گالری </label>
                                                        <input type="file" name="multi_img[]" class="form-control"
                                                               multiple id="multiImg"
                                                               accept="image/jpeg, image/jpg, image/gif, image/png">

                                                        @foreach ($multiimgs as $item)

                                                            <img
                                                                src="{{ (!empty($item->multi_img)) ? url('upload/roomimg/multi_img/'.$item->multi_img) : url('upload/no_image.jpg') }}"
                                                                alt="Admin" class="bg-primary" width="60">

                                                            <a href="{{ route('multi.image.delete',$item->id) }}"><i
                                                                    class="lni lni-close"></i> </a>

                                                        @endforeach


                                                        <div class="row" id="preview_img"></div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <label for="input1" class="form-label">قیمت هر شب </label>
                                                        <input type="text" name="price" class="form-control" id="input1"
                                                               value="{{ $editData->price }}">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="input2" class="form-label">ابعاد </label>
                                                        <input type="text" name="size" class="form-control" id="input2"
                                                               value="{{ $editData->size }}">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="input2" class="form-label">تخفیف</label>
                                                        <input type="text" name="discount" class="form-control"
                                                               id="input2" value="{{ $editData->discount }}">
                                                    </div>

{{--                                                    <div class="col-md-3">--}}
{{--                                                        <label for="input2" class="form-label">گنجایش اتاق</label>--}}
{{--                                                        <input type="text" name="room_capacity" class="form-control" id="input2" value="{{ $editData->room_capacity }}" readonly>--}}
{{--                                                    </div>--}}


                                                    {{--        <div class="col-md-6">--}}
                                                    {{--            <label for="input7" class="form-label">Room View </label>--}}
                                                    {{--            <select name="view" id="input7" class="form-select">--}}
                                                    {{--                <option selected="">Choose...</option>--}}
                                                    {{--                <option value="Sea View" {{ $editData->view == 'Sea View'?'selected':''}}>Sea View </option>--}}
                                                    {{--                <option value="Hill View" {{ $editData->view == 'Hill View'?'selected':''}}>Hill View </option>--}}

                                                    {{--            </select>--}}
                                                    {{--        </div>--}}
                                                    <div class="col-md-6">
                                                        <div class="col-sm-3">چشم انداز
                                                        </div>
                                                        <div class="form-group col-sm-9 text-secondary">
                                                            <input type="text" value="{{$editData->view}}" name="view"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="input7" class="form-label">نوع تخت</label>
                                                        <select name="bed_style" id="input7" class="form-select">
                                                            <option selected="">نوع تخت را انتخاب کنید</option>
                                                            <option
                                                                value="تک نفره" {{ $editData->bed_style == 'تک نفره'?'selected':''}}>
                                                                تک نفره
                                                            </option>
                                                            <option
                                                                value="دو نفره" {{ $editData->bed_style == 'دو نفره'?'selected':''}}>
                                                                دو نفره
                                                            </option>
                                                            <option
                                                                value="سایز یزرگ" {{ $editData->bed_style == 'سایز یزرگ'?'selected':''}}>
                                                               سایز یزرگ
                                                            </option>
                                                            <option
                                                                value="سایز کوچک" {{ $editData->bed_style == 'سایز کوچک'?'selected':''}}>
                                                                سایز کوچک
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="input11" class="form-label">توضیحات کوتاه</label>
                                                        <textarea name="short_desc" class="form-control" id="input11"
                                                                  placeholder="Address ..."
                                                                  rows="3">{{ $editData->short_desc }}</textarea>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="input11" class="form-label"> نوضیحات کامل
                                                        </label>
                                                        <textarea name="description" class="form-control"
                                                                  id="myeditorinstance">{!! $editData->description !!}</textarea>
                                                    </div>


                                                    <div class="row mt-2">
                                                        <div class="col-md-12 mb-3">
                                                            @forelse ($basic_facility as $item)
                                                                <div class="basic_facility_section_remove"
                                                                     id="basic_facility_section_remove">
                                                                    <div class="row add_item">
                                                                        <div class="col-md-8">
                                                                            <label for="facility_name"
                                                                                   class="form-label"> امکانات رفاهی</label>
                                                                            <select name="facility_name[]"
                                                                                    id="facility_name"
                                                                                    class="form-control">
                                                                                <option value="">امکانات را انتخاب کنید
                                                                                </option>
                                                                                <option
                                                                                    value="صبحانه" {{$item->facility_name == 'صبحانه'?'selected':''}}>
                                                                                    صبحانه
                                                                                </option>
                                                                                <option
                                                                                    value="تلویزیون" {{$item->facility_name == 'تلویزیون'?'selected':''}}>
                                                                                    تلویزیون
                                                                                </option>

                                                                                <option
                                                                                    value="هشدار حریق" {{$item->facility_name == 'هشدار حریق'?'selected':''}}>
                                                                                    هشدار حریق
                                                                                </option>

{{--                                                                                <option--}}
{{--                                                                                    value="Minibar" {{$item->facility_name == 'Complimentary Breakfast'?'selected':''}}>--}}
{{--                                                                                    --}}
{{--                                                                                </option>--}}

                                                                                <option
                                                                                    value="میز کار" {{$item->facility_name == 'میز کار'?'selected':''}}>
                                                                                    میز کار
                                                                                </option>

                                                                                <option
                                                                                    value="وای فای رایگان" {{$item->facility_name == 'وای فای رایگان'?'selected':''}}>
                                                                                    وای فای رایگان
                                                                                </option>

                                                                                <option
                                                                                    value="جعبه کمک های اولیه" {{$item->facility_name == 'جعبه کمک های اولیه'?'selected':''}} >
                                                                                    جعبه کمک های اولیه
                                                                                </option>

                                                                                <option
                                                                                    value="سردوش حمام" {{$item->facility_name == 'سردوش حمام'?'selected':''}} >
                                                                                    سردوش حمام
                                                                                </option>

                                                                                <option
                                                                                    value="دمپایی" {{$item->facility_name == 'دمپایی'?'selected':''}} >
                                                                                    دمپایی
                                                                                </option>

                                                                                <option
                                                                                    value="سشوار" {{$item->facility_name == 'سشوار'?'selected':''}} >
                                                                                    سشوار
                                                                                </option>

{{--                                                                                <option--}}
{{--                                                                                    value="Wake-up service" {{$item->facility_name == 'Wake-up service'?'selected':''}}>--}}
{{--                                                                                    سرویس صب--}}
{{--                                                                                </option>--}}

                                                                                <option
                                                                                    value="لباسشویی" {{$item->facility_name == 'لباسشویی'?'selected':''}} >
                                                                                    لباسشویی
                                                                                </option>

                                                                                <option
                                                                                    value="قفل الکترونیکی در" {{$item->facility_name == 'قفل الکترونیکی در'?'selected':''}}>
                                                                                    قفل الکترونیکی در
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group"
                                                                                 style="padding-top: 30px;">
                                                                                <a class="btn btn-success addeventmore"><i
                                                                                        class="lni lni-circle-plus"></i></a>
                                                                                <span
                                                                                    class="btn btn-danger btn-sm removeeventmore"><i
                                                                                        class="lni lni-circle-minus"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            @empty

                                                                <div class="basic_facility_section_remove"
                                                                     id="basic_facility_section_remove">
                                                                    <div class="row add_item">
                                                                        <div class="col-md-6">
                                                                            <label for="basic_facility_name"
                                                                                   class="form-label">امکانات رفاهی</label>
                                                                            <select name="facility_name[]"
                                                                                    id="basic_facility_name"
                                                                                    class="form-control">
                                                                                <option value="">امکانات را انتخاب کنید
                                                                                </option>
                                                                                <option
                                                                                    value="صبحانه" {{$item->facility_name == 'صبحانه'?'selected':''}}>
                                                                                    صبحانه
                                                                                </option>
                                                                                <option
                                                                                    value="تلویزیون" {{$item->facility_name == 'تلویزیون'?'selected':''}}>
                                                                                    تلویزیون
                                                                                </option>

                                                                                <option
                                                                                    value="هشدار حریق" {{$item->facility_name == 'هشدار حریق'?'selected':''}}>
                                                                                    هشدار حریق
                                                                                </option>

                                                                                {{--                                                                                <option--}}
                                                                                {{--                                                                                    value="Minibar" {{$item->facility_name == 'Complimentary Breakfast'?'selected':''}}>--}}
                                                                                {{--                                                                                    --}}
                                                                                {{--                                                                                </option>--}}

                                                                                <option
                                                                                    value="میز کار" {{$item->facility_name == 'میز کار'?'selected':''}}>
                                                                                    میز کار
                                                                                </option>

                                                                                <option
                                                                                    value="وای فای رایگان" {{$item->facility_name == 'وای فای رایگان'?'selected':''}}>
                                                                                    وای فای رایگان
                                                                                </option>

                                                                                <option
                                                                                    value="جعبه کمک های اولیه" {{$item->facility_name == 'جعبه کمک های اولیه'?'selected':''}} >
                                                                                    جعبه کمک های اولیه
                                                                                </option>

                                                                                <option
                                                                                    value="سردوش حمام" {{$item->facility_name == 'سردوش حمام'?'selected':''}} >
                                                                                    سردوش حمام
                                                                                </option>

                                                                                <option
                                                                                    value="دمپایی" {{$item->facility_name == 'دمپایی'?'selected':''}} >
                                                                                    دمپایی
                                                                                </option>

                                                                                <option
                                                                                    value="سشوار" {{$item->facility_name == 'سشوار'?'selected':''}} >
                                                                                    سشوار
                                                                                </option>

                                                                                {{--                                                                                <option--}}
                                                                                {{--                                                                                    value="Wake-up service" {{$item->facility_name == 'Wake-up service'?'selected':''}}>--}}
                                                                                {{--                                                                                    سرویس صب--}}
                                                                                {{--                                                                                </option>--}}

                                                                                <option
                                                                                    value="لباسشویی" {{$item->facility_name == 'لباسشویی'?'selected':''}} >
                                                                                    لباسشویی
                                                                                </option>

                                                                                <option
                                                                                    value="قفل الکترونیکی در" {{$item->facility_name == 'قفل الکترونیکی در'?'selected':''}}>
                                                                                    قفل الکترونیکی در
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group"
                                                                                 style="padding-top: 30px;">
                                                                                <a class="btn btn-success addeventmore"><i
                                                                                        class="lni lni-circle-plus"></i></a>

                                                                                <span
                                                                                    class="btn btn-danger removeeventmore"><i
                                                                                        class="lni lni-circle-minus"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            @endforelse


                                                        </div>
                                                    </div>
                                                    <br>


                                                    <div class="col-md-12">
                                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                                            <button type="submit" class="btn btn-primary px-4">ذخیره
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                {{-- // End primaryhome --}}


                                <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <a class="card-title btn btn-primary float-right" onclick="addRoomNo()"
                                               id="addRoomNo">
                                                <i class="lni lni-plus">اضافه کردن</i>
                                            </a>
                                            <div class="roomnoHide" id="roomnoHide">
                                                <form action="{{ route('store.room.no',$editData->id) }}" method="post">
                                                    @csrf

                                                    <input type="hidden" name="room_type_id"
                                                           value="{{ $editData->roomtype_id }}">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">شماره اتاق </label>
                                                            <input type="text" name="room_no" class="form-control"
                                                                   id="input2">
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="input7" class="form-label">حالت </label>
                                                            <select name="status" id="input7" class="form-select">
                                                                <option selected="">حالت را انتخاب کنید</option>
                                                                <option value="در دسترس">در دسترس </option>
                                                                <option value="رزرو شده">رزرو شده </option>
{{--                                                                <option value="reserved">Reserved </option>--}}

                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">

                                                            <button type="submit" class="btn btn-success"
                                                                    style="margin-top: 28px;">ذخیره
                                                            </button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                            <table class="table mb-0 table-striped" id="roomview">
                                                <thead>
                                                <tr>
                                                    <th scope="col">شماره اتاق</th>
                                                    <th scope="col">حالت</th>
                                                    <th scope="col">عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach ($allroomNo as $item)

                                                    <tr>
                                                        <td>{{ $item->room_no }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>
                                                            <a href="{{ route('edit.roomno',$item->id) }}"
                                                               class="btn btn-warning px-3 radius-30"> ویرایش</a>
                                                            <a href="{{ route('delete.roomno',$item->id) }}"
                                                               class="btn btn-danger px-3 radius-30" id="delete">
                                                                حذف</a>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>


                                        </div>
                                    </div>


                                </div>
                                {{-- // end PrimaryProfile --}}


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>


    <!--------===Show MultiImage ========------->
    <script>
        $(document).ready(function () {
            $('#multiImg').on('change', function () { //on file input change
                if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function (index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function (file) { //trigger function on successful read
                                return function (e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(100)
                                        .height(80); //create image element
                                    $('#preview_img').append(img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>


    <!--========== Start of add Basic Plan Facilities ==============-->
    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="basic_facility_section_remove" id="basic_facility_section_remove">
                <div class="container mt-2">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="basic_facility_name">امکانات رفاهی</label>
                            <select name="facility_name[]" id="basic_facility_name" class="form-control">
                                <option value="">امکانات را انتخاب کنید</option>
                                <option value="صبحانه">صبحانه</option>
                                <option value="تلویزیون"> تلویزیون</option>
                                <option value="هشدار حریق">هشدار حریق</option>
{{--                                <option value="Minibar"> Minibar</option>--}}
                                <option value="میز کار">میز کار</option>
                                <option value="وای فای رایگان">وای فای رایگان</option>
                                <option value="وای فای رایگان">جعبه کمک های اولیه</option>
{{--                                <option value="Rain Shower">Rain Shower</option>--}}
                                <option value="دمپایی">دمپایی</option>
                                <option value="سشوار">سشوار</option>
{{--                                <option value="Wake-up service">Wake-up service</option>--}}
                                <option value="لباسشویی">لباسشویی</option>
                                <option value="قفل الکترونیکی در">قفل الکترونیکی در</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 20px">
                            <span class="btn btn-success addeventmore"><i class="lni lni-circle-plus"></i></span>
                            <span class="btn btn-danger removeeventmore"><i class="lni lni-circle-minus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click", ".addeventmore", function () {
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function (event) {
                $(this).closest("#basic_facility_section_remove").remove();
                counter -= 1
            });
        });
    </script>
    <!--========== End of Basic Plan Facilities ==============-->

    <!--========== Start Room Number Add ==============-->
    <script>
        $('#roomnoHide').hide();
        $('#roomview').show();

        function addRoomNo() {
            $('#roomnoHide').show();
            $('#roomview').hide();
            $('#addRoomNo').hide();
        }

    </script>

    <!--========== End Room Number Add ==============-->

@endsection
