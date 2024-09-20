<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <!-- Title -->
    <title>Login To System</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap4/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/themify-icons/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }} ">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }} ">


</head>
<body class="img-cover" style="background-image: url(img/photos-1/2.jpg);">
    <div class="container-fluid">
        <div class="sign-form">
            <div class="row">
                <div class="col-md-4 offset-md-4 px-3">
                    <div class="box b-a-0">
                        <div class="p-2 text-xs-center">
                            <h5>{{__('main.login_to_system')}}</h5>
                        </div>
                        <form class="form-material mb-1" method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{__('main.email_address')}}" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback text-danger" style="float: right; direction: rtl; text-align: center; padding: 10px 10px; font-size: 10px" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{__('main.password')}}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback text-danger" style="float: right; direction: rtl; text-align: center; padding: 10px 10px; font-size: 10px" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="px-2 form-group mb-0">
                                <button type="submit" class="btn btn-purple btn-block text-uppercase">
                                    {{ __('main.login') }}
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="float: right; direction: rtl; text-align: right; padding-right: 0px">
                                    {{ __('main.forger_your_password') }} ?
                                </a>
                            </div>

                        </form>
                        <br><br>
                        <div class="p-2 text-xs-center text-muted">
                            {{__('main.dont_hav_account')}}؟
                            <a class="text-black" href="{{ route('register') }}"><span class="underline">{{__('main.create_account')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
