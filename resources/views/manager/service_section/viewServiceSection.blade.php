@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.services')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>


        <div class="box box-block bg-white">
            <h5 class="mb-1">@lang('main.services_sections')</h5>
            <div class="overflow-x-auto">
                <table class="table table-striped table-bordered dataTable" id="table-3">
                    <thead>
                        <tr>
                            <th>@lang('main.number')</th>
                            <th>@lang('main.service_name')</th>
                            <th>@lang('main.job_time')</th>
                            <th>@lang('main.type')</th>
                            <th>@lang('main.operations')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($serviceSections as $serviceSection)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $serviceSection->name }}</td>
                            <td>{{ $serviceSection->ss_time }}</td>
                            <td>{{ __('main.'.$serviceSection->type) }}</td>
                            <td>
                                <!-- <a href="{{url('editServiceSection').'/'.$serviceSection->id }}">
                                    <i class="ti-pencil-alt text-primary" data-toggle="tooltip" data-placement="top" title="ویرایش">&nbsp;</i>
                                </a> -->
                                <a href="{{url('deleteServiceSection').'/'.$serviceSection->id }}" onclick='return confirm("آیا مطمین استید این مورد حذف شود؟")'>
                                    <i class="ti-trash text-danger" data-toggle="tooltip" data-placement="left" title="حذف">&nbsp;</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>@lang('main.number')</th>
                            <td>&nbsp;</td>
                            <th>@lang('main.service_name')</th>
                            <th>@lang('main.service_desc')</th>
                            <td>&nbsp;</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
	</div>
</div>
@endsection
