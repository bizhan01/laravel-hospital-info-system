@extends('manager.layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.staffsInfo')</a></li>
			<li class="breadcrumb-item active">@lang('main.viewStaffsInfo')</li>
		</ol>

        <div class="box box-block bg-white" >
            <!-- error message -->
            @if($message = session('message'))
            <div class="alert alert-success alert-dismissible fade in mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span>
                    {{$message}}
                </span>
            </div><br>
            @endif

            <table class="table table-striped table-bordered " id="table-3">
                <thead>
                    <tr>
                        <th>{{__('main.number')}}</th>
                        <th>{{__('main.photo')}}</th>
                        <th>{{__('main.full_name')}}</th>
                        <th>{{__('main.job')}}</th>
                        <th>{{__('main.code')}}</th>
                        <th>{{__('main.operations')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staffInfo as $staff)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="avatar box-32">
                                    <img src="{{ asset('img/user_profile/staff/'.$staff->photo) }}" alt="{{__('main.photo')}}" width="100%" height="100%">
                                </div>
                            </td>
                            <td>{{ $staff->full_name }}</td>
                            <td>{{ $staff->position }}</td>
                            <td>{{ $staff->code }}</td>
                            <td class="center-horizontal">
                                <div class="f-16">
                                    <a href="{{url('deleteStaff').'/'.$staff->id}}" onclick='return confirm("آیا مطمین استید این مورد حذف شود؟")' data-toggle="tooltip" data-placement="right" title="{{__('main.delete')}}">
                                        <i class="ti-trash text-danger"></i>
                                    </a>
                                    <a href="{{url('editStaff').'/'.$staff->id}}" data-toggle="tooltip" data-placement="top" title="{{__('main.edit')}}">
                                        <i class="ti-pencil-alt text-primary" ></i>
                                    </a>
                                    <a href="{{url('staffMoreInfo').'/'.$staff->id}}" data-toggle="tooltip" data-placement="left" title="{{__('main.more')}}">
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
                        <th>{{__('main.job')}}</th>
                        <th>{{__('main.code')}}</th>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

        </div>
	</div>
</div>
@endsection
