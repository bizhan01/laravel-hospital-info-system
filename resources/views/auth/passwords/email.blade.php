<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <title>reset password</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap4/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/themify-icons/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }} ">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/fa.css') }} ">

</head>
<body class="img-cover" style="background-image: url(/img/photos-1/2.jpg);">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 offset-md-2" style="margin-top: 200px;">
            <div class="card">
                <div class="card-header" dir="rtl">{{ __('main.reset_password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('main.email_address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('main.send_password_reset_link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
