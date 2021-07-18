<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function index()
    {
        $list=Register::all();
        return view("admin.register-list")->with(['list'=>$list]);
    }
    public function create()
    {
        $courses=Course::all();
        return view('register_course')->with(['courses'=>$courses]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'course_id'=>'required'
        ]);
        $register=new Register();
        $register->user_id=auth()->id();
        $register->course_id=$request->course_id;
        $user_list=Register::where('user_id',auth()->id())->where('course_id',$request->course_id)->first();
        if ($user_list)
        {
            return redirect()->back()->withErrors(['e'=>'کلاس قبلا ثبت نام شده است']);
        }
        $register->save();
        return redirect()->back()->with('message','success');

    }

    public function destroy($id)
    {
        $reg=Register::find($id);
        $reg->delete();
        $user=Auth::user();
        if($user->type === 'admin')
        return redirect()->to(route('admin.index.course'))->with('message','ok');
        else
        return back();

    }

    public function user_list()
    {
        $list=Register::where('user_id',auth()->id())->get();
        return view('user-class-list')->with(['list'=>$list]);
    }
}
