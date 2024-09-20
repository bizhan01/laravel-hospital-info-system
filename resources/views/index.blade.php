<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health Center</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <script type="text/javascript">window.onerror = function(){return true;};</script>

     <link rel="stylesheet" href="/start-up/css/bootstrap.min.css">
     <link rel="stylesheet" href="/start-up/css/font-awesome.min.css">
     <link rel="stylesheet" href="/start-up/css/animate.css">
     <link rel="stylesheet" href="/start-up/css/owl.carousel.css">
     <link rel="stylesheet" href="/start-up/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/start-up/css/tooplate-style.css">
     <link rel="stylesheet" href="../site-asset/css/fa.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
               <!-- <img src="/img/logos/glidesoft.png" alt="" style="width: 50%; height: 50%; background: yellow;"> -->
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <!-- <p>ورود به سیستم | ایجاد حساب</p> -->
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right dir-auto">
                         <!-- <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span> -->
                         <span class="date-icon"><i class="fa fa-key"></i><a href="{{route('login')}}">&nbsp;ورود&nbsp;</a></span>
                         <span class="email-icon"><i class="fa fa-edit"></i><a href="{{route('register')}}">&nbsp;راجستر شفاخانه&nbsp;</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top dir-auto text-auto" role="navigation">
          <div class="container dir-auto ">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <!-- <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a> -->
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <!-- <li><a href="#team" class="smoothScroll">تبلیغات</a></li> -->
                         <li><a href="#contact" class="smoothScroll">تماس</a></li>
                         <li><a href="#about" class="smoothScroll">درباره</a></li>
                         <li><a href="#news" class="smoothScroll">اخبار</a></li>
                         <li><a href="#top" class="smoothScroll">خانه</a></li>
                         <li class="appointment-btn"><a href="#appointment">جستجو</a></li>
                    </ul>
               </div>

          </div>
     </section>


    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h5>میتوانید ما را روی نقشه بیابید</h5>
                                        <h1>تماس با ما</h1>
                                        <a href="#google-map" class="section-btn btn btn-default smoothScroll">بیشتر</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h5>ما به بهبودی صحت شما می اندیشیم</h5>
                                        <h1>درباره ما</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">بیشتر</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h5>خبرهای جدید</h5>
                                        <h1>آخرین اخبار</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">دیدن اخبار</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- search -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container dir-auto text-auto">
               <div class="row" style="backgrond : blue">
                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <div id="appointment-form" >
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2 class="text-center">جستجو</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
							<div class="col-md-9 col-sm-9"></div>
                                   <div class="container">
                                        <div id="content">
                                             <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                  <li class="active pull-right"><a href="#hospital_tab" data-toggle="tab">شفاخانه</a></li>
                                                  <li class="pull-right"><a href="#services_tab" data-toggle="tab">خدمات</a></li>
                                                  <li class="pull-right"><a href="#doctor_tab" data-toggle="tab">داکتر</a></li>
                                             </ul>
                                             <div id="search_result" class="tab-content">
                                                  <div class="tab-pane active" id="hospital_tab">
                                                       <br>
                                                       <input type="search" class="form-control search-input" id="hospital" placeholder="جستجو" autofocus>
                                                       <div id="hospital_search_result"></div>
                                                  </div>
                                                  <div class="tab-pane" id="doctor_tab">
                                                       <br>
                                                       <input type="search" class="form-control search-input" id="doctor" placeholder="جستجو" autofocus>
                                                       <div id="doctor_search_result"></div>
                                                  </div>
                                                  <div class="tab-pane text-auto" id="services_tab">
                                                       <br>
                                                       <input type="search" class="form-control search-input" id="services" placeholder="جستجو" autofocus>
                                                       <div id="services_search_result"></div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                        </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6 dir-auto text-auto">
                         <div class="about-info">
                              <h3 class="wow fadeInUp dir-auto text-auto" data-wow-delay="0.6s" style="color: #222">به مجتمع صحی دکتران خوش آمدید</h3>
                              <div class="wow fadeInUp " data-wow-delay="0.8s">
                                   <br>
                                   <p class="justify" style="color: #ccc">هدف ما ایجاد یک پلتفورم جامع و کامل میباشد که کاربران گرامی را قادر به جستجو کردن شفاخانه های که در سیستم ثبت استند و همچنان نوعیت خدمات که از طرف شفاخانه ها ارائه میگردد ساخته و همچنان کاربران میتوانند که داکتران مورد نظر خود را نظر به اسم شان جستجو کنند و سیستم برای آنها معلومات کامل از قبیل آدرس، محل وظیفه، وقت کاری و غیره معلومات مرتبط به داکتران را ببینید.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="start-up/images/author-image.jpg" width="15%" alt="">
                                   <figcaption>
                                        <h5 style="color: #ccc; text-style: bold !important"> زهرا رحیمی</h5>
                                        <p style="color: #ccc">مدیر عمومی سایت</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <!-- <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div> -->


                    <div style="text-align:center;" class="col-md-12 col-sm-12">

                    </div>
               </div>
          </div>
     </section>

     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row dir-auto">
                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp text-center" data-wow-delay="0.1s">
                              <h2>آخرین اخبار</h2>
					</div>
                    </div>

                    @foreach($news as $news)
                    <div class="col-md-4 col-sm-6" style="float: right">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s" >
                              <a href="">
                                   <img src="{{asset('/img/news/').'/'.$news->image}}"  style="height: 300px; width: 100%" alt="">
                              </a>
                              <div class="news-info dir-auto text-auto">
                                   <span>{{$news->created_at}}</span>
                                   <h4><a href="" class="">{{$news->title}}</a></h4>
                                   <textarea name="name" rows="8" cols="40" style="border: 1px solid white">{{$news->content}}</textarea>
                                   <div class="author">
                                        <img src="{{asset('img/user_profile/'.$news->photo)}}" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>{{$news->full_name}}</h5>
                                             <p>مدیر عمومی سایت</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                  @endforeach


               </div>
          </div>
     </section>

      <!-- ##### Contact Area Start ##### -->
      <section id="contact" class="contact-area mt-30 section-padding-100-0" style="direction: rtl; text-align: right">
          <div class="container">
            @if($success = session('success'))
              <div class="single-service-area">
                <div class="course-title d-flex align-items-end">
                    <center> <span style="font-size: 35px">{{$success}}</span></center>
                  </div>
              </div>
              @endif
              <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-12 col-lg-8">
                      <center>
                            <h1>تماس باما</h1>
                          <h4 class="mb-30">شما میتوانید با انتقادات، پشنهادات و نظرات نیک تان ما در جهت تولد اثر معیاری و باکیفیت کمک کنید. لطف نموده مارا از نظرات نیک تان آکاه سازید.</h4>
                      </center>
                      <div class="contact-content mb-100">
                          <!-- Contact Form Area -->
                          <div class="contact-form-area">
                            <!-- ُSuccess Flash Message -->
                            <form method="POST" action="{{route('sendMessage')}}" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="name" placeholder="اسم کامل" required>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" class="form-control" name="email" placeholder="ایمیل آدرس" required>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="subject" placeholder="موضوع" required>
                                  </div>
                                  <div class="form-group">
                                      <textarea name="message" class="form-control" name="message" cols="30" rows="10" placeholder="پیام..." required></textarea>
                                  </div>
                                  <button class="btn musica-btn mt-30" type="submit">ارسال</button>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- ##### Contact Area End ##### -->


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container dir-auto">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">تماس با ما</h4>
                              <p class="justify">هدف ما ایجاد یک پلتفورم برای تمامی شفاخانه ها میباشد که میتوانند با راجستر نمودن شان معلومات خود را ثبت سیستم نموده و برای مردم از اهداف و خدمات خود اطلاعات دهند</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">آخرین اخبار</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="/start-up/images/ctscan.jpg" width="20%" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>راه اندازی بخش CT Scan</h5></a>
                                        <span>March 08, 2021</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="/start-up/images/news-image.jpg" width="20%" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>بخش داخله به زودی</h5></a>
                                        <span>February 20, 2021</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">اهداف ما</h4>
                                   <ul class="footer-goals-ul">
                                        <li>ایجاد یک پلتفورم برای سهولت شهروندان</li>
                                        <li>جستجوی شفاخانه ها</li>
                                        <li>جستجوی داکتران</li>
                                        <li>جستجوی خدمات شفاخانه ها</li>
                                   </ul>
                              </div>

                              <ul class="social-icon" >
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; {{date('Y')}}
                                   | All Rights Reserved
                                    <a rel="nofollow" target="_parent"></a></p>
                              </div>
                         </div>
                         <!-- <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2018 Your Company

                                   | Design: <a rel="nofollow" href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
                              </div>
                         </div> -->
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link dir-auto text-auto">
                                   <a href="#top" class="smoothScroll">خانه</a>
                                   <a href="#news" class="smoothScroll">اخبار</a>
                                   <a href="#google-map" class="smoothScroll">تماس</a>
                                   <a href="#about" class="smoothScroll">درباره</a>
                                   <a href="#appointment" class="smoothScroll">جستجو</a>
                                   <!-- <a href="#appointment" class="appointment-btn">جستجو</a> -->
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="/start-up/js/jquery.js"></script>
     <script src="/start-up/js/bootstrap.min.js"></script>
     <script src="/start-up/js/jquery.sticky.js"></script>
     <script src="/start-up/js/jquery.stellar.min.js"></script>
     <script src="/start-up/js/wow.min.js"></script>
     <script src="/start-up/js/smoothscroll.js"></script>
     <script src="/start-up/js/owl.carousel.min.js"></script>
     <script src="/start-up/js/custom.js"></script>

     <script type="text/javascript">
          jQuery(document).ready(function ($) {
               $('#tabs').tab();
          });
     </script>


     <script type="text/javascript">
          $(document).on('keyup', '#hospital', function(e) {
               e.preventDefault();
               var hospital = $('#hospital').val();
               var target = $("#search_result");
               $.ajaxSetup({
                    headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
               });
               $.ajax({
                    type:'post',
                    url:'hospitalSearchFromFirstPage',
                    data:{'hospital':hospital},
                    success:function(resp) {
                         if (resp.error) {
                              target.find('#hospital_search_result').html('<div class="alert alert-warning color-red">' + resp.error + '</div>');
                         } else {
                              target.find('#hospital_search_result').html(resp);
                         }
                    },
                    error:function(error) {
                         target.find('#hospital_search_result').html('<div class="alert alert-warning color-red">مشکل در اتصال با سرور . لطفا ارتباط با انترنت خود را چک کنید.  </div>');
                    }
               });
          });
     </script>

     <script type="text/javascript">
          $(document).on('keyup', '#doctor', function(e) {
               e.preventDefault();
               var doctor = $('#doctor').val();
               var destination = $("#doctor_search_result");
               $.ajaxSetup({
                    headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
               });
               $.ajax({
                    type:'post',
                    url:'doctorSearchFromFirstPage',
                    data:{'doctor':doctor},
                    success:function(resp) {
                         if (resp.error) {
                              destination.html('<div class="alert alert-warning color-red">' + resp.error + '</div>');
                         } else {
                              destination.html(resp);
                         }
                    },
                    error:function(error) {
                         destination.html('<div class="alert alert-warning color-red">مشکل در اتصال با سرور . لطفا ارتباط با انترنت خود را چک کنید.  </div>');
                    }
               });
          });
     </script>

     <script type="text/javascript">
          $(document).on('keyup', '#services', function(e) {
               e.preventDefault();
               var service = $('#services').val();
               var dest = $("#services_search_result");
               $.ajaxSetup({
                    headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
               });
               $.ajax({
                    type:'post',
                    url:'serviceSearchFromFirstPage',
                    data:{'service':service},
                    success:function(resp) {
                         if (resp.error) {
                              dest.html('<div class="alert alert-warning color-red">' + resp.error + '</div>');
                         } else {
                              dest.html(resp);
                         }
                    },
                    error:function(error) {
                         dest.html('<div class="alert alert-warning color-red">مشکل در اتصال با سرور . لطفا ارتباط با انترنت خود را چک کنید.  </div>');
                    }
               });
          });
     </script>



</body>
</html>
