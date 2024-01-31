@extends("frontEnd.master")
@section('title')
    {{$post->title}}
@endsection
@section('content')
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="single-post">

                        <div class="post-media post-featured-image">
                            <img src="{{asset($post->image)}}" class="img-fluid" alt="image">
                        </div>

                        <div class="post-title-area">
                            <h2 class="post-title">
                               {{$post->title}}
                            </h2>
                            <div class="post-meta">
								<span class="post-author">
									By <a href="#">{{$post->name}}</a>
								</span>
                                <!-- <span class="post-date"><i class="fa fa-clock-o"></i>{{$post->created_at}}</span> -->
{{--                                <span class="post-hits"><i class="fa fa-eye"></i> 21</span>--}}
{{--                                <span class="post-comment"><i class="fa fa-comments-o"></i>--}}
{{--								<a href="#" class="comments-link"><span>01</span></a></span>--}}
                            </div>
                        </div><!-- Post title end -->

                        <div class="post-content-area">
                            <div class="entry-content">
                                <p> <span class="dropcap"></span>{!! $post->description !!}</p>

                            </div><!-- Entery content end -->


{{--                            <div class="share-items clearfix">--}}
{{--                                <ul class="post-social-icons unstyled">--}}
{{--                                    <li class="facebook">--}}
{{--                                        <a href="{{route('login.facebook')}}">--}}
{{--                                            <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="twitter">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="gplus">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="pinterest">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- Share items end -->--}}

                        </div><!-- post-content end -->
                    </div><!-- Single post end -->
                    <div class="related-posts block">
                        <h3 class="block-title"><span>Related Posts</span></h3>

                        <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                            @foreach($related as $relate )
                            <div class="item">
                                <div class="post-block-style clearfix">
                                    <div class="post-thumb">
                                        <a href="{{url('/details',['slug'=>$relate->slug])}}"><img class="img-fluid" style="height: 145px;" src="{{asset($relate->image)}}" alt="" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-medium">
                                            <a href="{{url('/details',['slug'=>$relate->slug])}}">{{substr($relate->title,0,140)}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#">{{$relate->name}}</a></span>
                                            <span class="post-date">{{$relate->created_at}}</span>
                                        </div>
                                    </div><!-- Post content end -->
                                </div><!-- Post Block style end -->
                            </div><!-- Item 1 end -->
                                @endforeach
                        </div><!-- Carousel end -->

                    </div><!-- Related posts end -->

                    <!-- Post comment start -->

{{--                    <div class="comments-form">--}}
{{--                        <h3 class="title-normal">Leave a comment</h3>--}}

{{--                        <form role="form">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea>--}}
{{--                                    </div>--}}
{{--                                </div><!-- Col end -->--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>--}}
{{--                                    </div>--}}
{{--                                </div><!-- Col end -->--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" placeholder="Your Website" type="text" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- Form row end -->--}}
{{--                            <div class="clearfix">--}}
{{--                                <button class="comments-btn btn btn-primary" type="submit">Post Comment</button>--}}
{{--                            </div>--}}
{{--                        </form><!-- Form end -->--}}
{{--                    </div><!-- Comments form end -->--}}

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
                                        <a href="{{route('details',['slug'=>$populerenews->slug])}}">
                                            <img class="img-fluid" src="{{asset($populerenews->image)}}" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        {{--                                    <a class="post-cat" href="#">Health</a>--}}
                                        <h2 class="post-title title-small">
                                            <a href="{{route('details',['slug'=>$populerenews->slug])}}">{{$populerenews->title}}</a>
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
                                                    <a href="{{route('details',['slug'=>$populerenews2->slug])}}">
                                                        <img class="img-fluid" src="{{asset($populerenews2->image)}}" alt="" />
                                                    </a>
                                                    {{--                                                <a class="post-cat" href="#">Gadgets</a>--}}
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                    <h2 class="post-title title-small">
                                                        <!-- <a href="{{route('details',['slug'=>$populerenews2->slug])}}">{{$populerenews2->title}}</a> -->
                                                    </h2>
                                                    <div class="post-meta">
                                                        <!-- <span class="post-date">{{$populerenews2->created_at}}</span> -->
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->
                                    @endforeach
                                </ul><!-- List post end -->
                            </div><!-- List post block end -->

                        </div><!-- Popular news widget end -->

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget m-bottom-0">
                            <h3 class="block-title"><span>Newsletter</span></h3>
                            <div class="ts-newsletter">
                                <div class="newsletter-introtext">
                                    <h4>Get Updates</h4>
                                    <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                                </div>

                                <div class="newsletter-form">
                                    <form action="{{route('subscribe')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
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
