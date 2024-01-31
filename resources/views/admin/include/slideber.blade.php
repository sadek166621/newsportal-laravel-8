<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <div>...</div>
            </div>
            <div class="pull-left info">
                <p>{{Auth::guard('admin')->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
{{--        <form action="#" method="get" class="sidebar-form">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" name="q" class="form-control" placeholder="Search..." />--}}
{{--                <span class="input-group-btn">--}}
{{--                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
{{--              </span>--}}
{{--            </div>--}}
{{--        </form>--}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">ALL MENUS</li>
            <li class="active"><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> Home </a></li>
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('admin.view'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-desktop"></i> <span>Admins</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('admin.create'))
                    <li class="active"><a href="{{route('admins')}}"><i class="fa fa-circle-o"></i> Add-Admins</a></li>
                    @endif
                    <li class="active"><a href="{{route('manage-admins')}}"><i class="fa fa-circle-o"></i> Manage-Admins</a></li>
                </ul>

            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('role.view'))
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-eye"></i> <span>Roles & Permission</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{route('roles')}}"><i class="fa fa-circle-o"></i> Add-roles</a></li>
                        <li class="active"><a href="{{route('manage-roles')}}"><i class="fa fa-circle-o"></i> Manage-roles</a></li>
                    </ul>

                </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('category.view'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Manage-Category</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('category')}}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li class="active"><a href="{{route('subcategory')}}"><i class="fa fa-circle-o"></i> Sub-Category</a></li>
                </ul>

            </li>
            @endif
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Logo</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('logo')}}"><i class="fa fa-circle-o"></i> Add-Logo</a></li>
                </ul>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Trending-News</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('trending-news')}}"><i class="fa fa-circle-o"></i> Add-trending-news</a></li>
                </ul>

            </li>
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('post.view'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Post</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('post.create'))
                    <li class="active"><a href="{{route('post')}}"><i class="fa fa-circle-o"></i> Add-Post</a></li>
                    @endif
                    <li class="active"><a href="{{route('manage-post')}}"><i class="fa fa-circle-o"></i>Manage-Post</a></li>
                </ul>

            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('notification.view'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Post-Notification</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('post-notification')}}"><i class="fa fa-circle-o"></i> Add-Post-Notification</a></li>
                </ul>

            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('author.view'))
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Author</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{route('approve')}}"><i class="fa fa-circle-o"></i>Approve-Post</a></li>
                    </ul>

                </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('ads.view'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-adn"></i> <span>Ads</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('ads')}}"><i class="fa fa-circle-o"></i> Add-Ads</a></li>
                    <li class="active"><a href="{{route('manage-ads')}}"><i class="fa fa-circle-o"></i>Manage-Ads</a></li>
                </ul>

            </li>
                @endif


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
