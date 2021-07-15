@extends('admin.app-layout')

@section('content')
    <h2>لیست ورزشکاران </h2>
    @if(session()->has('message'))
        <h4 class="alert text-success text-center py-3">
            عملیات موفقیت آمیز!
        </h4>
    @endif
    <div class="row table-responsive">
        <table class="table d-table table-striped">
            <tr class="font-weight-bold table-danger">
                <td>نام و نام خانوادگی</td>
                <td>ایمیل  </td>
                <td>عملیات</td>
            </tr>

            @foreach($list as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a onclick="return confirm('آیا کاربر نام حذف شود؟')" href="{{route('admin.destroy.user',$user->id)}}" class="mx-2 text-danger">حذف</a>
                        <a href="{{route('admin.list.user',$user->id)}}"> لیست کلاس ها</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
