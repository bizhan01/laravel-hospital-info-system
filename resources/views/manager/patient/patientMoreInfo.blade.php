@extends('manager.layouts.master')

@section('content')

<div class="content-area pb-1">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-md-6 offset-md-3">
                <div class="card mb-0">
                  <br>
                   <h3 style="text-align: center">نمایش اطلاعات کامل مریض</h3>
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
                    @foreach($patientInfo as $patient)
                        <div class="tab-content">
                            <!-- personal information -->
                            <div class="tab-pane active" id="p_info" role="tabpanel">
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.full_name')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->full_name}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.parent_name')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->parent_name}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.age')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->age}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.gender')}}:</div>
                                    <div class="col-md-9"><h6>{{__('main.'.$patient->gender)}}</h6></div>
                                </div>
                            </div>

                            <!-- contact information -->
                            <div class="tab-pane" id="contact" role="tabpanel">
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.phone')}}:</div>
                                    <div class="col-md-9"><h6 dir="ltr" >{{$patient->phone}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.address')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->address}}</h6></div>
                                </div>
                            </div>

                            <!-- general information -->
                            <div class="tab-pane" id="g_info" role="tabpanel">
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.doctor_name')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->doctor_name}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.nurse_name')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->nurse_name}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.code')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->code}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.entry_date')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->entry_date}}</h6></div>
                                </div>
                                <div class="media stream-item">
                                    <div class="col-md-3">{{__('main.exit_date')}}:</div>
                                    <div class="col-md-9"><h6>{{$patient->exit_date}}</h6></div>
                                </div>
                            </div>

                            <div class="tab-pane card-block" id="files" role="tabpanel">
                                <div class="gallery-2 row">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="g-item">
                                            <a href="/img/patient/{{$patient->examinations }}">
                                                <img src="/img/patient/{{$patient->examinations }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="g-item">
                                            <a href="/img/patient/{{$patient->agree_letter}}">
                                                <img src="/img/patient/{{$patient->agree_letter}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="g-item">
                                            <a href="/img/patient/{{$patient->exit_form }}">
                                                <img src="/img/patient/{{$patient->exit_form }}" alt="">
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
                        <a href="{{route('patientsInfo')}}" class="btn bg-info label-left mb-0-25 waves-effect waves-light">
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
