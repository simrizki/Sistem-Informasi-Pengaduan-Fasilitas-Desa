@extends('layouts.app')

@section('content')
<style>
    body {
        background: url('/Masyarakat/img/banner/Namane.png') no-repeat center center fixed;
        background-size: cover;
    }
    .card {
        background-color: rgba(255, 255, 255, 0.9); /* Background semi-transparent */
        border-radius: 1rem;
    }
    .card-header {
        background-color: rgba(255, 255, 255, 0.5);
        border-bottom: none;
        border-radius: 1rem 1rem 0 0;
    }
    .card-header h4 {
        font-weight: bold;
    }
    .form-group label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .card-footer {
        background-color: rgba(255, 255, 255, 0.5);
        border-top: none;
        border-radius: 0 0 1rem 1rem;
    }
    .card-footer a {
        font-weight: bold;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header text-dark text-center py-4">
                    <h4 class="card-title mb-0">{{ __('Verify Your OTP') }}</h4>
                </div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('verify.otp.post') }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="otp" class="col-md-4 col-form-label text-md-end">{{ __('OTP') }}</label>

                            <div class="col-md-6">
                                <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autofocus>
                                @error('otp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Verify OTP') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center py-3">
                    <div class="small">
                        <a href="{{ route('login') }}" class="text-primary">{{ __('Already have an account? Login!') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
