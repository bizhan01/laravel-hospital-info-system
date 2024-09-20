<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Health Center</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('site-asset/css/core-style.css')}} ">
    <link rel="stylesheet" href="{{asset('site-asset/style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('site-asset/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('site-asset/css/component.css')}}" >

    <link rel="stylesheet" href="{{asset('site-asset/css/fa.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="{{asset('img/logos/glidesoft.png')}}">
    </div>

    <div class="card-header dir-auto text-auto">
        <span>فورم ذیل را خانه پری کنید</span>
        <a href="{{route('login')}}" class="pull-left"><i class="fa fa-key"><span>&nbsp;ورود</span></i></a>
    </div>
    <div class="card-body" >
        <div class="container">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
                <section class="content bgcolor-4 text-center">
                    <div class="row">

                        <div class="col-md-6">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="email" name="email" id="email" value="{{ old('email') }}" required/>
                                <label class="input__label input__label--madoka" for="email">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">
                                        @if ($errors->has('email'))
                                            <strong class="text-danger" dir="rtl">{{ $errors->first('email') }}</strong>
                                        @else
                                            {{__('main.email_address')}}
                                        @endif
                                    </span>
                                </label>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" name="full_name" value="{{ old('full_name') }}" id="full_name" required />
                                <label class="input__label input__label--madoka" for="full_name">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">
                                        @if ($errors->has('full_name'))
                                            <strong class="text-danger" dir="rtl">{{ $errors->first('full_name') }}</strong>
                                        @else
                                            {{__('main.name')}}
                                        @endif
                                    </span>
                                </label>
                            </span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="password" name="password_confirmation" id="password_confirmation" required />
                                <label class="input__label input__label--madoka" for="password_confirmation">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">{{__('main.password_confirmation')}}</span>
                                </label>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="password" name="password" id="password" required/>
                                <label class="input__label input__label--madoka" for="password">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">
                                    @if ($errors->has('password'))
                                        <strong class="text-danger" dir="rtl">{{ $errors->first('password') }}</strong>
                                    @else
                                        {{__('main.password')}}
                                    @endif
                                    </span>
                                </label>
                            </span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" name="address" id="address" />
                                <label class="input__label input__label--madoka" for="address">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">
                                        {{__('main.address')}}
                                    </span>
                                </label>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="tel" name="phone" id="phone" />
                                <label class="input__label input__label--madoka" for="phone">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">
                                        {{__('main.phone')}}
                                    </span>
                                </label>
                            </span>
                        </div>

                    </div>

                    <br>
                    <div class="form-group" >
                    <div class="c-upload-btn-wrapper m-t-10">
                        <button class="btn btn-sm btn-default c-btn-color">
                        <i class="fa fa-cloud-upload"></i> @lang('main.logo')
                        </button>
                        <input type="file" name="photo" accept="image/*" >
                        <div class="hint-primary hint-sm"> لوگوی شفاخانه تان را آپلود کنید</div>
                    </div>
                    </div>

                    <div class="form-group " >
                    <div class="c-upload-btn-wrapper m-t-10">
                        <button class="btn btn-sm btn-default c-btn-color">
                        <i class="fa fa-cloud-upload"></i>
                        <span>جواز فعالیت</span>
                        </button>
                        <input type="file" name="permit" accept="image/*" >
                        <div class="hint-primary hint-sm">  عکس جواز فعالیت برای هیچ کسی قابل دید یا دسترسی نیست فقط برای احراز هویت شما میباشد</div>
                    </div>
                    </div>

                    <div class="form-group " >
                    <div class="c-upload-btn-wrapper m-t-10">
                        <button type="submit" class="btn btn-sm btn-primary c-btn-color">
                        <i class="fa fa-save"></i>
                        <span>{{ __('main.save') }}</span>
                        </button>
                    </div>
                    </div>

                </section>
            </form>
        </div>
    </div>

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('site-asset/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('site-asset/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('site-asset/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('site-asset/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('site-asset/js/active.js')}}"></script>
    <!-- register -->
    <script src="{{asset('site-asset/js/classie.js')}}"></script>
    <script src="{{asset('site-asset/js/input-active.js')}}"></script>

</body>

</html>
