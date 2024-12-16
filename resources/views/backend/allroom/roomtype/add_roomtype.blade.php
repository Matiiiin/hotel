@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">مدیریت اتاق </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">اضافه کردن اتاق</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

    <div class="col-lg-8">
        <div class="card">

            <form id="myForm" action="{{ route('room.type.store') }}" method="post" enctype="multipart/form-data">
                @csrf

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0"> نام اتاق</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="text" name="roomtype_name" class="form-control"  />
                    </div>
                </div>
{{--                <div class="row mb-3"> --}}
{{--                    <div class="col-sm-3">--}}
{{--                        <h6 class="mb-0"> Room Name</h6>--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-sm-9 text-secondary">--}}
{{--                        <input type="text" name="room_name" class="form-control"  />--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">مجموع بزرگسال</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="number" min="0" name="total_adult" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">مجموع خردسال</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="number" min='0' name="total_child" class="form-control"  />
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="input3" class="form-label">عکس اصلی</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                    <img id="showImage" src="{{ (!empty($editData->image)) ? url('upload/roomimg/'.$editData->image) : url('upload/no_image.jpg') }}" alt="Admin" class="bg-primary mt-2" width="70" height="50">
                </div>

                <div class="col-md-6">
                    <label for="input4" class="form-label">عکسهای گالری اتاق</label>
                    <input type="file" name="multi_img[]" class="form-control" multiple id="multiImg" accept="image/*">
                    <div class="row mt-2" id="preview_img"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">قیمت هر شب</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="number" min="0" name="price" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">ابعاد</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="number" min="1" name="size" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">چشم انداز</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="text" name="view" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">مدل تخت</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <select name="bed_style" class="form-control" required>
                            <option value="" disabled selected>تخت را انتخاب کنید</option>
                            <option value="تک نفره" {{ old('bed_style') == 'تک نفره' ? 'selected' : '' }}>تک نفره</option>
                            <option value="دو نفره" {{ old('bed_style') == 'دو نفره' ? 'selected' : '' }}>دو نفره</option>
                            <option value="سایز کوچک" {{ old('bed_style') == 'سایز کوچک' ? 'selected' : '' }}>سایز کوچک</option>
                            <option value="سایز یزرگ" {{ old('bed_style') == 'سایز یزرگ' ? 'selected' : '' }}>سایز یزرگ</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">تخفیف</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="number" min="0" name="discount" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">توضیحات کوتاه</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="text" name="short_desc" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">نوضیحات کامل</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <textarea name="description" id="description" class="form-control" rows="6" placeholder="توضیحات کامل را اینجا وارد نمایید"></textarea>
                    </div>
                </div>
                <label class="form-label">
                    <h6>وضعیت</h6>
                </label><br>
                <div class="form-check-primary form-check form-switch">
                    <input class="form-check-input status-toggle large-checkbox" name="status" type="checkbox" id="flexSwitchCheckCheckedDanger" >
                    <label class="form-check-label" for="flexSwitchCheckCheckedDanger"> </label>
                </div>



                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="ذخیره" />
                    </div>
                </div>
            </div>
        </form>

        </div>



    </div>
						</div>
					</div>
				</div>
			</div>


            <script type="text/javascript">
                $(document).ready(function (){
                    $('#myForm').validate({
                        rules: {
                            name: {
                                required : true,
                            },


                        },
                        messages :{
                            name: {
                                required : 'Please Enter Team Name',
                            },



                        },
                        errorElement : 'span',
                        errorPlacement: function (error,element) {
                            error.addClass('invalid-feedback');
                            element.closest('.form-group').append(error);
                        },
                        highlight : function(element, errorClass, validClass){
                            $(element).addClass('is-invalid');
                        },
                        unhighlight : function(element, errorClass, validClass){
                            $(element).removeClass('is-invalid');
                        },
                    });
                });

            </script>


      <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

        </script>


<script>
    // Preview the selected main image
    $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    // Preview multiple gallery images
    $('#multiImg').change(function(){
        var multiImgPreview = $('#preview_img');
        multiImgPreview.html(''); // Clear previous previews
        var files = this.files;

        if (files) {
            $.each(files, function(index, file){
                var reader = new FileReader();
                reader.onload = function(e) {
                    multiImgPreview.append('<img src="'+e.target.result+'" class="col-3 img-thumbnail" width="60" height="50" />');
                }
                reader.readAsDataURL(file);
            });
        }
    });
</script>

@endsection
