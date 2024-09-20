@extends('site.layouts.master')
@section('content')
<section class="breadcumb-area bg-img gradient-background-overlay dir-auto text-auto" style="background-image: url(/site-asset/img/bg-img/hero2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <!-- Title -->
                    <h3 class="breadcumb-title">در باره ما</h3>
                    <!-- Breadcumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medica-about-content section_padding_50">
    @foreach($users as $user)
    <center><img src="/img/user_profile/{{$user->photo}}" alt="" style="height: 100px; width: 100px; border-radius: 50%"></center>
    <div class="container dir-auto text-auto">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7" >
                <div class="medica-about-text" >
                    <h2>درباره ما</h2>
                    <h5>نام: {{$user->full_name}}</h5>
                    <h5>آدرس: {{$user->address}}</h5>
                    <h5>تلفن: {{$user->phone}}</h5>
                    <h5>ایمیل: {{$user->email}}</h5>
                </div>
            </div>
            <div class="col-12 col-lg-5">
              <h5>جواز فعالیت</h5>
                <div class="medica-about-thumbnail">
                    <img src="/img/user_profile/{{$user->permit}}" alt="">
                </div>
            </div>
        </div>
    </div>
  @endforeach
</section>

<!-- doctors / staffs -->
<section class="medica-doctors-area bg-gray section_padding_100 dir-auto">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading">
                    <img src="/site-asset/img/icons/doctor.png" alt="">
                    <h2>تیم صحی ما</h2>
                    <p>ما برایتان بهترین تیم صحی را معرفی میکنیم</p>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach($staffs as $staff)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.2s">
                    <div class="doctor-thumbnail">
                        <img src="{{asset('img/user_profile/staff/'.$staff->photo)}}" alt="" style="height: 300px; width: 100%;">
                    </div>
                    <div class="doctor-meta">
                        <h5>{{$staff->full_name}}</h5>
                        <h6>{{$staff->position}}</h6>
                        <div class="doctor-social-info">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                <div class="see-all-doctors text-center wow fadeInUp" data-wow-delay="1s">
                    <a href="#" class="btn medica-btn btn-2">دیدن تمام داکتران</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url(/site-asset/img/bg-img/cta1.jpg);">
    <div class="container dir-auto text-auto">
        <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="cta-content">
                    <h2>ما با داشتن بهترین داکتران در خدمات هموطنان عزیز قرارداریم</h2>
                    <h6>خدمات از ما رضایت از شما</h6>
                </div>
            </div>
            <!-- <div class="col-12 col-md-5 col-lg-3">
                <div class="cta-btn">
                    <a href="#" class="btn medica-btn">Make an Appointment</a>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="medica-department-area section_padding_100_0 dir-auto">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading">
                    <img src="/site-asset/img/icons/molecule.png" alt="">
                    <h2>خدمات ما</h2>
                    <p>کوشش ما براینست که بهترین تجهیزات و وسایل برایتان فراهم کنیم</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($service_sections as $ss)
            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <div class="single-department-area text-center">
                    <img src="{{asset('img/service/service_section/'.$ss->ssPhoto)}}" alt="">
                    <h6>{{$ss->ssName}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
