@extends('admin.app-layout')

@section('content')
    <h2>افزودن مربی ورزشی  </h2>
    @include('errors')
    <form method="post" action="{{route('admin.store.coach')}}">
        @csrf
        <div class="form-row mt-3">
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right"> ایمیل  :</label>
                <input type="email" class="form-control" name="email" placeholder="ایمیل مربی ">
            </div>
        </div>

        <div class="form-group text-center mt-3">
            <button class="btn btn-success">افزودن</button>
        </div>

        @if(session('message')!==null)
        <div class=" mt-3 alert alert-info alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
    </form>
@endsection
