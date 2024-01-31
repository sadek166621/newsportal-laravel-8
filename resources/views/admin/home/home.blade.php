@extends('admin.master')
@section('content')
    <!-- Main content -->
    <!-- Content Header (Page header) -->
{{--    <section class="content-header">--}}
{{--        <h1>--}}
{{--            Dashboard--}}
{{--            <small>Control panel</small>--}}
{{--        </h1>--}}
{{--        <ol class="breadcrumb">--}}
{{--            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--            <li class="active">Dashboard</li>--}}
{{--        </ol>--}}
{{--    </section>--}}

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('author.view'))
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$post}}<sup style="font-size: 20px"></sup></h3>
                        <p>Total Post</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('manage-post')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$pendingpost}}<sup style="font-size: 20px"></sup></h3>
                        <p>Pending Post</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('approve')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$registrations}}</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('manage-admins')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        @foreach($counter as $counter )
                            <h3>{{$counter->views}}</h3>
                        @endforeach
                            <p>Website Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{url('/')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>{{$category}}<sup style="font-size: 20px"></sup></h3>
                        <p>Total Categorys</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('category')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{$todayspost}}<sup style="font-size: 20px"></sup></h3>
                        <p>Todays Post</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('manage-post')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3>{{$subcat}}<sup style="font-size: 20px"></sup></h3>
                        <p>Total Subcategorys</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('subcategory')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-olive-active">
                    <div class="inner">
                        <h3>{{$totalroles}}<sup style="font-size: 20px"></sup></h3>
                        <p>Total Roles</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('manage-roles')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-fuchsia">
                    <div class="inner">
                        <h3>{{$totalsubcribe}}<sup style="font-size: 20px"></sup></h3>
                        <p>Total Subscriber</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('home')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>{{$tatalads}}<sup style="font-size: 20px"></sup></h3>
                        <p>Total Ads</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('manage-ads')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue-active">
                    <div class="inner">
                        <h3>{{$todayspupularnews}}<sup style="font-size: 20px"></sup></h3>
                        <p>Todays Populer News</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('manage-post')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple-gradient">
                    <div class="inner">
                        <h3>{{$todaystotalapprove}}<sup style="font-size: 20px"></sup></h3>
                        <p>Todays Total Approve Post</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="{{route('approve')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->

                @endif
        </div><!-- /.row -->
        <!-- Main row -->

    </section><!-- /.content -->

@endsection
