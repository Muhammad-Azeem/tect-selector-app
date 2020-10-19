@extends('layouts.master.master-public')
@section('header')
    <link href="{{asset('assets/css/pages/login/login-3.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <!-- begin::Body -->
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media/bg/bg-3.jpg);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#" style="font-size: 25px; font-weight:bold">
                                <img src="{{asset('/images/logo.png')}} " alt="logo"  style="width: 40%;">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">

                                <h3 class="kt-login__title">Sign In </h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="kt-form">
                                @csrf

                                @include('layouts.partials.flash-message')
                                <div class="input-group validated">
                                    <input type="email"
                                           class="form-control @if($errors->has('email')) is-invalid @endif"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="Enter email">

                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <input class="form-control @if($errors->has('password')) is-invalid @endif"
                                           type="password" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
                                            <input name="remember" id="remember"
                                                   type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col kt-align-right">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" id="kt_login_forgot"
                                               class="kt-login__link">Forgot Password ?</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_signin_submit" type="submit"
                                            class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->
    </body>
    <!-- end::Body -->

    <!-- end:: Page -->
@endsection

