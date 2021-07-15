<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>پنل مدیریت</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="rtl" dir="rtl">
<div id="app">

    @if(auth()->user()->type=='user')
        @php
            auth()->logout();
        @endphp
        @endif
    <div class="container-fluid d-flex">
        <aside>
            <ul class="list-group mx-0 p-0">
                <li class="list-group-item"><a href="{{route('admin.create.course')}}">افزودن کلاس</a></li>
                <li class="list-group-item"><a href="{{route('admin.index.course')}}">لیست کلاس</a></li>
                <li class="list-group-item"><a href="{{route('admin.create.coach')}}">افزودن مربی</a></li>
                <li class="list-group-item"><a href="{{route('admin.index.coach')}}">لیست مربیان</a></li>
                <li class="list-group-item"><a href="{{route('admin.register.index')}}">لیست ثبت نام</a></li>
                <li class="list-group-item"><a href="{{route('admin.list.users')}}">لیست ورزشکاران</a></li>
                <li class="list-group-item"><a href="{{route('admin.logout')}}">خروج </a></li>
            </ul>
        </aside>
        <main class="py-4 content">
            @yield('content')
        </main>
    </div>


</div>
</body>
</html>

