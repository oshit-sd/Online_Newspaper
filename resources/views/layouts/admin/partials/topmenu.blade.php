<div class="page-header-inner ">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a href="{{ url('admin/dashboard') }}">
            {{--<img src="{{ asset('assets/layouts/layout/img/logo.png' )}}" alt="logo" class="logo-default " /> --}}
         <div style="margin-top: 10px;"><span style="font-size: 20px; color: #fff;">News</span><span style=" font-size: 20px; color: #ff6964;">Paper</span></div>
        </a>
        <div class="menu-toggler sidebar-toggler">
            <span></span>
        </div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span></span>
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">

            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" class="img-circle" src="{{ asset('assets/layouts/layout/img/avatar3_small.jpg ') }}" />
                    <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> My Profile </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="icon-key"></i> Log Out

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
            <li class="dropdown dropdown-quick-sidebar-toggler">
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-logout"></i>
                </a>
            </li>
            <!-- END QUICK SIDEBAR TOGGLER -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
</div>