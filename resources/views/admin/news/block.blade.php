@extends('admin.layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>@lang('main.'.Route::currentRouteName())</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('main.dashboard')</a></li>
			<li class="breadcrumb-item"><a href="">@lang('main.news')</a></li>
			<li class="breadcrumb-item active">@lang('main.'.Route::currentRouteName())</li>
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

        @foreach($news as $news)
            <form method="POST" action="{{route('updateNews')}}" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="id" id="" value="{{$news->id}}">
                <div class="box box-block bg-white">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="author_full_name">@lang('main.author_full_name')</label>
                                <span class="text-danger"> * </span>
                                <input type="text" readonly name="author_full_name" class="form-control" value="{{$news->author_full_name}}">
                                <span class="font-90 text-muted">&nbsp;</span>
                            </div>
                            <div class="form-group">
                                <label for="title">@lang('main.news_title')</label>
                                <span class="text-danger"> * </span>
                                <input type="text" readonly name="title" class="form-control" maxlength="190" id="placement" value="{{$news->title}}">
                                <span class="font-90 text-muted">&nbsp;</span>
                            </div>

                            <div class="from-group">
                                <label for="content">@lang('main.news_content')</label>
                                <span class="text-danger"> * </span>
                                <textarea name="content" readonly cols="30" rows="10" class="form-control" placeholder="@lang('main.news_content_hint')">{{$news->content}}</textarea>
                                <span class="font-90 text-muted">&nbsp;</span>
                            </div>
                        </div>
												<div class="col-md-6">
														<label>@lang('main.photo')</label>
														<input type="hidden" name="lastPhoto" value="{{$news->image}}">
														<input type="file" readonly name="photo" id="input-file-now-custom-1" class="dropify" data-default-file="/img/news/{{$news->image}}" accept="image/*"/>
												</div>
                    </div>
                </div>
								<input type="hidden" name="status" value="0">
                <!-- buttons -->
                <div class="box box-block bg-white">
                    <center class="row" style="margin-top: 10px">
                        <button type="submit" class="btn bg-linkedin label-left mb-0-25 waves-effect waves-light">
                            <span class="btn-label"><i class="ti-save"></i></span>
                            غیر فعال سازی این خبر
                        </button>

                    </center>
                </div>
            </form>
        @endforeach
	</div>
</div>
@endsection
