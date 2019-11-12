@extends('layouts.app')

@section('content')
    <div class="bg-image"></div>
    <div class="container content" style="margin-top: 80px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header text-center" style="font-size: 20px;font-weight: bold">{{ __('Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="row">
    <div class="col-md-6"> <div class="form-group row">
            <label for="login"   class="col-md-4 col-form-label text-md-right  label" >{{ __('Login') }}</label>

            <div class="col-md-6">
                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                @error('login')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email"   class="col-md-4 col-form-label text-md-right label">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password"   class="col-md-4 col-form-label text-md-right  label">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm"   class="col-md-4 col-form-label text-md-right  label">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row">
            <label for="gender"   class="col-md-4 col-form-label text-md-right  label">{{ __('Gender') }}</label>

            <div class="col-md-6">
                <div style="margin-top: 10px">
                    <label><input type="radio" name="gender" value="0" class=" @error('gender') is-invalid @enderror" required>Male</label>
                    <label><input type="radio" name="gender" value="1" class=" @error('gender') is-invalid @enderror" required style="margin-left: 10px">Female</label>
                </div>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-6">

        <div class="form-group row">
            <label for="age"  class="col-md-4 col-form-label text-md-right  label">{{ __('Age') }}</label>

            <div class="col-md-6">
                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" required >

                @error('age')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="firstname"  class="col-md-4 col-form-label text-md-right  label">{{ __('Firstname') }}</label>

            <div class="col-md-6">
                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="off" >

                @error('firstname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="lastname"  class="col-md-4 col-form-label text-md-right  label">{{ __('Lastname') }}</label>

            <div class="col-md-6">
                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="off" >

                @error('lastname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="country"   class="col-md-4 col-form-label text-md-right label">{{ __('Country') }}</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="off" >

                @error('country')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="city"   class="col-md-4 col-form-label text-md-right  label">{{ __('City') }}</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" >

                @error('city')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
                        <div class="row">
                            <div class="col-md-4 offset-4">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="row mt-2">
    <div class="col-md-6 offset-4">
        <p>Or you can
            <a class="btn btn-link" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
            if you already have an account
        </p>
    </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
