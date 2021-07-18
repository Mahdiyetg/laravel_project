<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Admincontroller extends Controller
{
    public function coach_list()
    {
        $coaches=User::where('type','coach')->get();
        return view('admin.coach-list')->with(['coaches'=>$coaches]);
    }
    public function create_coach()
    {
        return view('admin.add-coach');
    }

    public function store_coach(Request $request)
    {
        $request->validate([
            'email'=>['email','required']
        ]);

        $user=User::all()->where('email',$request->email)->first();
        if($user != null)
        {
        $user->type='coach';
        $user->save();
        return back()->with('message','انجام شد');
        }
        else
        return back()->with('message','کاربر وجود ندارد');

    }

    public function destroy_coach($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->to(route('admin.index.coach'))->with('message','ok');
    }

    public function users_list()
    {
        $list=User::where('type','user')->get();
        return view('admin.users-list')->with(['list'=>$list]);
    }

    public function user_list($id)
    {
        $list=Register::where('user_id',$id)->get();
        return view('admin.user-class-list')->with(['list'=>$list]);
    }

    public function destroy_user($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->to(route('admin.list.users'))->with('message','ok');
    }
}
