@extends('manager.layouts.master')

@section('content')

<div class="content-area pb-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-md-6 offset-md-3">
                <div class="card mb-0">
                  <br>
                   <h3 style="text-align: center">نمایش اطلاعات کامل کارمند</h3>
                    <br>
                    <ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#p_info" role="tab">{{__('main.personal_info')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#contact" role="tab">{{__('main.contact')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#g_info" role="tab">{{__('main.general_info')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#files" role="tab">{{__('main.files')}}</a>
                        </li>
                    </ul>
                    @foreach($staffInfo as $staff)
                        <div class="tab-content">
                            <!-- personal information -->
                            <div class="tab-pane active" id="p_info" role="tabpanel">
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.full_name')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->full_name}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.parent_name')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->parent_name}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.age')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->dob}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.gender')}}:</div>
                                    <div class="col-md-9"><h6>{{__('main.'.$staff->gender)}}</h6></div>
                                </div>
                            </div>

                            <!-- contact information -->
                            <div class="tab-pane" id="contact" role="tabpanel">
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.phone')}}:</div>
                                    <div class="col-md-9"><h6 dir="ltr" >{{$staff->phone}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.address')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->address}}</h6></div>
                                </div>
                            </div>

                            <!-- general information -->
                            <div class="tab-pane" id="g_info" role="tabpanel">
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.salary')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->salary}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.code')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->code}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.job')}}:</div>
                                    <div class="col-md-9"><h6>{{$staff->position}}</h6></div>
                                </div>
                            </div>

                            <!-- files -->
                            <div class="tab-pane card-block" id="files" role="tabpanel">
                                <div class="gallery-2 row">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div>{{__('main.photo')}}</div>
                                        <div class="g-item">
                                            <a href="/img/user_profile/staff/{{$staff->photo}}">
                                                <img src="/img/user_profile/staff/{{$staff->photo}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div>{{__('main.diploma')}}</div>
                                        <div class="g-item">
                                            <a href="/img/user_profile/staff/{{$staff->diploma }}">
                                                <img src="/img/user_profile/staff/{{$staff->diploma }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div>{{__('main.identity_card')}}</div>
                                        <div class="g-item">
                                            <a href="/img/user_profile/staff/{{$staff->identity_card }}">
                                                <img src="/img/user_profile/staff/{{$staff->identity_card }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="gallery-2 row">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div>{{__('main.guaranty_letter')}}</div>
                                        <div class="g-item">
                                            <a href="/img/user_profile/staff/{{$staff->guaranty_letter}}">
                                                <img src="/img/user_profile/staff/{{$staff->guaranty_letter}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div>{{__('main.accuracy_form')}}</div>
                                        <div class="g-item">
                                            <a href="/img/user_profile/staff/{{$staff->accuracy_form }}">
                                                <img src="/img/user_profile/staff/{{$staff->accuracy_form }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div>{{__('main.permit')}}</div>
                                        <div class="g-item">
                                            <a href="/img/user_profile/staff/{{$staff->permit }}">
                                                <img src="/img/user_profile/staff/{{$staff->permit }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-md-6 offset-md-3">
                <div class="card mb-0">
                    <center class="tab-content">
                        <a href="{{route('staffsInfo')}}" class="btn bg-info label-left mb-0-25 waves-effect waves-light">
                            <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                            @lang('main.return')
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
