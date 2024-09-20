<?php
    $id = 0;
    $user = null;
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = \App\User::all()->find($id);
    }
?>

<footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section_padding_100 bg-default">
            <div class="container dir-auto text-auto">
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="footer-logo">
                                <img src="{{asset('img/user_profile/'.$user['photo'])}}" width="100%">
                            </div>
                            <p></p>
                            <div class="footer-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>آخرین اخبار</h6>
                            </div>
                            <?php
                                $latest_news = \App\News::where('user_id', $id)->where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
                            ?>
                            <div class="widget-blog-post">
                                <!-- Single Blog Post -->
                                @foreach($latest_news as $ln)
                                    <div class="widget-single-blog-post d-flex">
                                        <!-- <div class="widget-post-thumbnail">
                                            <img src="" width="20%" alt="">
                                        </div> -->
                                        <div class="widget-post-content">
                                            <a href="#">{{substr($ln->content, 0, 100)}}</a>
                                            <p>{{$ln->title}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>صفحات</h6>
                            </div>
                            <ul>
                                <li><a href="{{url('hospitalIndex').'/'.$id.'?id='.$id}}">{{__('main.mainPage')}}</a></li>
                                <li><a href="{{url('hospitalService').'/'.$id.'?id='.$id}}">{{__('main.services')}}</a></li>
                                <li><a href="{{url('hospitalAbout').'/'.$id.'?id='.$id}}">{{__('main.aboutUs')}}</a></li>
                                <li><a href="{{url('hospitalNews').'/'.$id.'?id='.$id}}">{{__('main.news')}}</a></li>
                                <li><a href="{{url('hospitalContactUs').'/'.$id.'?id='.$id}}">{{__('main.contactUs')}}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>تماس باما</h6>
                            </div>
                            <ul>
                                <li><a href=""><i class="fa fa-map-marker text-primary"></i><span>&nbsp;&nbsp;{{$user['address']}}</span></a></li>
                                <li><a href=""><i class="fa fa-phone text-primary"></i><span>&nbsp;&nbsp;{{$user['phone']}}</span></a></li>
                                <li><a href=""><i class="fa fa-envelope text-primary"></i><span>&nbsp;&nbsp;{{$user['email']}}</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="bottom-footer-content h-100 d-md-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script>
                                     All rights reserved <a href="" target="_blank"></a>
                                </p>
                            </div>
                            <!-- Footer Menu -->
                            <div class="footer-menu">
                                <nav>
                                    <ul class="dir-auto text-auto">
                                        <li><a href="{{url('hospitalIndex').'/'.$id.'?id='.$id}}">{{__('main.mainPage')}}</a></li>
                                        <li><a href="{{url('hospitalService').'/'.$id.'?id='.$id}}">{{__('main.services')}}</a></li>
                                        <li><a href="{{url('hospitalAbout').'/'.$id.'?id='.$id}}">{{__('main.aboutUs')}}</a></li>
                                        <li><a href="{{url('hospitalNews').'/'.$id.'?id='.$id}}">{{__('main.news')}}</a></li>
                                        <li><a href="{{url('hospitalContactUs').'/'.$id.'?id='.$id}}">{{__('main.contactUs')}}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
