<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::all();
        return view('admin.class-list')->with(['courses'=>$courses]);
    }

    public function create()
    {
        $coaches=User::where('type','coach')->get();
        return view('admin.add-course')->with(['coaches'=>$coaches]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type'=>['required'],
            'name'=>['required'],
            'price'=>['required','numeric'],
            'start'=>['required'],
            'coach_id'=>['required']
        ]);
        $course=new Course();
        $course->type=$request->type;
        $course->name=$request->name;
        $course->price=$request->price;
        $course->start=$request->start;
        $course->coach_id=$request->coach_id;
        $course->save();
        return redirect()->to(route('admin.index.course'))->with('message','ok');
    }

    public function edit($id)
    {
        $course=Course::find($id);
        $coaches=User::where('type','coach')->get();
        return view('admin.edit-course')->with(['course'=>$course,'coaches'=>$coaches]);
    }

    public function update(Request $request,$id)
    {
        $course=Course::find($id);
        $request->validate([
            'type'=>['required'],
            'name'=>['required'],
            'price'=>['required','numeric'],
            'start'=>['required'],
            'coach_id'=>['required']
        ]);
        $course->type=$request->type;
        $course->name=$request->name;
        $course->price=$request->price;
        $course->start=$request->start;
        $course->coach_id=$request->coach_id;
        $course->save();
        return redirect()->to(route('admin.index.course'))->with('message','ok');
    }

    public function destroy($id)
    {
        $course=Course::find($id);
        $course->delete();
        return redirect()->to(route('admin.index.course'))->with('message','ok');
    }

    public function course_users($id)
    {
        $list=Register::where('course_id',$id)->get();
        return view('admin.course-user-list')->with(['list'=>$list]);
    }

}
