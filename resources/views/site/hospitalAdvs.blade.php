@extends('site.layouts.master')
@section('content')
<section class="breadcumb-area bg-img gradient-background-overlay dir-auto text-auto" style="background-image: url({{asset('site-asset/img/bg-img/hero4.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <!-- Title -->
                    <h3 class="breadcumb-title">آخرین اخبار</h3>
                    <!-- Breadcumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">اخبار</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medica-blog-area section_padding_100 dir-auto text-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-12 col-lg-8">
                @foreach($advs as $adv)
                <!-- Single Blog Area Start  -->
                <div class="single-blog-area">
                  <!-- Post Content -->
                  <div class="post-content">
                      <h4 style="color: green">{{$adv->title}}</h4>

                      <p class="text-justify">{{substr($adv->content, 0, 1090)}} {{strlen($adv->content) >= 1090 ? ' ...' : ''}}</p>
                  </div>
                    <!-- Post Thumb -->
                    <div class="post-thumb">
                        <img src="{{asset('img/advertisement/').'/'.$adv->img}}" width="100%" alt="">
                        <!-- Post Date -->
                        <div class="post-date">
                            <a href="#">{{date('Y ,M d', strtotime($adv->created_at))}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
