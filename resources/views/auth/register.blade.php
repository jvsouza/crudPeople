@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="formcard col-md-5 bg-white p-5 mt-5 rounded">

            <div class="h1 text-center pb-4">Sign up</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <div class="inputready position-relative">
                                <div class="posico"><i class="fas fa-user"></i></div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="inputready position-relative">
                                <div class="posico"><i class="fas fa-envelope"></i></div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="inputready position-relative">
                                <div class="posico"><i class="fas fa-lock"></i></div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
                            </div>
                        </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                       Submit
                    </button>
                </div>

            </form>

         </div>

    </div>

</div>

@endsection
