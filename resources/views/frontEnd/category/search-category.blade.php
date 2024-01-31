@extends("frontEnd.master")
@section('title')
    @endsection
@section('content')
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="block category-listing">

                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-md-6">
                                <div class="post-block-style post-grid clearfix">
                                    <div class="post-thumb">
                                        <a href="{{url('/details',['slug'=>$post->slug])}}">
                                            <img class="img-fluid" style="height: 235px;" src="{{asset($post->image)}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-large">
                                            <a href="{{url('/details',['slug'=>$post->slug])}}">{{substr($post->title,0)}}</a>
                                        </h2>
{{--                                        <div class="post-meta">--}}
{{--                                            <span class="post-comment pull-right"><i class="fa fa-comments-o"></i>--}}
{{--											<a href="#" class="comments-link"><span>03</span></a></span>--}}
{{--                                        </div>--}}
                                        <p>{!!substr($post->description,0,240)!!}...</p>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </div><!-- Col 1 end -->
                            @endforeach

                        </div><!-- Row end -->
                    </div><!-- Block Lifestyle end -->

                    <div class="paging">
                        <ul class="pagination">
                            <li>{{$posts->links()}}</li>
                        </ul>
                    </div><!-- Paging end -->


                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="block-title"><span>Follow Us</span></h3>

                            <ul class="social-icon">
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- Widget Social end -->

                        <div class="widget color-default">
                            <h3 class="block-title"><span>Popular News</span></h3>

                            <div class="post-overaly-style clearfix">
                                @foreach($populerenews as $populerenews)
                                <div class="post-thumb">
                                    <a href="{{url('/details',['slug'=>$populerenews->slug])}}">
                                        <img class="img-fluid" src="{{asset($populerenews->image)}}" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
{{--                                    <a class="post-cat" href="#">Health</a>--}}
                                    <h2 class="post-title title-small">
                                        <a href="{{url('/details',['slug'=>$populerenews->slug])}}">{{$populerenews->title}}</a>
                                    </h2>
                                    <div class="post-meta">
{{--                                        <span class="post-date">Feb 06, 2017</span>--}}
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                            @endforeach


                            <div class="list-post-block">
                                <ul class="list-post">
                                    @foreach($populerenews2 as $populerenews2)
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="{{url('/details',['slug'=>$populerenews2->slug])}}">
                                                    <img class="img-fluid" src="{{asset($populerenews2->image)}}" alt="" />
                                                </a>
{{--                                                <a class="post-cat" href="#">Gadgets</a>--}}
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="{{url('/details',['slug'=>$populerenews2->slug])}}">{{$populerenews2->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Mar 13, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                        @endforeach
                                </ul><!-- List post end -->
                            </div><!-- List post block end -->

                        </div><!-- Popular news widget end -->

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="{{asset($rightads->image)}}" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget m-bottom-0">
                            <h3 class="block-title"><span>Newsletter</span></h3>
                            <div class="ts-newsletter">
                                <div class="newsletter-introtext">
                                    <h4>Get Updates</h4>
                                    <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                                </div>

                                <div class="newsletter-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                            <button class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Newsletter end -->
                        </div><!-- Newsletter widget end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->
    @endsection
