@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>اضافه کردن کارمندان مسلکی</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.staffsInfo')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>

        <!-- error area -->
        @if($errors->any())
        <ul class="alert alert-danger alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        @if($flash = session('message'))
        <ul class="alert alert-danger alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <div>{{ $flash }}</div>
        </ul>
        @endif

        <form method="POST" action="{{route('saveStaff')}}" enctype="multipart/form-data" >
        @csrf

            <!-- personal info -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.staff_personal_info')</p>

                <div class="row form-group">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.full_name')</label> <span class="text-danger"> * </span>
                            <input type="text" name="full_name" id="full_name" class="form-control {{ $errors->has('full_name') ? ' invalid' : '' }}" value="{{old('full_name')}}"  autofocus>

                            @foreach($errors->get('full_name') as $m)
                                <span>{{ $m }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="parent_name">@lang('main.parent_name')</label>
                            <input type="text" name="parent_name" id="parent_name" class="form-control {{ $errors->has('parent_name') ? ' is-invalid' : '' }}" value="{{old('parent_name')}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dob_d">@lang('main.dob')</label>
                                    <select name="dob_d" id="dob_d" class="form-control no-padding {{$errors->has('dob_d') ? 'is-invalid' : ''}}">
                                        @for($i = 1; $i <= 31; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dob_m">&nbsp;</label>
                                    <select name="dob_m" id="dob_m" class="form-control no-padding {{$errors->has('dob_m') ? 'invalid' : ''}}">
                                        @for($i = 1; $i <= 12; $i++)
                                            <option value="@lang('main.m'.$i)">@lang('main.m'.$i)</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dob_y">&nbsp;</label>
                                    <select name="dob_y" id="dob_y" class="form-control no-padding {{$errors->has('dob_y') ? 'invalid' : ''}}">
                                        @for($i = (date('Y')-621)-99; $i <= (date('Y')-621)-15; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="education_level">@lang('main.education_level')</label>
                                    <select name="education_level" id="education_level" class="form-control no-padding {{$errors->has('education_level') ? 'is-invalid' : ''}}" >
                                        @for($i = 1; $i <= 5; $i++)
                                        <option value="@lang('main.e'.$i)">@lang('main.e'.$i)</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('main.gender')</label><span class="text-danger"> * </span><br>
                                    <label class="custom-control custom-radio">
                                        <input name="gender" type="radio" value="male" class="custom-control-input" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">@lang('main.male')</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input name="gender" type="radio" value="female" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">@lang('main.female')</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- contact info -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.contact').</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.phone')</label>
                            <input type="text" name="phone" data-mask="(079) 999-9999" class="form-control" dir="ltr">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.address')</label>
                            <input type="address"  name="address" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <!-- general -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.general_info')</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.salary')</label>
                            <input type="number" min="1" name="salary" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.job')</label>
                            <input type="text" name="position" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.job_time')</label>
                            <input type="text" name="job_time" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.code')</label>
                            <input type="text" name="code" class="form-control">
                        </div>
                    </div>
                </div>

            </div>

            <!-- files -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.files')</p>

                <div class="row">
                    <div class="col-md-6">
                        <h6>@lang('main.photo') <span style="color: red">*</span></h6>
                        <input type="file" name="photo" id="input-file-now" class="dropify" accept="image/*" required/>
                    </div>

                    <div class="col-md-6">
                        <h6>@lang('main.diploma') <span style="color: red">*</span></h6>
                        <input type="file" name="diploma" id="input-file-now" class="dropify" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6>@lang('main.identity_card') <span style="color: red">*</span></h6>
                        <input type="file" name="identity_card" id="input-file-now" class="dropify" required/>
                    </div>

                    <div class="col-md-6">
                        <h6>@lang('main.guaranty_letter') <span style="color: red">*</span></h6>
                        <input type="file" name="guaranty_letter" id="input-file-now" class="dropify" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6>@lang('main.accuracy_form') <span style="color: red">*</span></h6>
                        <input type="file" name="accuracy_form" id="input-file-now" class="dropify" required/>
                    </div>

                    <div class="col-md-6">
                        <h6>@lang('main.permit') <span style="color: red">*</span></h6>
                        <input type="file" name="permit" id="input-file-now" class="dropify" required/>
                    </div>
                </div>

            </div>

            <div class="box box-block bg-white">
                <center class="row" style="margin-top: 10px">
                    <button type="submit" class="btn bg-linkedin label-left mb-0-25 waves-effect waves-light">
                        <span class="btn-label"><i class="ti-save"></i></span>
                        @lang('main.save')
                    </button>

                    <button type="reset" class="btn bg-googleplus label-left mb-0-25 waves-effect waves-light">
                        <span class="btn-label"><i class="fa fa-undo"></i></span>
                        @lang('main.cancel')
                    </button>
                </center>
            </div>
        </form>


	</div>
</div>
@endsection
