<?php

namespace App\Http\Controllers;

use App\Age;
use App\Firstname;
use App\Lastname;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userPage(){

        $users=User::query()->limit(10)->get();
        return view('userPage',compact('users'));
    }

    public function dashboard(){

        $users=User::query()->paginate(100);
        return view('dashboard',compact('users'));
    }

    public  function userAccount($id){
        $user = User::query()->find($id);
        return view('userAccount',compact('user'));
    }

    public  function myAccount($id){
        $user = User::query()->find($id);
        return view('myAccount',compact('user'));
    }
    public  function updateMyInfo($id){
        $user = User::query()->find($id);
        return view('updateMyInfo',compact('user'));
    }

    public function deleteUser($id)
    {
        User::query()->find($id)->delete();
        return redirect()->action('UserController@dashboard');
    }

    public function makeAdmin($id)
    {
        $user=User::query()->find($id);
        $user->admin=true;
        $user->save();
        return back();
    }
    public function makeRegularUser($id)
    {
        $user=User::query()->find($id);
        $user->admin=false;
        $user->save();
        return back();
    }

    public function deleteMyAccount($id)
    {
        User::query()->find($id)->delete();
        return redirect()->route('logout');
    }

    public function update(Request $request)
    {
        $user=User::query()->find($request->id);
       User::query()->find($request->id)->update([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'country' => $request->country,
            'city' => $request->city,
        ]);

       Firstname::where('user_id', $request->id) ->update([
           'firstname'=> $request->firstname,
       ]);
        Lastname::where('user_id', $request->id) ->update([
            'lastname'=> $request->lastname,
        ]);
        Age::where('user_id', $request->id) ->update([
            'age'=> $request->age,
        ]);


        return back();
    }
}
