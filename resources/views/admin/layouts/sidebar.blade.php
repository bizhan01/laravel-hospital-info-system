<div class="site-overlay"></div>
<div class="site-sidebar">
    <div class="custom-scroll custom-scroll-light">
        <ul class="sidebar-menu">
            <li class="menu-title">مینوی اصلی</li>

            <li>
                <a href="{{route('adminDashboard')}}" class="waves-effect  waves-light">
                    <span class="s-icon"><i class="ti-home"></i></span>
                    <span class="s-text">{{__('main.dashboard')}}</span>
                </a>
            </li>

            <li>
                <a href="{{route('viewHospitals')}}" class="waves-effect  waves-light">
                    <span class="s-icon"><i class="fa fa-bank"></i></span>
                    <span class="s-text">{{__('main.viewHospitals')}}</span>
                </a>
            </li>

            <li class="with-sub">
                <a href="#" class="waves-effect  waves-light">
                    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                    <span class="s-icon"><i class="fa fa-newspaper-o"></i></span>
                    <span class="s-text">اخبار</span>
                </a>
                <ul>
                    <li><a href="{{route('newsList')}}">منتظر تایید</a></li>
                    <li><a href="{{route('confirmedNews')}}">تایید شده</a></li>
                </ul>
            </li>

            <li class="with-sub">
                <a href="#" class="waves-effect  waves-light">
                    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                    <span class="s-icon"><i class="fa fa-globe"></i></span>
                    <span class="s-text">اعلانات</span>
                </a>
                <ul>
                    <li><a href="{{route('advertisementList')}}">منتظر تایید</a></li>
                    <li><a href="{{route('confirmedAdvertisement')}}">تایید شده</a></li>
                </ul>
            </li>

            <li class="with-sub">
              <a href="{{route('contact')}}" class="waves-effect  waves-light">
                <span class="s-icon"><i class="ti-paint-bucket"></i></span>
                <span class="s-text">پیام ها</span>
              </a>
            </li>



        </ul>
    </div>
</div>
