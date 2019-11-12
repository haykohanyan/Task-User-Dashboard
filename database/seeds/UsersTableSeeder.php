<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
       factory(\App\User::class,40000)->create()->each(function ($user){
        $user->firstname()->save(factory(App\Firstname::class,'firstname')->make());
        $user->lastname()->save(factory(App\Lastname::class,'lastname')->make());
        $user->age()->save(factory(App\Age::class,'age')->make());
       });
    }
}
