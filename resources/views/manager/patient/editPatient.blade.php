@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.patientsInfo')</a></li>
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

        @if($message = session('message'))
        <div class="alert alert-success alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div>{{$message}}</div>
        </div>
        @endif


        <form method="POST" action="{{ route('updatePatient') }}" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="patientId" value="{{$patientInfo[0]->id}}">
            <!-- personal info -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.patient_personal_info')</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.full_name')</label> <span class="text-danger">*</span>
                            <input type="text" name="full_name" class="form-control" value="{{$patientInfo[0]->full_name}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.parent_name')</label>
                            <input type="text" name="parent_name" class="form-control" value="{{$patientInfo[0]->parent_name}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.age')</label>
                            <input type="text" name="age" class="form-control" value="{{$patientInfo[0]->age}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.gender')</label><span class="text-danger"> * </span><br>
                            <label class="custom-control custom-radio">
                                <input name="gender" value="man" type="radio" class="custom-control-input" required
                                    @if($patientInfo[0]->gender == 'man')
                                        <?php echo 'checked' ?>
                                    @endif
                                >
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">@lang('main.man')</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input name="gender" value="woman" type="radio" class="custom-control-input"
                                    @if($patientInfo[0]->gender == 'woman')
                                        <?php echo 'checked' ?>
                                    @endif
                                >
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">@lang('main.woman')</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input name="gender" value="child" type="radio" class="custom-control-input"
                                    @if($patientInfo[0]->gender == 'child')
                                        <?php echo 'checked' ?>
                                    @endif
                                >
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">@lang('main.child')</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- contact info -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.patient_contact_info').</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.phone')</label>
                            <input type="text" name="phone" data-mask="(999) 999-9999" class="form-control" dir="ltr" value="{{$patientInfo[0]->phone}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.address')</label>
                            <input type="address" name="address" class="form-control" value="{{$patientInfo[0]->address}}">
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
                            <label>@lang('main.doctor_name')</label>
                            <input type="text" name="doctor_name" class="form-control" value="{{$patientInfo[0]->doctor_name}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.nurse_name')</label>
                            <input type="text" name="nurse_name" class="form-control" value="{{$patientInfo[0]->nurse_name}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.entry_date')</label>
                            <input type="date" name="entry_date" class="form-control" value="{{$patientInfo[0]->entry_date}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.exit_date')</label>
                            <input type="date" name="exit_date" class="form-control" value="{{$patientInfo[0]->exit_date}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.code')</label>
                            <input type="text" name="code" class="form-control" value="{{$patientInfo[0]->code}}">
                        </div>
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

                    <a href="{{route('patientsInfo')}}" class="btn bg-info label-left mb-0-25 waves-effect waves-light">
                        <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                        @lang('main.return')
                    </a>
                </center>
            </div>
        </form>

	</div>
</div>




@endsection
