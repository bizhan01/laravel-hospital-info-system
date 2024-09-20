@extends('site.layouts.master')

@section('content')
 <!-- ***** Hero Area Start ***** -->
 <section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-800 bg-img breadcumb-area bg-img gradient-background-overlay" style="background-color: #329afc; background-image: url({{asset('site-asset/img/bg-img/startup-bg.jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content dir-auto text-auto">
                            <p class="slide-show-title" data-animation="fadeInUp" data-delay="100ms">بهترین خدمات <br>سنوگرافی سه بعدی</p>
                            <p class="slide-show-title-sm" data-animation="fadeInUp" data-delay="400ms">درخدمت همشهریان عزیز</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-800 bg-img breadcumb-area bg-img gradient-background-overlay" style="background-color: #329afc; background-image: url({{asset('site-asset/img/bg-img/hero4.jpg')}}); background-position: center;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                    <div class="hero-slides-content dir-auto text-auto">
                            <p class="slide-show-title" data-animation="fadeInUp" data-delay="100ms">بهترین خدمات <br>اکسری دتجیتال</p>
                            <p class="slide-show-title-sm" data-animation="fadeInUp" data-delay="400ms">درخدمت همشهریان عزیز</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-800 bg-img breadcumb-area bg-img gradient-background-overlay"
            style="background-color: #329afc; background-image: url({{asset('site-asset/img/bg-img/service.jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content dir-auto text-auto">
                            <p class="slide-show-title" data-animation="fadeInUp" data-delay="100ms">بهترین خدمات <br>مجهزترین لابراتوار</p>
                            <p class="slide-show-title-sm" data-animation="fadeInUp" data-delay="400ms">درخدمت همشهریان عزیز</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Hero Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="medica-about-us-area">
    <!-- Card Area -->
    <div class="medica-card-area">
        <div class="">
            <div class="row no-gutters dir-auto text-auto">
                <div class="col-12 col-lg-12">
                    <div class="medica-appointment-card wow fadeInUp" data-wow-delay="0.6s">
                        <h5>نظر شما</h5>
                        <form method="POST" action="{{ route('addComment') }}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          @foreach($userID as $user)
                            <input type="hidden" name="profile_id" value="{{$user->id}}">
                          @endforeach

                            <div class="form-group">
                                <input type="text" name="name" class="form-control text-white" name="name" id="name" placeholder="نام" required>
                            </div>
                            <div class="form-group">
                                <textarea name="comment" class="col-lg-12" rows="10" placeholder="نظریه شما..." style="background-color: #2f88fd; color: white"></textarea>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12">
                                <fieldset class="starability-checkmark" dir="rtl">
                                    <h5>رتبه دهی:</h5>
                                    <input type="radio" id="checkmark-rate5" name="value" value="5" />
                                    <label for="checkmark-rate5" title="Amazing"></label>
                                    <input type="radio" id="checkmark-rate4" name="value" value="4" />
                                    <label for="checkmark-rate4" title="Very good"></label>
                                    <input type="radio" id="checkmark-rate3" name="value" value="3" />
                                    <label for="checkmark-rate3" title="Average"></label>
                                    <input type="radio" id="checkmark-rate2" name="value" value="2" />
                                    <label for="checkmark-rate2" title="Not good"></label>
                                    <input type="radio" id="checkmark-rate1" name="value" value="1" />
                                    <label for="checkmark-rate1" title="Terrible"></label>
                                </fieldset>
                              </div>
                            </div>
                            <button type="submit" class="btn medica-btn mt-15">ارسال نظر</button>
                        </form>
                        <hr>
                        @foreach($comments as $comment)
                        <div class="col-xs-12 col-sm-12">
                          <div class="box box-block mb-1">
                            <div class="media">
                              <div class="media-left">
                                <div class="avatar box-48">
                                  <img class="b-a-radius-circle" src="\img\stars\about.jpg"  alt="" style="height: 70px; margin: 15px">
                                  <i class="status bg-success bottom right"></i>
                                </div>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading mt-0-5" style="color: white !important;">{{$comment->name}}</h4>
                                <span class="font-90 text-muted" style="color: white !important;">{{$comment->comment}}</span>
                                <fieldset class="starability-checkmark" dir="rtl">
                                  @switch ($comment->value)
                                      @case (1)
                                          <img src="\img\stars\1.png"  alt="" />
                                          @break;
                                    @case (2)
                                        <img src="\img\stars\2.png" alt="" />
                                        @break;
                                    @case (3)
                                        <img src="\img\stars\3.png" alt="" />
                                        @break;
                                    @case (4)
                                        <img src="\img\stars\4.png" alt="" />

                                        @break;
                                    @case (5)
                                        <img src="\img\stars\5.png" alt="" />

                                        @break;
                                      @default:
                                  @endswitch
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        </div><hr>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- About Contact -->
    <div class="medica-about-content section_padding_100 dir-auto text-auto">
        <div class="container">
          @foreach($news as $news)
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="medica-about-text">
                        <h2>{{$news->title}}</h2>
                        <p>{{$news->content}}</p>
                        <a href="#" class="btn medica-btn btn-2">بیشتر</a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="medica-about-thumbnail">
                        <img src="{{asset('img/news/').'/'.$news->image}}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Services Area Start ***** -->
<section class="medica-services-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url({{asset('site-asset/img/bg-img/service.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading white-heading">
                    <img src="{{asset('site-asset/img/icons/hospital2.png')}}" alt="">
                    <h2>خدمات</h2>
                    <p class="text-white">کوشش ما براینست که بهترین تجهیزات و وسایل برایتان فراهم کنیم</p>
                </div>
            </div>
        </div>


        <div class="row dir-auto text-justify">
            @foreach($services as $service)

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{asset('img/service/').'/'.$service->photo}}" style="width: 100%; height: 250px" alt="">
                    <h5>{{$service->name}}</h5>
                    <p>{{$service->desc}}</p>
                </div>
            </div>

            @endforeach
            <?php
                $id = 0;
                $user = null;
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $user = \App\User::all()->find($id);
                }
            ?>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.9s">
                <a href="{{url('hospitalService').'/'.$id.'?id='.$id}}" class="btn medica-btn">دیدن تمام خدمات</a>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Area End ***** -->

<!-- ***** Doctors Area Start ***** -->
<section class="medica-doctors-area section_padding_100_20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading">
                    <img src="{{asset('site-asset/img/icons/doctor.png')}}" alt="">
                    <h2>تیم صحی ما</h2>
                    <p>ما با بهترین تیم داکتران درخدمت شما قرار داریم</p>
                </div>
            </div>
        </div>

        <div class="row dir-auto">
            @foreach($doctors as $doctor)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-doctor-area">
                    <div class="doctor-thumbnail">
                        <img src="{{asset('img/user_profile/staff/'.$doctor->photo)}}" alt="">
                    </div>
                    <div class="doctor-meta">
                        <h5>{{$doctor->full_name}}</h5>
                        <h6>{{$doctor->position}}</h6>
                        <div class="doctor-social-info">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Doctors Area End ***** -->


<!-- ***** CTA Area Start ***** -->
<section class="medica-call-to-action section_padding_50_0 gradient-background">
    <div class="container">
        <div class="row">
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="0.2s">
                    <div class="counter-area text-center">
                        <h2><span class="counter">{{$patientsNum}}</span></h2>
                        <h6>تعداد مریضان از آغاز فعالیت</h6>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="0.6s">
                    <div class="counter-area text-center">
                        <h2><span class="counter">{{$staffsNum}}</span></h2>
                        <h6>تیم صحی</h6>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="1.4s">
                    <div class="counter-area text-center">
                        <h2><span class="counter">{{$servicesNum}}</span></h2>
                        <h6>خدمات صحی</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
