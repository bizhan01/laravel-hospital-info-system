@extends('admin.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a>@lang('main.hospitals')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>

        <div class="box box-block bg-white">
            <!-- error message -->
            @if($message = session('message'))
            <div class="alert alert-danger alert-dismissible fade in mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span>
                    {{$message}}
                </span>
            </div><br>
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

            <table class="table table-striped table-bordered" id="table-3">
                <thead>
                    <tr>
                        <th>{{__('main.number')}}</th>
                        <th>{{__('main.photo')}}</th>
                        <th>{{__('main.name')}}</th>
                        <th>{{__('main.address')}}</th>
                        <th>{{__('main.status')}}</th>
                        <th>{{__('main.operations')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hospitals as $hospital)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="avatar box-32">
                                    <img src="{{ asset('img/user_profile/'.$hospital->photo) }}" alt="{{__('main.photo')}}" width="100%" height="100%">
                                </div>
                            </td>
                            <td>{{ $hospital->full_name }}</td>
                            <td>{{ $hospital->address }}</td>
                            <td>
                                @if ($hospital->status == 1)
                                    <span class="tag tag-pill tag-success">{{__('main.verify')}}</span>
                                @elseif ($hospital->status == 0)
                                    <span class="tag tag-pill tag-danger">{{__('main.not_verified')}}</span>
                                @endif
                            </td>
                            <td class="center-horizontal">
                                <div class="f-16">
                                    <a href="{{url('userDelete').'/'.$hospital->id}}" data-toggle="tooltip" data-placement="right" title="{{__('main.delete')}}" onclick='return confirm("آیا مطمین استید این مورد حذف شود؟")'>
                                        <i class="ti-trash text-danger"></i>
                                    </a>

                                    <a href="{{url('hospitalDetails').'/'.$hospital->id}}" data-toggle="tooltip" data-placement="left" title="{{__('main.more')}}">
                                        <i class="ti-info-alt text-info" ></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{__('main.number')}}</th>
                        <td></td>
                        <th>{{__('main.full_name')}}</th>
                        <th>{{__('main.address')}}</th>
                        <th>{{__('main.status')}}</th>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

        </div>
	</div>
</div>
@endsection
