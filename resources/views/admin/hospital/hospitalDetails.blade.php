@extends('admin.layouts.master')
@section('content')

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

@foreach($hospitalInfo as $hospital)
    <div class="content-area pb-1">
        <div class="profile-header mb-1">
            <div class="profile-header-cover img-cover" style="background-image: url({{asset('img/background/profile_back.svg')}});"></div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="card profile-card">
                        <div class="profile-avatar">
                            <img src="{{asset('img/user_profile/').'/'.$hospital->photo}}" alt="">
                        </div>
                        <div class="card-block">
                            <h6 class="mb-0-25">{{$hospital->full_name}}</h6><br>
                            <!-- <div class="text-muted mb-1">Software Engineer</div> -->
                            <a href="{{url('hospitalAccept').'/'.$hospital->id}}" class="btn btn-primary btn-rounded waves-effect">{{__('main.activate')}}</a>
                            <a href="{{url('hospitalReject').'/'.$hospital->id}}" class="btn btn-warning btn-rounded waves-effect">{{__('main.de_activate')}}</a>

                        </div>
                        <ul class="list-group">
                            <a class="list-group-item">
                                <span>{{$hospital->email}}</span>
                                <i class="ti-email mr-0-5"></i>
                            </a>
                            <a class="list-group-item">
                                <span>{{$hospital->address}}</span>
                                <i class="ti-location-pin mr-0-5"></i>
                            </a>
                            <a class="list-group-item text-right">
                                <i class="ti-mobile mr-0-5" dir="rtl"></i>
                                <span>{{$hospital->phone}}</span>
                            </a>
                        </ul>
                    </div>

                </div>
                <div class="col-md-8">
                  <h5>جواز کار شفاخانه ها</h5>
                  <img src="/img/user_profile/{{$hospital->permit}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
