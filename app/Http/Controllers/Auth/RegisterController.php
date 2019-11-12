<?php

namespace App\Http\Controllers\Auth;

use App\Firstname;
use App\Http\Controllers\Controller;
use App\Lastname;
use App\Age;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/userPage';


    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'login' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'age' => ['required', 'integer', 'min:1','max:100'],
            'gender'=> 'required',
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
       $user = User::create([
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'country' => $data['country'],
            'city' => $data['city'],
        ]);
        Firstname::create([
            'firstname' => $data['firstname'],
            'user_id' => $user->id,
        ]);
        Lastname::create([
            'lastname' => $data['lastname'],
            'user_id' => $user->id,
        ]);
        Age::create([
            'age' => $data['age'],
            'user_id' => $user->id,
        ]);

        return $user;
    }
}
