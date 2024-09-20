@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.advertisement')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>
        @foreach($advertiseDetails as $advertise)
            <div class="box bg-white product-view mb-2">
                <div class="box-block">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="pv-images mb-1 mb-sm-0">
                                <div class="mb-1">
                                    <img class="img-fluid" src="{{asset('img/advertisement').'/'.$advertise->img}}" alt="{{__('main.photo')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="pv-content">
                                <div class="pv-title">
                                    {{$advertise->title}}
                                </div>
                                <p>{{$advertise->content}}</p>
                           </div>
                            <div>
                                <a href="{{ route('viewAdvertise') }}"  class="btn btn-danger">{{__('main.return')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
	</div>
</div>
@endsection
