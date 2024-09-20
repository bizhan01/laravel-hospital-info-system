<div class="site-header">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <a class="navbar-brand" href="{{route('dashboard')}}">
                <div class="logo text-white"></div>
            </a>
            <div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
                <span class="hamburger"></span>
            </div>
            <div class="toggle-button-second dark float-xs-right hidden-md-up">
                <i class="ti-arrow-right"></i>
            </div>
            <div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
                <span class="more"></span>
            </div>
        </div>
        <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
            <div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
                <span class="hamburger"></span>
            </div>
            <div class="toggle-button-second light float-xs-right hidden-sm-down">
                <i class="ti-arrow-right"></i>
            </div>
            <ul class="nav navbar-nav float-md-right">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false" dir="rtl">
                        <!-- <i class="ti-flag-alt"></i> -->
                        <span class="avatar box-32">
                            <img src="{{asset('img/user_profile/'.Auth::user()->photo)}}" alt="">
                        </span>
                        <span class=" ml-1">{{Auth::user()->full_name}}</span>
                    </a>
                    <div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
                        <a class="t-item" href="{{ url('profile') }}">
                            <span class="avatar box-32">
                                <img src="img/avatars/4.jpg" alt="">
                            </span>
                            <span class="text-black">@lang('main.profile')</span>
                        </a>
                        <a class="t-item text-black" style="background: #eee" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <center>
                                <i class="ti-power-off"></i>
                                <span> @lang('main.logout') </span>
                            </center>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="nav-item hidden-sm-down">
                    <a class="nav-link toggle-fullscreen" href="#">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
                <!-- <li class="nav-item dropdown hidden-sm-down">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="ti-layout-grid3"></i>
                    </a>
                    <div class="dropdown-apps dropdown-menu animated fadeInUp">
                        <div class="a-grid">
                            <div class="row row-sm">
                                <div class="col-xs-4">
                                    <div class="a-item">
                                        <a href="#">
                                            <div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>
                                            <div class="ai-title">Dropbox</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="a-item">
                                        <a href="#">
                                            <div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>
                                            <div class="ai-title">Github</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="a-item">
                                        <a href="#">
                                            <div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>
                                            <div class="ai-title">Wordpress</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="a-item">
                                        <a href="#">
                                            <div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>
                                            <div class="ai-title">Gmail</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="a-item">
                                        <a href="#">
                                            <div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>
                                            <div class="ai-title">Drive</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="a-item">
                                        <a href="#">
                                            <div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>
                                            <div class="ai-title">Dribbble</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-more" href="#">
                            <strong>View all apps</strong>
                        </a>
                    </div>
                </li> -->
            </ul>

            <!-- <div class="header-form float-md-left ml-md-2">
                <form>
                    <input type="text" class="form-control b-a" placeholder="جستجو...">
                    <button type="submit" class="btn bg-white b-a-0">
                        <i class="ti-search"></i>
                    </button>
                </form>
            </div> -->
        </div>
    </nav>
</div>
