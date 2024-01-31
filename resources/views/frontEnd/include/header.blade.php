<style>
    .marquee {
        width: 950px;
        margin: 0 auto;
        overflow: hidden;
        box-sizing: border-box;
    }

    .marquee span {
        display: inline-block;
        width: max-content;

        padding-left: 100%;
        /* show the marquee just outside the paragraph */
        will-change: transform;
        animation: marquee 40s linear infinite;
    }

    .marquee span:hover {
        animation-play-state: paused
    }


    @keyframes marquee {
        0% { transform: translate(0, 0); }
        100% { transform: translate(-100%); }
    }


    /* Respect user preferences about animations */

    @media (prefers-reduced-motion: reduce) {
        .marquee span {
            animation-iteration-count: 1;
            animation-duration: 15s;
            /* instead of animation: none, so an animationend event is
             * still available, if previously attached.
             */
            width: auto;
            padding-left: 0;
        }
    }

</style>

<div class="trending-bar d-md-block d-lg-block d-none"style="height: 41px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="trending-title">শীর্ষ সংবাদ :</h3>
                <div id="trending-slide" >
                    <div class="item">
                        <div class="post-content" >
                            <p class="marquee">
                                <span style="position: relative;bottom: 10px;">
                                    {{$Trendingnews->trending_news}}
                                </span>
                            </p>
                        </div><!-- Post content end -->
                    </div><!-- Item 1 end -->
                </div><!-- Carousel end -->
            </div><!-- Col end -->
        </div><!--/ Row end -->
    </div><!--/ Container end -->
</div><!--/ Trending end -->

<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ts-date">
                    <i class="fa fa-calendar-check-o"></i>{{\Carbon\Carbon::now()}}
                </div>
                <ul class="unstyled top-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Write for Us</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div><!--/ Top bar left end -->

            <div class="col-md-4 top-social text-lg-right text-md-center">
                <ul class="unstyled">
                    <li>
                        <a title="Facebook" href="#">
                            <span class="social-icon"><i class="fa fa-facebook"></i></span>
                        </a>
                        <a title="Twitter" href="#">
                            <span class="social-icon"><i class="fa fa-twitter"></i></span>
                        </a>
                        <a title="Google+" href="#">
                            <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                        </a>
                        <a title="Linkdin" href="#">
                            <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                        </a>
                        <a title="Rss" href="#">
                            <span class="social-icon"><i class="fa fa-rss"></i></span>
                        </a>
                        <a title="Skype" href="#">
                            <span class="social-icon"><i class="fa fa-skype"></i></span>
                        </a>
                    </li>
                </ul><!-- Ul end -->
            </div><!--/ Top social col end -->
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</div><!--/ Topbar end -->

<!-- Header start -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset($logos->image)}}" height="60" width="250" alt="">
                    </a>
                </div>
            </div><!-- logo col end -->
            <div class="col-md-9 col-sm-12 header-right">
                @include("frontEnd.include.toastr")
                @foreach($headers as $header)
                <div class="ad-banner float-right">
                    <a href=""><img src="{{asset($header->image)}}" class="img-fluid" alt="" style="height: 100px;width: 720px;"></a>
                </div>
                    @endforeach
            </div><!-- header right end -->
        </div><!-- Row end -->
    </div><!-- Logo and banner area end -->
</header><!--/ Header end -->

<div class="main-nav menu1 clearfix" id="myHeader">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg col">
                <div class="site-nav-inner float-left">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- End of Navbar toggler -->

                    <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            @foreach($categories as $category)
                                <li class="dropdown">
                                    <a href="{{route('category_',['id'=>$category->id,'name'=>$category->category_name])}}" >{{$category->category_name}}</a>
{{--                                    <ul class="dropdown-menu" role="menu">--}}
{{--                                        <li class="">--}}
{{--                                            <a href="{{route('contact')}}">Contact</a>--}}
{{--                                        </li>--}}
{{--                                    </ul><!-- End dropdown -->--}}
                                </li>
                            @endforeach
                            <!-- Features menu end -->
                        </ul><!--/ Nav ul end -->
                    </div><!--/ Collapse end -->

                </div><!-- Site Navbar inner end -->
            </nav><!--/ Navigation end -->

            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <form action="{{route('search')}}" method="get">
                @csrf
                <div class="search-block" style="display: none;">
                    <input type="text" name="search" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->
            </form>

        </div><!--/ Row end -->
    </div><!--/ Container end -->
</div>

    <style>
        .mdclose{
            position: relative;
            left: 230px;
            top: 10px;
            z-index: 99999;
            background-color:bisque;
        }

    </style>


<div class="modal" id="myModal" tabindex="-1" style="padding-right: 61px;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;z-index: 99999;left: 560px;top: 4px; ">
                    <span aria-hidden="true" style="font-size: 35px;">&times;</span>
                </button>
            </div>
            <div class="modal-body"style="height: 100px;">
                @foreach($popupads as $ad)--}}
                <img src="{{asset($ad->popup_image)}}" alt="image" height="500px" width="600px" style="position: relative;right: 26px;bottom: 40px;border: 2px solid black;">
                 @endforeach
            </div>

        </div>
    </div>
</div>

{{--    <div class="modal hide fade" id="myModal">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content" style="height: 0px;">--}}

{{--                    <button type="button" class="close mdclose" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}

{{--                <div class="modal-body nl-popup-inner">--}}
{{--                    @foreach($popupads as $ad)--}}
{{--                    <img src="{{asset($ad->popup_image)}}" alt="image" height="500px" width="500px" style="position: relative;right: 18px;bottom: 40px;">--}}
{{--                        @endforeach--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.js" type="text/javascript"></script>

<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
