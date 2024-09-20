<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area gradient-background">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="h-100 d-md-flex justify-content-between align-items-center">
                        <div class="top-header-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="top-header-menu">
                            <nav class="top-menu">
                                <ul>
                                    <li><a href="{{route('login')}}">
                                            <span>{{__('main.login')}} </span>
                                            <i class="fa fa-key"></i>
                                        </a>
                                    </li>
                                    <li><a href="{{route('register')}}">
                                            <span>{{__('main.register')}}</span>
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <?php
                                $id = 0;
                                $user = null;
                                if(isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $user = \App\User::all()->find($id);
                                }
                            ?>
                            <a class="navbar-brand" href="{{url('hospitalIndex').'/'.$id.'?id='.$id}}">
                                <img src="/img/user_profile/<?php echo $user['photo']?>" alt="">
                            </a>

                            <small style="font-size: 16px" class="navbar-brand">
                               <?php echo $user['full_name']; ?>
                            </small>


                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> مینو </button>

                            <div class="collapse navbar-collapse text-right" id="medicaMenu" dir="rtl">
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url('hospitalIndex').'/'.$id.'?id='.$id}}">{{__('main.mainPage')}}<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('hospitalAbout').'/'.$id.'?id='.$id}}">{{__('main.aboutUs')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('hospitalService').'/'.$id.'?id='.$id}}">خدمات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('hospitalNews').'/'.$id.'?id='.$id}}">اخبار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('hospitalAdvs').'/'.$id.'?id='.$id}}">اعلانات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('hospitalContactUs').'/'.$id.'?id='.$id}}">{{__('main.contactUs')}}</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="کلمه مورد نظر را بنویسید و بعد کلید enter را فشار دهید" id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
