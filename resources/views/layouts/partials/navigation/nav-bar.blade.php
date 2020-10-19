<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
    <div class="kt-container" style="background: white;">
        <!-- begin:: Brand -->
        <div class="kt-header__brand " id="kt_header_brand">
            <div class="kt-header__brand-logo">
                <a href="#" style="font-size: larger;">
                    {{--                    <strong class="text-danger">Reservation</strong><strong class="text-success">App</strong>--}}
                    <img src="{{asset('/images/logo.png')}} " alt="logo"  style="width: 30%">

                    {{--                    <img src="{{env('AWS_BUCKET').'ekt_assets'.'/'. Session::get('logo')}}"  width="200px" alt="">--}}
                </a>
            </div>
            <div class="kt-header__brand-nav">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse" id="navbarNav"  >
                <ul class="navbar-nav" style="float: left">
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="{{ url('activities') }}" style="color: black">Activity</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </nav>
        <!-- end:: Brand -->
        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">
            <!--begin: User bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">











                    <span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
                    @if(Auth()->check())
                        <span class="kt-header__topbar-username kt-visible-desktop" style="color: black">{{Auth()->user()->name}}</span>
                    @endif
                    <span class="kt-header__topbar-icon" style="width:auto; color:white;">
                        <a class="link-item btn btn-primary" style="cursor: pointer; font-size: smaller"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     <span class=""></span> Log out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                    @csrf
                </form>
                    </span>
                </div>
            </div>
            <!--end: User bar -->
        </div>
        <!-- end:: Header Topbar -->
    </div>
</div>
<!-- end:: Header -->
