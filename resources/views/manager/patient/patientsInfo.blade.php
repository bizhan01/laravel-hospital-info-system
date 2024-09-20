@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.patientsInfo')</a></li>
			<li class="breadcrumb-item active">@lang('main.viewPatientsInfo')</li>
		</ol>
		<p class="font-90 text-muted mb-1">.</p>
		<div class="box box-block bg-white">

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
			<div class="alert alert-danger alert-dismissible fade in mb-0" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div>{{$message}}</div>
			</div>
			@endif

			<div class="box box-block bg-white">
				<table class="table table-striped table-bordered table-responsive dataTable" id="table-2">
				<thead>
					<tr>
						<th>شماره</th>
						<th>اسم کامل</th>
						<th>نام پدر</th>
						<th>آدرس</th>
						<th>تلفن</th>
						<th>نام داکتر</th>
						<th>نام نرس</th>
						<th>تاریخ ورود</th>
						<th>تاریخ خروج</th>
						<th>کود</th>
						<th>عمر</th>
						<th>جنسیت</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($patientInfo as $patient)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $patient->full_name }}</td>
							<td>{{ $patient->parent_name }}</td>
							<td>{{ $patient->address }}</td>
							<td dir="ltr">{{ $patient->phone }}</td>
							<td>{{ $patient->doctor_name }}</td>
							<td>{{ $patient->nurse_name }}</td>
							<td>{{ $patient->entry_date }}</td>
							<td>{{ $patient->exit_date }}</td>
							<td>{{ $patient->code }}</td>
							<td>{{ $patient->age }}</td>
							<td>{{__('main.'.$patient->gender)}}</td>
							<td>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne" style="text-align: left" data-toggle="tooltip" data-placement="left" title="{{__('main.info')}}">
										<a data-toggle="collapse" data-parent="#accordion" href="#c{{$patient->id}}" aria-expanded="true" aria-controls="c{{$patient->id}}">
											<i class="ti-more-alt"></i>
										</a>
									</div>
									<div id="c{{$patient->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										<a href="{{url('deletePatient').'/'.$patient->id}}" onclick='return confirm("آیا مطمین استید این مورد حذف شود؟")' data-toggle="tooltip" data-placement="left" title="{{__('main.delete')}}">
											<i class="ti-trash text-danger"></i>
										</a>
										<a href="{{url('editPatient').'/'.$patient->id}}" data-toggle="tooltip" data-placement="left" title="{{__('main.edit')}}">
											<i class="ti-pencil-alt text-primary" ></i>
										</a>
										<a href="{{url('patientMoreInfo').'/'.$patient->id}}"  data-toggle="tooltip" data-placement="left" title="{{__('main.more')}}">
											<i class="ti-info-alt text-info" ></i>
										</a>
									</div>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
				</table>
			</div>


		</div>
	</div>
</div>

<!-- model -->

<div class="container-fluid">
	<div class="modal fade large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="mySmallModalLabel">@lang('main.patientInfo')</h4>
				</div>
				<div class="modal-body">
					Modal content
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">@lang('main.close')</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
