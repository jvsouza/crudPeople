@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="formcard col-md-5 bg-white p-5 mt-5 rounded">
            <div class="h1 text-center pb-4">Sign in</div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <div class="inputready position-relative">
                        <div class="posico"><i class="fas fa-envelope"></i></div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="inputready position-relative">
                        <div class="posico"><i class="fas fa-lock"></i></div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>

                <div class="form-group text-center">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>

            </form>

         </div>
    </div>
</div>

@endsection




