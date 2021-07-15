@extends('admin.app-layout')

@section('content')
    <h2>افزودن مربی ورزشی  </h2>
    @include('errors')
    <form method="post" action="{{route('admin.store.coach')}}">
        @csrf
        <div class="form-row mt-3">
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right">نام مربی  :</label>
                <input type="text" class="form-control" name="name" placeholder="نام مربی ">
            </div>
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right"> ایمیل  :</label>
                <input type="email" class="form-control" name="email" placeholder="ایمیل مربی ">
            </div>
        </div>

        <div class="form-group text-center mt-3">
            <button class="btn btn-success">افزودن</button>
        </div>
    </form>
@endsection
