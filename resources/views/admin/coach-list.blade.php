@extends('admin.app-layout')

@section('content')
    <h2>لیست مربیان  </h2>
    @if(session()->has('message'))
        <h4 class="alert text-success text-center py-3">
            عملیات موفقیت آمیز!
        </h4>
    @endif
    <div class="row table-responsive">
        <table class="table d-table table-striped">
            <tr class="font-weight-bold table-danger">
                <td>نام و نام خانوادگی</td>
                <td>ایمیل </td>

                <td>عملیات</td>
            </tr>

            @foreach($coaches as $caoch )
                <tr>
                    <td>{{$caoch->name}}</td>
                    <td>{{$caoch->email}}</td>
                    <td>
                        <a onclick="return confirm('آیا مربی حذف شود ؟')" class="text-danger" href="{{route('admin.destroy.coach',$caoch->id)}}">حذف</a>
                    </td>

                </tr>
            @endforeach

        </table>
    </div>
@endsection
