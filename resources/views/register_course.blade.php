@extends('layouts.app')

@section('content')

    <div class="container">
        <h3 class="mb-3">ثبت نام کلاس</h3>
        @php
            $is_login=auth()->check();
        @endphp
        @if(session()->has('message'))
            <div class="alert alert-success font-weight-bold text-center">
               ثبت نام با موفقیت انجام شد
            </div>
        @endif
        @if(!$is_login)
            <div class="alert alert-warning font-weight-bold text-center">
                برای ثبت نام وارد حساب کاربری خود شوید
            </div>
        @endif

        @include('errors')
        <div class="row justify-content-center">


            <form action="{{route('course.register.store')}}" method="post">
                @csrf
                <div class="border d-flex alert-danger flex-wrap justify-content-around p-5 mt-4">
                @foreach($courses as $course)

                   <div class="form-group bg-light text-dark text-center ml-3 mt-3">
                       <div class="col d-flex justify-content-between   rounded p-4 border flex-column">
                           <h5 class="mt-2">{{$course->name}} </h5>
                           <h6 class="mt-2">{{$course->price}} تومان </h6>
                           <h6 class="mt-2">مربی : {{$course->coach['name']}}</h6>
                           <h6 class="text-info mt-3 font-weight-bold">{{($course->type=='online')?"آنلاین":"حضوری"}}</h6>
                       </div>
                       <input type="radio" value="{{$course->id}}" class="form-check-input" name="course_id">
                   </div>

                @endforeach
                </div>
                <div class="form-group text-center mt-3">
                    <button @if(!$is_login) disabled @endif class="btn btn-success px-5">ثبت نام</button>
                </div>
            </form>

        </div>
    </div>

@endsection
