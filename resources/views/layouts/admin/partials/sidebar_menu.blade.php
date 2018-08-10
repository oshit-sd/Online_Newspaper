<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="nav-item start active open">
                <a href="{{ url('admin/dashboard') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>
            <li class="nav-item  @yield('users_menu')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond " ></i>
                    <span class="title">Users</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    {{--<li class="nav-item @yield('add_user') ">--}}
                        {{--<a href="{{ url('/CreateUsers') }}" class="nav-link ">--}}
                            {{--<span class="title">Create User</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="nav-item @yield('list_users') ">
                        <a href="{{ url('/Users') }}" class="nav-link ">
                            <span class="title">List Users</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  @yield('time')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond " ></i>
                    <span class="title">Update Time</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @yield('add_time')">
                        <a href="{{ url('/Time/create') }}" class="nav-link ">
                            <span class="title">Add Update Time</span>
                        </a>
                    </li>
                    <li class="nav-item @yield('list_time') ">
                        <a href="{{ url('/Time') }}" class="nav-link ">
                            <span class="title">List Update Time</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  @yield('main_menu')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond " ></i>
                    <span class="title">Main Menu</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item @yield('add_menu') ">
                        <a href="{{ url('/MainMenu/create') }}" class="nav-link ">
                            <span class="title">Add Main Menu</span>
                        </a>
                    </li>
                    <li class="nav-item @yield('list_menu') ">
                        <a href="{{ url('/MainMenu') }}" class="nav-link ">
                            <span class="title">List Main Menu</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  @yield('sub_menu')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond " ></i>
                    <span class="title">Sub Menu</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item @yield('add_sub') ">
                        <a href="{{ url('/SubMenu/create') }}" class="nav-link ">
                            <span class="title">Add Sub Menu</span>
                        </a>
                    </li>
                    <li class="nav-item @yield('list_sub') ">
                        <a href="{{ url('/SubMenu') }}" class="nav-link ">
                            <span class="title">List Sub Menu</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  @yield('Heading')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond " ></i>
                    <span class="title">Head Line / শিরোনাম</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item @yield('add_Heading') ">
                        <a href="{{ url('/Heading/create') }}" class="nav-link ">
                            <span class="title">Add Head Line</span>
                        </a>
                    </li>
                    <li class="nav-item @yield('list_Heading') ">
                        <a href="{{ url('/Heading') }}" class="nav-link ">
                            <span class="title">List Head Line</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  @yield('news')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond" ></i>
                    <span class="title">Publish News</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item @yield('add_news') ">
                        <a href="{{ url('/News/create') }}" class="nav-link ">
                            <span class="title">Add News</span>
                        </a>
                    </li>
                    <li class="nav-item @yield('ListNews') ">
                        <a href="{{ url('/News') }}" class="nav-link ">
                            <span class="title">View News</span>
                        </a>
                    </li>
                </ul>
            </li>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>