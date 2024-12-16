@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">تمامی اعضا</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.team') }}" class="btn btn-primary px-5">اضافه کردن</a>

            </div>
        </div>
    </div>
    <!--end breadcrumb-->



    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>عکس</th>
                            <th>نام</th>
                            <th>رتبه شغلی</th>
                            <th>فیسبوک</th>
                            <th>لینکدین</th>
                            <th>اینستاگرام</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($team as $key=> $item )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> <img src="{{ asset('/upload/team/'.$item->image) }}" alt="" style="width:70px; height:40px;" > </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->postion }}</td>
                            <td>{{ $item->facebook }}</td>
                            <td>{{ $item->linkedin }}</td>
                            <td>{{ $item->instagram }}</td>
                            <td>
{{--     @if(Auth::user()->can('team.edit'))--}}
    <a href="{{ route('edit.team',$item->id) }}" class="btn btn-warning px-3 radius-30"> ویرایش</a>
{{--    @endif--}}

{{--    @if(Auth::user()->can('team.delete'))--}}
    <a href="{{ route('delete.team',$item->id) }}" class="btn btn-danger px-3 radius-30" id="delete">حذف</a>
{{--    @endif--}}

                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <hr/>

</div>




@endsection
