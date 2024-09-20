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
            <div class="col-lg-3"></div>
            <div class="col-12 col-md-8 col-lg-6">
                <div class="medica-services-sidebar-area">
                    <div class="medica-department-card">
                      @foreach($service_sections as $ss)
                      <center><h3 style="color: white">جزئیات سرویس</h3></center><br>
                        <img src="{{asset('/img/service/service_section/'.$ss->ssPhoto)}}" alt="{{__('main.photo')}}">
                          <ul class="department-menu">
                            <li><a href="#">{{$ss->ssName}}</a></li>
                            <li><a href="#">{{$ss->ssDesc}}</a></li>
                            <li><a href="#"> زمان کاری:  {{$ss->ssTime}}</a></li>
                          </ul>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
