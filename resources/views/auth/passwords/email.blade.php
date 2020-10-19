@extends('layouts.master.master-public')
@section('header')
    <style>
        body
        {
            background: white !important;
            background-image: url('/assets/media/bg/bg-3.jpg') !important;

        }
    </style>
    <link href="{{asset('assets/css/pages/login/login-3.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container" style="margin:auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="kt-login__logo" style="display:flex;justify-content:center">
                        <img src="{{asset('/images/logo.png')}} " alt="logo"  style="width: 30%">
                    </div>
                    <div class="card-header" style="text-align:center;font-size:large;background: white; border-bottom: none">

                        <div class="kt-login__head">
                        <br>
                            <h3 class="kt-login__title " style="color:#595d6e;font-size: 1.5rem; font-weight: 500">Reset Password </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" style="background:rgba(235,237,242,.4)" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
