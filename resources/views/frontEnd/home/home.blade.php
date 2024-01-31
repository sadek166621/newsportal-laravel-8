@extends("frontEnd.master")
@section('title')
    New Portal
@endsection
@section('content')

    <div class="gap-40 "></div>
    <section class="featured-post-area no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 pad-r">
                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                        @foreach($latestposts as $latestpost)
                            <div class="item" style="background-image:url({{$latestpost->image}})">
                                <div class="featured-post">
                                    <div class="post-content">
                                        <h2 class="post-title title-extra-large">
                                            <a href="{{url('/details',['slug'=>$latestpost->slug])}}">{{$latestpost->title}}</a>
                                        </h2>
                                        <!-- <span class="post-date">{{$latestpost->created_at}}</span> -->
                                    </div>
                                </div><!--/ Featured post end -->

                            </div><!-- Item 1 end -->
                        @endforeach
                    </div><!-- Featured owl carousel end-->
                </div><!-- Col 7 end -->

                <div class="col-lg-5 col-md-12 pad-l">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($nationalposts as $nationalpost)
                                <div class="post-overaly-style contentTop hot-post-top clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('details',['slug'=>$nationalpost->slug])}}"><img class="img-fluid" src="{{$nationalpost->image}}" style="height: 458px; width: 458px" alt="" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-large">
                                            <a href="{{route('details',['slug'=>$nationalpost->slug])}}">{{$nationalpost->title}}</a>
                                        </h2>
                                        <!-- <span class="post-date">{{$nationalpost->created_at}}</span> -->
                                    </div><!-- Post content end -->
                                </div><!-- Post Overaly end -->
                            @endforeach
                        </div><!-- Col end -->

                        <div class="col-md-6 pad-r-small">
                            @foreach($coronaposts as $coronaposts)
                                <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('details',['slug'=>$coronaposts->slug])}}"><img class="img-fluid" src="{{$coronaposts->image}}" alt="" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-medium">
                                            <a href="{{route('details',['slug'=>$coronaposts->slug])}}">{{$coronaposts->title}}</a>
                                        </h2>
                                        <!-- <span class="post-date">{{$coronaposts->created_at}}</span> -->

                                    </div><!-- Post content end -->
                                </div><!-- Post Overaly end -->
                            @endforeach
                        </div><!-- Col end -->

                        <div class="col-md-6 pad-l-small">
                            @foreach($bangladeshposts as $bangladeshpost)
                                <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                                    <div class="post-thumb">
                                        <a href="{{route('details',['slug'=>$bangladeshpost->slug])}}"><img class="img-fluid" src="{{$bangladeshpost->image}}" alt="image" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-medium">
                                            <a href="{{route('details',['slug'=>$bangladeshpost->slug])}}">{{$bangladeshpost->title}}</a>
                                        </h2>
                                        <!-- <span class="post-date">{{$bangladeshpost->created_at}}</span> -->
                                    </div><!-- Post content end -->
                                </div><!-- Post Overaly end -->
                            @endforeach
                        </div><!-- Col end -->
                    </div>
                </div><!-- Col 5 end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Trending post end -->

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="latest-news block color-red">
                        <h3 class="block-title"><span>Breaking News</span></h3>
                        <div id="latest-news-slide" class="owl-carousel slidees owl-theme latest-news-slide">
                            @foreach($post as $post)
                                <div class="item">
                                    <ul class="list-post">
                                        <li class="clearfix">
                                            <div class="post-block-style clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('details',['slug'=>$post->slug])}}"><img class="img-fluid" src="{{asset($post->image)}}" alt="image" style="height: 150px" /></a>
                                                </div>
                                                <div class="post-content">
                                                    <h2 class="post-title title-medium">
                                                        <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-author"><a href="{{route('details',['slug'=>$post->slug])}}">{{$post->name}}</a></span>
                                                        <span class="post-date">{{$post->created_at}}</span>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post Block style end -->
                                        </li><!-- Li end -->

                                    </ul><!-- List post 1 end -->

                                </div><!-- Item 1 end -->
                            @endforeach
                        </div><!-- Latest News owl carousel end-->
                    </div><!--- Latest news end -->

                    <div class="gap-50"></div>

                    <!--- Featured Tab startet -->
                    <div class="featured-tab color-blue">
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        @foreach($bangladeshposts as $bangladeshpost)
                                            <div class="post-block-style clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{route('details',['slug'=>$bangladeshpost->slug])}}">
                                                        <img class="img-fluid" src="{{$bangladeshpost->image}}" alt="image" />
                                                    </a>
                                                </div>
                                                {{--                                            <a class="post-cat" href="#">Gadgets</a>--}}
                                                <div class="post-content">
                                                    <h2 class="post-title">
                                                        <a href="{{route('details',['slug'=>$bangladeshpost->slug])}}">{{$bangladeshpost->title}}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-author"><a href="{{route('details',['slug'=>$bangladeshpost->slug])}}"></a></span>
                                                        <span class="post-date">{{$bangladeshpost->created_at}}</span>                                                    </div>
                                                    {{--                                                <p>{!! substr($bangladeshpost->description,0,) !!}</p>--}}
                                                </div><!-- Post content end -->
                                            </div><!-- Post Block style end -->
                                        @endforeach
                                    </div><!-- Col end -->

                                    <div class="col-lg-6 col-md-6">
                                        <div class="list-post-block">
                                            <ul class="list-post">
                                                @foreach($bangladeshposts2 as $bangladeshpost2)
                                                    <li class="clearfix">
                                                        <div class="post-block-style post-float clearfix">
                                                            <div class="post-thumb">
                                                                <a href="{{route('details',['slug'=>$bangladeshpost2->slug])}}">
                                                                    <img class="img-fluid" src="{{$bangladeshpost2->image}}" alt="" />
                                                                </a>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="{{route('details',['slug'=>$bangladeshpost2->slug])}}">{{$bangladeshpost2->title}}</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">{{$bangladeshpost2->created_at}}</span>                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 1 end -->
                                                @endforeach

                                                {{--                                                <li class="clearfix">--}}
                                                {{--                                                    <div class="post-block-style post-float clearfix">--}}
                                                {{--                                                        <div class="post-thumb">--}}
                                                {{--                                                            <a href="#">--}}
                                                {{--                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/gadget3.jpg" alt="" />--}}
                                                {{--                                                            </a>--}}
                                                {{--                                                        </div><!-- Post thumb end -->--}}

                                                {{--                                                        <div class="post-content">--}}
                                                {{--                                                            <h2 class="post-title title-small">--}}
                                                {{--                                                                <a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's dream</a>--}}
                                                {{--                                                            </h2>--}}
                                                {{--                                                            <div class="post-meta">--}}
                                                {{--                                                                <span class="post-date">Jan 11, 2017</span>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div><!-- Post content end -->--}}
                                                {{--                                                    </div><!-- Post block style end -->--}}
                                                {{--                                                </li><!-- Li 2 end -->--}}

                                                {{--                                                <li class="clearfix">--}}
                                                {{--                                                    <div class="post-block-style post-float clearfix">--}}
                                                {{--                                                        <div class="post-thumb">--}}
                                                {{--                                                            <a href="#">--}}
                                                {{--                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/gadget4.jpg" alt="" />--}}
                                                {{--                                                            </a>--}}
                                                {{--                                                        </div><!-- Post thumb end -->--}}

                                                {{--                                                        <div class="post-content">--}}
                                                {{--                                                            <h2 class="post-title title-small">--}}
                                                {{--                                                                <a href="#">Soaring through Southern Patagonia with the Premium Byrd drone</a>--}}
                                                {{--                                                            </h2>--}}
                                                {{--                                                            <div class="post-meta">--}}
                                                {{--                                                                <span class="post-date">Feb 19, 2017</span>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div><!-- Post content end -->--}}
                                                {{--                                                    </div><!-- Post block style end -->--}}
                                                {{--                                                </li><!-- Li 3 end -->--}}

                                                {{--                                                <li class="clearfix">--}}
                                                {{--                                                    <div class="post-block-style post-float clearfix">--}}
                                                {{--                                                        <div class="post-thumb">--}}
                                                {{--                                                            <a href="#">--}}
                                                {{--                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/gadget5.jpg" alt="" />--}}
                                                {{--                                                            </a>--}}
                                                {{--                                                        </div><!-- Post thumb end -->--}}

                                                {{--                                                        <div class="post-content">--}}
                                                {{--                                                            <h2 class="post-title title-small">--}}
                                                {{--                                                                <a href="#">Google Assistant starts calling out to all recent Android phones</a>--}}
                                                {{--                                                            </h2>--}}
                                                {{--                                                            <div class="post-meta">--}}
                                                {{--                                                                <span class="post-date">Feb 27, 2017</span>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div><!-- Post content end -->--}}
                                                {{--                                                    </div><!-- Post block style end -->--}}
                                                {{--                                                </li><!-- Li 4 end -->--}}
                                            </ul><!-- List post end -->
                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_b">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/game1.jpg" alt="" />
                                                </a>
                                            </div>
                                            <a class="post-cat" href="#">Games</a>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">Historical heroes and robot dinosaurs: New games on our... </a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author"><a href="#">John Doe</a></span>
                                                    <span class="post-date">Feb 24, 2017</span>
                                                </div>
                                                <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </div><!-- Col end -->

                                    <div class="col-lg-6 col-md-6">
                                        <div class="list-post-block">
                                            <ul class="list-post">
                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/game2.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Lindie game plonks players in front of huge starship command cent…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 13, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/game3.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Meet Twitch: Mintendo’s new console mixes handheld and console…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Jan 11, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 2 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/game4.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 19, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 3 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/game5.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Oazer and Lacon bring eSport expertise to new PS4 controller…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 27, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 4 end -->
                                            </ul><!-- List post end -->
                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                </div><!-- Tab pane Row 2 end -->
                            </div><!-- Tab pane 2 end -->

                            <div class="tab-pane animated fadeInLeft" id="tab_c">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/robot1.jpg" alt="" />
                                                </a>
                                            </div>
                                            <a class="post-cat" href="#">Robotics</a>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">There's no escaping Watsone Dynamics' wheeled jumping robot</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author"><a href="#">John Doe</a></span>
                                                    <span class="post-date">Feb 24, 2017</span>
                                                </div>
                                                <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </div><!-- Col end -->

                                    <div class="col-lg-6 col-md-6">
                                        <div class="list-post-block">
                                            <ul class="list-post">
                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/robot2.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Robot Life on Mars! Meet the Machines Exploring the Red Planet To…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 13, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/robot3.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Amaging China mech suit aims to assist with Lukushima cleanup</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Jan 11, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 2 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/robot4.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Taddler robot provides insights into early childhood learning</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 19, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 3 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/tech/robot5.jpg" alt="" />
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Robots in hospitals can be quite handy to navigate around the ho…</a>
                                                            </h2>
                                                            <div class="post-meta">
{{--                                                                <span class="post-date">Feb 27, 2017</span>--}}
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 4 end -->
                                            </ul><!-- List post end -->

                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                </div><!-- Tab pane Row 3 end -->
                            </div><!-- Tab pane 3 end -->
                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->

                    <div class="gap-40"></div>

                    <div class="block color-orange">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                @foreach($coronaposts2 as $coronapost2)
                                    <div class="post-overaly-style clearfix">
                                        <div class="post-thumb"style="height: 203px;">
                                            <a href="{{route('details',['slug'=>$coronapost2->slug])}}">
                                                <img class="img-fluid" src="{{$coronapost2->image}}" alt="image" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('details',['slug'=>$coronapost2->slug])}}">{{$coronapost2->title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">{{$coronapost2->created_at}}</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article end -->
                                @endforeach

                                <div class="list-post-block">
                                    <ul class="list-post">
                                        @foreach($coronaposts3 as $coronapost3)
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="{{route('details',['slug'=>$coronapost3->slug])}}">
                                                            <img class="img-fluid" src="{{$coronapost3->image}}" alt="image" />
                                                        </a>
                                                    </div><!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="{{route('details',['slug'=>$coronapost3->slug])}}">{{$coronapost3->title}} </a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">{{$coronapost3->created_at}}</span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post block style end -->
                                            </li><!-- Li 1 end -->
                                        @endforeach
                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                            </div><!-- Col 1 end -->

                            <div class="col-lg-6 col-md-6">
                                @foreach($countryandouts as $countryandout)
                                    <div class="post-overaly-style last clearfix">
                                        <div class="post-thumb" style="height: 203px;">
                                            <a href="#">
                                                <img class="img-fluid" src="{{$countryandout->image}}" alt="image" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('details',['slug'=>$countryandout->slug])}}">{{$countryandout->title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">{{$countryandout->created_at}}</span>
                                            </div>
                                            <div class="post-meta">
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article end -->
                                @endforeach

                                <div class="list-post-block">
                                    <ul class="list-post">
                                        @foreach($countryandouts2 as $countryandout2)
                                        <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="{{route('details',['slug'=>$countryandout2->slug])}}">
                                                            <img class="img-fluid" src="{{$countryandout2->image}}" alt="image" />
                                                        </a>
                                                    </div><!-- Post thumb end -->

                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="{{route('details',['slug'=>$countryandout2->slug])}}">{{$countryandout2->title}}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">{{$countryandout2->created_at}}</span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->
                                        @endforeach

                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                            </div><!-- Col 2 end -->
                        </div><!-- Row end -->
                    </div><!-- Block Lifestyle end -->


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
                                            <img class="img-fluid" src="{{$populerenews->image}}" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        {{--                                    <a class="post-cat" href="#">Health</a>--}}
                                        <h2 class="post-title">
                                            <a href="{{route('details',['slug'=>$populerenews->slug])}}">{{$populerenews->title}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-date">{{$populerenews->created_at}}</span>                                        </div>
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
                                                        <img class="img-fluid" src="{{$populerenews2->image}}" alt="" />
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                    <h2 class="post-title title-small">
                                                        <a href="{{route('details',['slug'=>$populerenews2->slug])}}">{{$populerenews2->title}}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-date">{{$populerenews2->created_at}}</span>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->
                                    @endforeach
                                </ul><!-- List post end -->
                            </div><!-- List post block end -->

                        </div><!-- Popular news widget end -->

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="{{$rightads->image}}" alt="" />
                        </div><!-- Sidebar Ad end -->

                        <div class="widget color-default m-bottom-0"style="height: 312px;">
                            <h3 class="block-title"><span>Trending News</span></h3>

                            <div id="post-slide" class="owl-carousel owl-theme post-slide">
                                <div class="item">
                                    @foreach($trendingnews as $trendingnews)
                                        <div class="post-overaly-style text-center clearfix">
                                            <div class="post-thumb">
                                                <a href="{{route('details',['slug'=>$trendingnews->slug])}}">
                                                    <img class="img-fluid" src="{{asset($trendingnews->image)}}" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="{{route('details',['slug'=>$trendingnews->slug])}}">{{$trendingnews->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">{{$trendingnews->created_at}}</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Overaly Article 1 end -->
                                    @endforeach
                                </div><!-- Item 1 end -->

                            </div><!-- Post slide carousel end -->

                        </div><!-- Trending news end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->

    <section class="ad-content-area text-center no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="{{$middleads->image}}" style="height: 100px;width: 800px;" alt="image" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content top end -->

    <section class="block-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="block color-dark-blue">
                        <h3 class="block-title"></h3>
                        @foreach($sports as $sport)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="{{route('details',['slug'=>$sport->slug])}}">
                                        <img class="img-fluid" src="{{$sport->image}}" alt="image"  />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{route('details',['slug'=>$sport->slug])}}">{{$sport->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{$sport->created_at}}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        @endforeach

                        <div class="list-post-block">
                            <ul class="list-post">
                                @foreach($sports2 as $sport2)
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="{{route('details',['slug'=>$sport2->slug])}}">
                                                    <img class="img-fluid" src="{{$sport2->image}}" alt="image" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="{{route('details',['slug'=>$sport2->slug])}}">{{$sport2->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">{{$sport2->created_at}}</span>                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                @endforeach
                            </ul><!-- List post end -->
                        </div><!-- List post block end -->
                    </div><!-- Block end -->
                </div><!-- Travel Col end -->

                <div class="col-lg-4">
                    <div class="block color-aqua">
                        <h3 class="block-title"></h3>
                        @foreach($coronaposts4 as $coronapost4)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb" style="height: 235px;">
                                    <a href="{{route('details',['slug'=>$coronapost4->slug])}}">
                                        <img class="img-fluid" src="{{$coronapost4->image}}" style="height: 235px;" alt="image" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{route('details',['slug'=>$coronapost4->slug])}}">{{$coronapost4->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{$coronapost4->created_at}}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        @endforeach

                        <div class="list-post-block">
                            <ul class="list-post">
                                @foreach($coronaposts5 as $coronapost5)
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="{{route('details',['slug'=>$coronapost5->slug])}}">
                                                    <img class="img-fluid" src="{{$coronapost5->image}}" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="{{route('details',['slug'=>$coronapost5->slug])}}">{{$coronapost5->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">{{$coronapost5->created_at}}</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                @endforeach

                            </ul><!-- List post end -->
                        </div><!-- List post block end -->
                    </div><!-- Block end -->
                </div><!-- Gadget Col end -->

                <div class="col-lg-4">
                    <div class="block color-violet">
                        <h3 class="block-title"></h3>
                        @foreach($banijjoposts as $banijjopost)
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb" style="height: 235px">
                                    <a href="{{route('details',['slug'=>$banijjopost->slug])}}">
                                        <img class="img-fluid" src="{{$banijjopost->image}}" style="height: 235px" alt="image" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{route('details',['slug'=>$banijjopost->slug])}}">{{$banijjopost->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">{{$banijjopost->created_at}}</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->
                        @endforeach

                        <div class="list-post-block">
                            <ul class="list-post">
                                @foreach($banijjoposts2 as $banijjopost2)
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{$banijjopost2->image}}" alt="image" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">{{$banijjopost2->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">{{$banijjopost2->created_at}}</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                @endforeach
                            </ul><!-- List post end -->
                        </div><!-- List post block end -->
                    </div><!-- Block end -->
                </div><!-- Health Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- 2nd block end -->

    <section class="block-wrapper video-block">
        <div class="container">
            <div class="row">
                <div class="video-tab clearfix">
                    <h2 class="video-tab-title">Watch Now</h2>
                    <div class="row">
                        <div class="col-sm-8">
                            @foreach($videos as $video)
                            <iframe id="vid_frame" src="{{$video->video_link}}" height="438" width="900"  frameborder="0" allowfullscreen></iframe>
{{--                                width="850" height="450"--}}
                            @endforeach
                            {{--                            <div class="tab-content">--}}
{{--                                @foreach($videos as $video)--}}
{{--                                    <div class="tab-pane active animated fadeIn" id="video1">--}}
{{--                                        <div class="post-overaly-style clearfix">--}}
{{--                                            <div class="post-thumb">--}}
{{--                                                <img class="img-fluid" src="{{$video->image}}" alt="" />--}}
{{--                                                <a class="popup" href="{{$video->video_link}}">--}}
{{--                                                    <div class="video-icon">--}}
{{--                                                        <i class="fa fa-play"></i>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div><!-- Post thumb end -->--}}
{{--                                            <div class="post-content">--}}
{{--                                                <a class="post-cat" href="{{route('details',['slug'=>$video->slug])}}">Video</a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="{{route('details',['slug'=>$video->slug])}}">{{$video->title}}</a>--}}
{{--                                                </h2>--}}
{{--                                            </div><!-- Post content end -->--}}
{{--                                        </div><!-- Post Overaly Article end -->--}}
{{--                                    </div><!--Tab pane 1 end-->--}}
{{--                                @endforeach--}}

{{--                                <div class="modal fade" id="modal_box" style="z-index: 99999">--}}
{{--                                    <div class="modal-dialog modal-lg">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <div class="card">--}}
{{--                                                    <div class="card-body">--}}

{{--                                                        <iframe width="730" height="315"--}}
{{--                                                                src="" id="video_link">--}}
{{--                                                        </iframe>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class=" btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tab-pane animated fadeIn" id="video3">--}}
{{--                                    <div class="post-overaly-style clearfix">--}}
{{--                                        <div class="post-thumb">--}}
{{--                                            <img class="img-fluid" src="{{asset('frontEnd')}}/images/news/video/video2.jpg" alt="" />--}}
{{--                                            <a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">--}}
{{--                                                <div class="video-icon">--}}
{{--                                                    <i class="fa fa-play"></i>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div><!-- Post thumb end -->--}}
{{--                                        <div class="post-content">--}}
{{--                                            <a class="post-cat" href="#">Video</a>--}}
{{--                                            <h2 class="post-title title-medium">--}}
{{--                                                <a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>--}}
{{--                                            </h2>--}}
{{--                                        </div><!-- Post content end -->--}}
{{--                                    </div><!-- Post Overaly Article 2 end -->--}}
{{--                                </div><!--Tab pane 2 end-->--}}


{{--                            </div><!-- Tab content end -->--}}
                        </div><!--Tab col end -->
                        <div class="col-sm-4">
                            @foreach($sub_video as $sub_video)
                                        <div class="vid-item" onClick="if (!window.__cfRLUnblockHandlers) return false; document.getElementById('vid_frame').src='{{$sub_video->video_link}}'" data-cf-modified-cac4c826395f41f6a89994dc-="" >
{{--                                            style="padding: 0px 0px 0px 175px;height: 50px;"--}}
                                            <div class="col-sm-4">
                                                <img class="img-responsive" src="{{$sub_video->image}}" alt="" style="height: 130px; width:185px;position: relative;left: 116px;"/>
                                            </div>
                                        </div><!--Tab nav col end -->
                                <br>
                            @endforeach

                    </div>
                </div><!-- Video tab end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Video block end -->

{{--    <section class="ad-content-area text-center no-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <img class="img-fluid" src="{{$middleads->image}}" style="height: 100px;width: 800px;" alt="image" />--}}
{{--                </div><!-- Col end -->--}}
{{--            </div><!-- Row end -->--}}
{{--        </div><!-- Container end -->--}}
{{--    </section><!-- Ad content top end -->--}}

    <section class="block-wrapper p-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="more-news block color-default">
                        <h3 class="block-title"><span>More News</span></h3>

                        <div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
                            <div class="item">
                                @foreach($morenews as $morenews)
                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="{{route('details',['slug'=>$morenews->slug])}}">
                                                <img class="img-fluid" src="{{$morenews->image}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('details',['slug'=>$morenews->slug])}}">{{$morenews->title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">{{$morenews->name}}</a></span>
                                                <span class="post-date">{{$morenews->created_at}}</span>
                                            </div>
                                            <p>{!! substr($morenews->description,0,307) !!}...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 1 end -->
                                    <div class="gap-30"></div>
                                @endforeach
                            </div><!-- Item 1 end -->
                        </div><!-- More news carousel end -->
                    </div><!--More news block end -->
                </div><!-- Content Col end -->

                <div class="col-lg-4 col-sm-12">
                    <div class="sidebar sidebar-right">

                        <div class="widget color-default">
                            <div class="list-post-block">
                                <div class="widget text-center">
                                    <img class="banner img-fluid" src="{{$rightads->image}}" alt="" />
                                </div><!-- Sidebar Ad end -->
                                <div class="widget text-center">
                                    <img class="banner img-fluid" src="{{$rightads->image}}" alt="" />
                                </div><!-- Sidebar Ad end -->
                            </div><!-- List post block end -->
                        </div><!-- Latest Review Widget end -->

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
                    </div><!--Sidebar right end -->
                </div><!-- Sidebar col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- 3rd block end -->

    <section class="ad-content-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="{{$footereads->image}}" style="height: 100px; width: 800px;" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content two end -->
@endsection

