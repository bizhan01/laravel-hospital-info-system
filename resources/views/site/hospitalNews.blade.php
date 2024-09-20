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
                @foreach($news as $news)
                <!-- Single Blog Area Start  -->
                <div class="single-blog-area">
                  <!-- Post Content -->
                  <div class="post-content">
                      <h4>{{$news->title}}</h4>
                      <div class="post-meta mb-30 d-flex align-items-center">
                          <p class="author mb-0">نویسنده:<a href="#">{{$news->author_full_name}}</a></p>
                      </div>
                      <p class="text-justify">{{substr($news->content, 0, 1090)}} {{strlen($news->content) >= 1090 ? ' ...' : ''}}</p>
                  </div>
                    <!-- Post Thumb -->
                    <div class="post-thumb">
                        <img src="{{asset('img/news/').'/'.$news->image}}" width="100%" alt="">
                        <!-- Post Date -->
                        <div class="post-date">
                            <a href="#">{{date('Y ,M d', strtotime($news->created_at))}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
