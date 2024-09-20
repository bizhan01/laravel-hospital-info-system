@extends('site.layouts.master')

@section('content')
<section class="breadcumb-area bg-img gradient-background-overlay dir-auto text-auto" style="background-image: url({{asset('site-asset/img/bg-img/hero3.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <!-- Title -->
                    <h3 class="breadcumb-title">خدمات</h3>
                    <!-- Breadcumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">خدمات</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medica-services-area section_padding_100 dir-auto text-auto">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="medica-services-sidebar-area">
                    <div class="medica-department-card">
                        <h3>خدمات ما</h3>
                        <ul class="department-menu">
                            @foreach($service_sections as $ss)
                                <li><a href="#">{{$ss->ssName}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    @foreach($userInfo as $user)
                    <div class="medica-contact-card">
                        <h5>معلومات بیشتر</h5>
                        <div class="mt-50"></div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-icon">
                                <img src="/site-asset/img/icons/envelope.png" alt="">
                            </div>
                            <div class="contact-meta mr-30">
                                <p>{{$user->email}}<br> {{$user->phone}} </p>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-icon">
                                <img src="/site-asset/img/icons/map-pin.png" alt="">
                            </div>
                            <div class="contact-meta mr-30">
                                <p>افغانستان<br> {{ $user->address }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-8">
                <div class="all-services">
                    <div class="row">
                        @foreach($service_sections as $ss)
                        <!-- Single Service -->
                        <div class="col-12 col-lg-6">
                            <div class="single-service">
                                <img src="{{asset('img/service/service_section/'.$ss->ssPhoto)}}" alt="{{__('main.photo')}}">
                                <h5>{{$ss->ssName}}</h5>
                                <p style="max-height: 80px; ">{{$ss->ssDesc}}</p>
                                <a href="{{url('hospitalServiceInfo').'/'.$ss->ssId}}">بیشتر</a>
                            </div>
                        </div>
                        @endforeach

                        <!-- <div class="col-12">
                            <a href="#" class="btn medica-btn btn-2">بیشتر</a>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
