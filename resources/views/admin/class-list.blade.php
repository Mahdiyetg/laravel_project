@extends('admin.app-layout')

@section('content')
    <h2>لیست کلاس های ورزشی</h2>
    @if(session()->has('message'))
        <h4 class="alert text-success text-center py-3">
            عملیات موفقیت آمیز!
        </h4>
    @endif
    <div class="row table-responsive">
        <table class="table d-table table-striped">
            <tr class="font-weight-bold table-danger">
                <td>نام کلاس</td>
                <td>نوع کلاس</td>
                <td>نام مربی</td>
                <td>عملیات</td>
            </tr>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td>{{($course->type=='online')?"آنلاین":"حضوری"}}</td>
                <td>{{$course->coach['name']}} </td>
                <td>
                    <a onclick="return confirm('آیا کلاس حذف شود؟')" class="btn btn-danger btn-sm" href="{{route('admin.destroy.course',$course->id)}}">حذف</a>
                    <a class="btn btn- btn-warning btn-sm mx-2" href="{{route('admin.edit.course',$course->id)}}">ویرایش</a>
                    <a class="btn btn-primary btn-sm" href="{{route('admin.course.users',$course->id)}}">لیست ثبت نام</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
@endsection
