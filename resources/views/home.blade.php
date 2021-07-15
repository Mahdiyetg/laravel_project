@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/header.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/slid1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/slide2.jpg')}}" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <h3 class="text-right my-4">وسایل باشگاه بدنسازی بیشتر بشناسید</h3>
    <div class="row  ">

        <div class="d-flex">
            <div class="">
                <img src="{{asset('img/slid1.jpg')}}" width="250" alt="">
            </div>
            <div class="text-justify px-3">
               <p>
                   بسیاری این سوال برایشان پیش می آید که آیا استفاده از وسایل باشگاه بدنسازی برای رسیدن به تناسب اندام و پرورش ماهیچه ها لازم است. حال آنکه می شود با چند وزنه نیز به خواست خود رسیده و حجم ماهیچه ها را افزایش داده و تمرینات بدنسازی را انجام دهیم. در این مطلب می کوشیم به ضرورت استفاده از وسایل بدنسازی در رسیدن به استایلی ورزشی پرداخته و مزایا و معایب دو شیوه تمرینی وزنه آزاد و دستگاه را برای شما بازگو نماییم.

               </p>
                <p>
                    نمی توان نادیده گرفت که وزنه آزاد نسبت به وسایل باشگاه بدنسازی طرفداران خاص خود را در بین ورزشکاران داشته و حتی اکثر آنها ترجیح می دهند از انواع و اقسام وزنه های سنگین و سبک برای رسیدن به اندامی ایدئال بهره ببرند از این رو بررسی هر یک از این دو روش و شناخت معایب و مزایای هر یک می تواند ورزشکاران را در تشخیص درست یاری رساند.
                </p>
            </div>
        </div>
    </div>
    <h4 class="py-3 text-right pt-4">آخرین مطالب</h4>
    <div class="row">
        <div class="d-flex flex-row flex-wrap">
            <div class="box">
                <div class="card-header">
                    <img src="{{asset('img/p1.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <p class="text-right">آشنایی با لوازم کراس فیت</p>
                    <p>
                        بسیار مشخص است که کراس فیت از زمره ی ورزش های بسیار موثر و کار آمد قرن بیستم است و تاثیر فوق العاده عمیقی در تمامی بخش های ورزش ما پدید آورد. شما با مطالعه مقاله آشنایی با کراس فیت به راحتی میتوانید با این ورزش و نکات و محدودیت های موجود در آن آشنا شوید
                    </p>
                    <a href="" class="text-danger">ادامه مطلب</a>
                </div>
            </div>
            <div class="box">
                <div class="card-header">
                    <img src="{{asset('img/p2.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <p class="text-right">وسایل بدنسازی</p>
                    <p>
                        رعایت نکاتی چند در پیمودن صحیح این راه الزامی است. در ابتدا تعیین کنید که هدف تان از تمرینات روزانه به صورت مشخص چیست سپس برای خود یک برنامه تمرینی دقیق طرح ریزی کرده و با پیروی از آن ، ورزش با انواع وسایل بدنسازی را آغاز نمایید علاوه براین رعایت رژیم غذایی در  ...
                    </p>
                    <a href="" class="text-danger">ادامه مطلب</a>
                </div>
            </div>
            <div class="box">
                <div class="card-header">
                    <img src="{{asset('img/p4.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <p class="text-right">تجهیزات بدنسازی</p>
                    <p>
                        عشق و علاقه به ورزش و پرورش اندام موضوعی نیست که به تازگی فکر و ذهن افراد را درگیر کرده باشد. از زمان های دور نیز افراد برای آنکه بتوانند خود را در جمع شاخص تر نشان داده و یک سرو گردن از رقیبانشان برتر باشند به پرورش ماهیچه های خود فکر می کردند
                    </p>
                    <a href="" class="text-danger">ادامه مطلب</a>
                </div>
            </div>
            <div class="box">
                <div class="card-header">
                    <img src="{{asset('img/p3.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <p class="text-right">وسایل باشگاه بدنسازی بیشتر بشناسید </p>
                    <p>
                        بسیاری این سوال برایشان پیش می آید که آیا استفاده از وسایل باشگاه بدنسازی برای رسیدن به تناسب اندام و پرورش ماهیچه ها لازم است. حال آنکه می شود با چند وزنه نیز به خواست خود رسیده و حجم ماهیچه ها را افزایش داده و تمرینات بدنسازی را انجام <دهیم></دهیم>                    </p>
                    <a href="" class="text-danger">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <footer class="mt-md-5">
            <p class="text-center text-secondary">EmailClub@Email.com</p>
            <p class="text-center text-secondary">کلیه حقوق سایت محفوظ می باشد!</p>
        </footer>
    </div>
</div>
@endsection
