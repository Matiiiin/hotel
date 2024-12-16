@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"> شماره اتاق</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">ویرایش شماره اتاق</li>
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

            <form action="{{ route('update.roomno',$editroomno->id) }}" method="post" enctype="multipart/form-data">
                @csrf


            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">شماره اتاق </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="room_no" class="form-control" value="{{ $editroomno->room_no }}"  />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">حالت اتاق </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <select name="status" id="input7" class="form-select">
                            <option selected="">حالت را انتخاب کنید</option>
                            <option value="در دسترس" {{ $editroomno->status == 'در دسترس'?'selected':''}}> در دسترس </option>
                            <option value="رزرو شده" {{ $editroomno->status == 'رزرو شده'?'selected':''}}>رزرو شده </option>
{{--                            <option value="reserved" {{ $editroomno->status == 'reserved'?'selected':''}}>Reserved </option>--}}
                        </select>
                    </div>
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


@endsection
