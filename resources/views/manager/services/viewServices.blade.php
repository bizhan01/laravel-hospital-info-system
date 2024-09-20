@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>نمایش خدمات </h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.services')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>

        @if($success = session('success'))
        <div class="alert alert-success alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div>{{$success}}</div>
        </div>
        @endif
        @if($failed = session('failed'))
        <div class="alert alert-danger alert-dismissible fade in mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div>{{$failed}}</div>
        </div>
        @endif

        <div class="box box-block bg-white">
            <h5 class="mb-1">@lang('main.services')</h5>
            <div class="overflow-x-auto">
                <table class="table table-striped table-bordered dataTable" id="table-3">
                    <thead>
                        <tr>
                            <th>{{__('main.number')}}</th>
                            <th>{{__('main.photo')}}</th>
                            <th>{{__('main.service_name')}}</th>
                            <th>{{__('main.service_desc')}}</th>
                            <th>{{__('main.operations')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td width="40px" height="35px">
                                <a href="{{asset('img/service')}}/{{$service->photo}}" target="_blank">
                                    <img src="{{asset('img/service')}}/{{$service->photo}}" alt="{{__('main.photo')}}" width="100%" height="100%">
                                </a>
                            </td>
                            <td>{{$service->name}}</td>
                            <td>{{strlen($service->desc)>=60 ? substr($service->desc, 0, 60).' ...' : $service->desc}}</td>
                            <td>
                                <a href="{{url('editService').'/'.$service->id}}">
                                    <i class="ti-pencil-alt text-primary" data-toggle="tooltip" data-placement="top" title="ویرایش">&nbsp;</i>
                                </a>
                                <a href="{{url('deleteService').'/'.$service->id }}" onclick='return confirm("آیا مطمین استید این مورد حذف شود؟")'>
                                    <i class="ti-trash text-danger" data-toggle="tooltip" data-placement="left" title="حذف">&nbsp;</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{{__('main.number')}}</th>
                            <td>&nbsp;</td>
                            <th>{{__('main.service_name')}}</th>
                            <th>{{__('main.service_desc')}}</th>
                            <td>&nbsp;</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
	</div>
</div>
@endsection
