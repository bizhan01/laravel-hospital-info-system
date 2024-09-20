@extends('site.layouts.master')
@section('content')
<section class="breadcumb-area bg-img gradient-background-overlay dir-auto text-auto" style="background-image: url({{asset('site-asset/img/bg-img/hero5.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <!-- Title -->
                    <h3 class="breadcumb-title">تماس باما</h3>
                    <!-- Breadcumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">تماس باما</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medica-contact-area section_padding_100 dir-auto text-auto">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8">
                <div class="contact-form">
                    <h5 class="mb-50">پیام گذاشتن</h5>

                    <form method="POST" action="{{ route('sendMessage') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="نام">
                            </div>
                            <div class="col-12 col-md-6">
                              <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" id="phone" placeholder="موضوع پیام">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="پیام"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn medica-btn btn-3 mt-3">فرستادن پیام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="content-sidebar">
                    <!-- Medica Emergency Card -->
                    <!-- <div class="medica-emergency-card mb-4">
                        <h5>For Emergencies</h5>
                        <h4>+0080 954 4557 884</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div> -->
                    <!-- Medica Appointment Card -->
                    <div class="medica-contact-card">
                        <h5>معلومات عمومی</h5>
                        <div class="mt-50"></div>
                        <?php $users = \App\User::all()->where('id', $_GET['id']);?>
                        @foreach($users as $user)
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-meta">
                                <i class="fa fa-map-marker text-primary"></i>
                                <span class="text-white mr-10">{{$user['address']}}</span>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-meta">
                                <i class="fa fa-phone text-primary"></i>
                                <span class="text-white mr-10">{{$user['phone']}}</span>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-meta">
                                <i class="fa fa-envelope text-primary"></i>
                                <span class="text-white mr-10">{{$user['email']}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<div class="map-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="googleMap" class="googleMap"></div>
            </div>
        </div>
    </div>
</div>

@endsection
