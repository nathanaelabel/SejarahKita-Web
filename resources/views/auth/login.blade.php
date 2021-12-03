@extends('layout.sejarahkita')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 me-auto">
                <div class="card">
                    <div class="card-header fw-bold text-center mb-3 fs-5">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Masukkan E-Mail" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Masukkan Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 offset-md-4 my-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat Saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <strong>{{ __('Lupa Password?') }}</strong>
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary mt-5 mb-3">
                        <i class="bi bi-box-arrow-in-right"></i>&emsp;{{ __('Login') }}
                    </button>
                    <p class="text-center">Belum punya akun?
                        <strong>
                            <a href="{{ route('register') }}">Register</a>
                        </strong>
                    </p>
                </div>
            </div>

            <div class="col-md-4 align-self-center">
                <img src="{{ url('assets/img/ill_login.svg') }}" alt="Login" class="illustration-img" loading="lazy">
            </div>

        </div>
    </div>
@endsection
