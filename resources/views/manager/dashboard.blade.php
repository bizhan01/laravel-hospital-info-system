@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>



		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a class="box box-block bg-white tile tile-1 mb-2" href="{{route('staffsInfo')}}">
					<div class="t-icon right"><span class="bg-danger"></span><i class="ti-user"></i></div>
					<div class="t-content">
						<h6 class="text-uppercase mb-1">{{__('main.staffs')}}</h6>
						<h1 class="mb-1">{{$staffsNum}}</h1>
						<span class="text-muted">{{__('main.all_staff_num')}}</span>
					</div>
				</a>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a class="box box-block bg-white tile tile-1 mb-2" href="{{route('patientsInfo')}}">
					<div class="t-icon right"><span class="bg-success"></span><i class="ti-id-badge"></i></div>
					<div class="t-content">
						<h6 class="text-uppercase mb-1">{{__('main.patients')}}</h6>
						<h1 class="mb-1">{{$patientsNum}}</h1>
						<span class="text-muted">{{__('main.registered_patients_num')}}</span>
					</div>
				</a>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a class="box box-block bg-white tile tile-1 mb-2" href="{{route('viewServices')}}">
					<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
					<div class="t-content">
						<h6 class="text-uppercase mb-1">{{__('main.services')}}</h6>
						<h1 class="mb-1">{{$serviceNum}}</h1>
						<span class="text-muted">{{__('main.services')}}</span>
					</div>
				</a>
			</div>
		</div>
		<img src="../img/photos-1/images.jpeg" alt="" style="height: 400px; width: 100%" />
	</div>
</div>



@endsection
