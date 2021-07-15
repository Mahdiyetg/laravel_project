@extends('admin.app-layout')

@section('content')
    <h2>ویرایش کلاس ورزشی</h2>
    @include('errors')
    <form method="post" action="{{route('admin.update.course',$course->id)}}">
        @csrf
        @method("put")
        <div class="form-row mt-3">
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right">نوع کلاس  :</label>
                <div class="form-check form-check-inline">
                    <input @if($course->type=='online') checked @endif class="form-check-input" type="radio" name="type" id="inlineRadio1" value="online">
                    <label class="form-check-label px-3" for="inlineRadio1">آنلاین</label>
                </div>
                <div class="form-check form-check-inline">
                    <input @if($course->type=='presence') checked @endif class="form-check-input" type="radio" name="type" id="inlineRadio2" value="presence">
                    <label   class="form-check-label px-3" for="inlineRadio2">حضوری</label>
                </div>
            </div>

        </div>
        <div class="form-row mt-3">
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right">نام کلاس  :</label>
                <input value="{{$course->name}}" type="text" class="form-control" name="name" placeholder="نام کلاس ">
            </div>
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right">شهریه ماهانه  :</label>
                <input value="{{$course->price}}" type="text" class="form-control" name="price" placeholder="میزان شهریه ماهانه">
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right">سانس شروع :</label>
                <input value="{{$course->start}}" type="time" class="form-control" name="start" placeholder="سانس شروع  ">
            </div>
            <div class="col col-lg-4 text-right">
                <label for="" class="text-right">مربی کلاس  :</label>
                <select name="coach_id" id="" class="form-control">

                    <option value="">انتخاب مربی </option>
                        @foreach($coaches as $coach)
                            <option @if($course->coach_id==$coach->id) selected @endif value="{{$coach->id}}">{{$coach->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group text-center mt-3">
            <button class="btn btn-success">ویرایش</button>
        </div>
    </form>
@endsection
