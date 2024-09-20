@extends('manager.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.news')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
		</ol>
        @foreach($newss as $news)
            <div class="box bg-white product-view mb-2">
                <div class="box-block">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="pv-images mb-1 mb-sm-0">
                                <div class="mb-1">
                                    <img class="img-fluid" src="{{asset('img/news').'/'.$news->image}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="pv-content">
                                <div class="pv-title">
                                    {{$news->title}}
                                </div>
                                <p>{{$news->content}}</p>
                                <a>{{__('main.author')}}</a>
                                <span class="text-primary">{{$news->author_full_name}}</span>
                           </div>
                            <div >
                                <a href="{{ route('viewNews') }}"  class="btn btn-danger">{{__('main.return')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
	</div>
</div>
@endsection
