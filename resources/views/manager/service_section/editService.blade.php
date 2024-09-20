@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>ویرایش خدمات</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.services')</a></li>
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

        <!-- error area -->
        @if($success = session('success'))
        <div class="alert alert-success alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div>{{$success}}</div>
        </div>
        @endif
        <!-- error area -->
        @if($failed = session('failed'))
        <div class="alert alert-danger alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div>{{$failed}}</div>
        </div>
        @endif

				@foreach($serviceInfo as $service)
        <form method="POST" action="{{ route('updateServiceSection') }}" enctype="multipart/form-data">
        @csrf
            <!-- personal info -->
            <div class="box box-block bg-white">
                <p class="font-90 text-muted mb-1">@lang('main.addServiceSection')</p>


                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>@lang('main.service_name')</label> <span class="text-danger">*</span>
                            <select name="service_id" class="form-control no-padding" required>
																<option value="">---------------</option>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}">
                                    {{ $service->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('main.section_name')</label> <span class="text-danger">*</span>
                            <input type="text" name="section_name" value="{{$service->photo}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">@lang('main.service_section_desc')</label>
                            <textarea name="desc" id="" cols="30" rows="12" class="form-control" placeholder="@lang('main.service_section_desc_hint')"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('main.job_time')</label>
                                        <input type="text" name="ss_time" value="{{$service->ss_time}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('main.type')</label> <span class="text-danger"> * </span>
                                        <select name="type" class="form-control no-padding" required>
																					  <option value="">---------------</option>
                                            <option value="manly">مردانه</option>
                                            <option value="womanly">زنانه</option>
                                            <option value="childhood">اطفال</option>
                                            <option value="common">عمومی</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>@lang('main.photo')</label>
                        <input type="file" name="photo" id="input-file-now-custom-2" class="dropify" data-height="408" accept="image/*" />
                    </div>

                </div>

            </div>


            <div class="box box-block bg-white">
                <h6 class="mb-1">@lang('main.service_section_staff_addition_hint')</h6>
                <div class="overflow-x-autos" >
                    <table class="table table-striped table-bordered  dataTable" id="table-1" style="width: 100%">
                        <thead  style="width: 100%">
                            <tr>
                                <th>@lang('main.number')</th>
                                <th>@lang('main.staff_name')</th>
                                <th>@lang('main.job')</th>
                                <td>@lang('main.choose')</td>
                            </tr>
                        </thead>
                        <tbody  style="width: 100%">
                            @foreach($staffs as $staff)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $staff->full_name }}</td>
                                <td>{{ $staff->position }}</td>
                                <td style="text-align: center">
                                    <input type="checkbox" name="staff_id[]" value="{{$staff->id}}" >
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
				@endforeach


	</div>
</div>
@endsection
