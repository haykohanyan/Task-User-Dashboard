@extends('layouts.app')

@section('content')
    <div class="container-fluid " style="background-color: #fff;min-height: 500px;margin-top: 4rem">
        <div class="row justify-content-center" >
            <div class="col-md-8" >
                <div class="card text-center" style="height: 200px;margin-top: 150px">
                    <div class="card-header">Sorry</div>
                        <p class="mt-3">You don't have access to this page!</p>
                    <a href="{{route('userPage')}}"><button class="btn-primary btn mt-3">GO BACK</button></a>
                    </div>
                </div>
            </div>
        </div>
@endsection
