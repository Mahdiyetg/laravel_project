@extends('layouts.app')

@section('content')

   <div class="container">
       <h2>لیست  کلاس های من </h2>

       <div class="row table-responsive">
           <table class="table d-table table-striped">
               <tr class="font-weight-bold table-danger">
                   <td>نام کلاس</td>
                   <td>نام مربی</td>
                   <td>سانس شروع</td>
                   <td>نوع  کلاس</td>
                   <td>عملیات</td>
               </tr>

               @foreach($list as $item)
                   <tr >
                       <td>{{$item->course['name']}}</td>
                       <td>{{$item->user['name']}}</td>
                       <td>{{$item->course['start']}} </td>
                       <td>{{($item->course->type=='online')?"آنلاین":"حضوری"}}</td>
                       <td>
                           <a onclick="return confirm('آیا ثبت نام حذف شود؟')" href="{{route('admin.register.destroy',$item->id)}}" class="btn btn-outline-danger">حذف</a>
                       </td>
                   </tr>
               @endforeach

           </table>
       </div>
   </div>
@endsection
