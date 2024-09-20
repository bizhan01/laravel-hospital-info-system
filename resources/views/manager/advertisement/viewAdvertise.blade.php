@extends('manager.layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.advertisements')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>

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


            <div class="overflow-x-auto">
                <table class="table table-striped table-bordered dataTable" id="table-3">
                    <thead>
                        <tr>
                            <th>{{__('main.number')}}</th>
                            <th>{{__('main.photo')}}</th>
                            <th>{{__('main.title')}}</th>
                            <th>{{__('main.operations')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advertises as $advertise)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="img-col">
                                <img src="{{asset('img/advertisement').'/'.$advertise->img}}" alt="@lang('main.photo')">
                            </td>
                            <td>
                                {{$advertise->title}}
                            </td>
                            <td>
                                <a href="{{url('advertiseDetails').'/'.$advertise->id}}">
                                    <i class="ti-info-alt text-info" data-toggle="tooltip" data-placement="right" title="بیشتر">&nbsp;</i>
                                </a>
                                <a href="{{url('editAdvertise').'/'.$advertise->id}}">
                                    <i class="ti-pencil-alt text-primary" data-toggle="tooltip" data-placement="top" title="ویرایش">&nbsp;</i>
                                </a>
                                <a href="{{url('deleteAvertise').'/'.$advertise->id}}">
                                    <i class="ti-trash text-danger" onclick='return confirm("آیا مطمین استید این مورد حذف شود؟")' data-toggle="tooltip" data-placement="left" title="حذف">&nbsp;</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
	</div>
</div>
@endsection
