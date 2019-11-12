@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="background-color: #fff;min-height: 500px">
        <a href="{{route('myAccount',$user->id)}}"><button class="btn-primary btn mt-3">GO BACK</button></a>
        <div class="row justify-content-center">
            <div class="col-md-6" style="background-color: #80808012">
                <h2 class="text-center" style="color: #6cb2eb">{{$user->login}}</h2>
                <form method="POST" action="{{ route('update') }}">
                    @csrf
                    <input type="hidden" value="{{$user->id}}" name="id">
                <div class="row mt-4">
                    <div class="col-6">
                        <label class="label2" for="loginUp">Login:</label>
                            <input id="loginUp" type="text" class="form-control " name="login"  required  autofocus value="{{$user->login}}">
                    </div>
                    <div class="col-6">
                        <label class="label2" for="emailUp">Email:</label>
                        <input id="emailUp" type="email" class="form-control " name="email"  required  autofocus value="{{$user->email}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label  class="label2" for="passwordUp">Password:</label>
                        <input id="passwordUp" type="password" class="form-control " name="password"  required  autofocus>
                    </div>
                    <div class="col-6">
                        <label  class="label2" for="ageUp">Age:</label>
                        <input id="ageUp" type="number" class="form-control " name="age"  required  autofocus value="{{$user->age->age}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label  class="label2" for="nameUp">Name:</label>
                        <input id="nameUp" type="text" class="form-control " name="firstname"  required  autofocus value="{{$user->firstname->firstname}}">
                    </div>
                    <div class="col-6">
                        <label  class="label2" for="surnameUp">Surname:</label>
                        <input id="surnameUp" type="text" class="form-control " name="lastname"  required  autofocus value="{{$user->lastname->lastname}}">
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <label  class="label2" for="countryUp">Country:</label>
                            <input id="countryUp" type="text" class="form-control " name="country"  required  autofocus value="{{$user->country}}">
                        </div>
                        <div class="col-6">
                            <label  class="label2" for="cityUp">City:</label>
                            <input id="cityUp" type="text" class="form-control " name="city"  required  autofocus value="{{$user->city}}">
                        </div>
                    </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label  class="label2">Gender:</label>
                        <div>
                            <input type="radio" name="gender" value="0"  required @if(!($user->gender)) checked @endif>Male
                            <input type="radio" name="gender" value="1"  required style="margin-left: 20px"  @if($user->gender) checked @endif>Female
                        </div>
                    </div>

                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-6 offset-5">
                            <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
