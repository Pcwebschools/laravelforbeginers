@extends('layouts.app')

@section('content')

<div class="col-lg-10 col-xl-9 mx-auto">
    <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body">
        <h5 class="card-title text-center">{{ __('Register') }}</h5>
        <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-label-group">
            <input type="text" id="inputUserame" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
            <label for="inputUserame">{{ __('Name') }}</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email">
            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            
            <hr>

            <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
            <label for="inputPassword">{{ __('Password') }}</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            
            <div class="form-label-group">
            <input type="password" id="inputConfirmPassword" class="form-control" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
            <label for="inputConfirmPassword">{{ __('Confirm Password') }}</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>
            <a class="d-block text-center mt-2 small" href="/login">Sign In</a>
            <hr class="my-4">
           
        </form>
        </div>
    </div>
</div>


@endsection
