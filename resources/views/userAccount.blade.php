@extends('layouts.app')

@section('content')


    <div class="container-fluid" style="background-color: #fff;min-height: 500px;margin-top: 2rem">
        <a href="{{route('dashboard')}}"><button class="btn-primary btn mt-3">GO BACK</button></a>
        <div class="row justify-content-center">
            <div class="col-md-6" style="background-color: #80808012">
                <h2 class="text-center" style="color: #6cb2eb">{{$user->login}}</h2>
                <div class="row mt-5">
                    <div class="col-6">
                        <span class="label2">Login:</span>
                        <span> {{$user->login}}</span>
                    </div>
                    <div class="col-6">
                        <span class="label2">Email:</span>
                        <span>{{$user->email}}</span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-6">
                        <span class="label2">Name:</span>
                        <span>{{$user->firstname->firstname}}</span>
                    </div>
                    <div class="col-6">
                        <span class="label2">Surname:</span>
                        <span>{{$user->lastname->lastname}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <span class="label2">Gender:</span>
                        @if($user->gender)
                            <span>Male</span>
                        @else
                            <span>Female</span>
                        @endif
                    </div>
                    <div class="col-6">
                        <span class="label2">Age:</span>
                        <span>{{$user->age->age}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <span class="label2">Country:</span>
                        <span>{{$user->country}}</span>
                    </div>
                    <div class="col-6">
                        <span class="label2">City:</span>
                        <span>{{$user->city}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <span class="label2">Status:</span>
                        @if($user->admin)
                            <span>Admin</span>
                        @else
                            <span>User</span>
                        @endif
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <div class="col-4 offset-2">
                        @if($user->admin)
                            <a href="{{route('makeRegularUser',$user->id)}}">
                                <button type="button" class="btn btn-primary">Make Regular User</button>
                            </a>
                        @else
                            <a href="{{route('makeAdmin',$user->id)}}">
                                <button type="button" class="btn btn-primary">Make Admin</button>
                            </a>
                        @endif
                    </div>
                    <div class="col-4">
                        <a href="#deleteUser"  rel="modal:open"><button class="btn-danger btn modalButton">Delete this User</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="deleteUser" class="modal">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <p>Delete user {{$user->login}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('deleteUser',$user->id)}}">
                        <button type="button" class="btn btn-danger delete">Yes</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" rel="modal:close">
                        <button type="button" class="btn btn-primary delete">No</button>

                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
