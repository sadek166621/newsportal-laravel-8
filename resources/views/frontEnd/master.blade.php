<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('frontEnd')}}/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{asset('frontEnd')}}/images/favicon.ico" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/owl.theme.default.min.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/colorbox.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{asset('frontEnd')}}/js/html5shiv.js"></script>
    <script src="{{asset('frontEnd')}}/js/respond.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <![endif]-->

</head>

<body>

<div class="body-inner">

@include("frontEnd.include.header")

   @yield('content')

   @include("frontEnd.include.footer")




    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/jquery.js"></script>
    <!-- Popper Jquery -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/popper.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/owl.carousel.min.js"></script>
    <!-- Color box -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/jquery.colorbox.js"></script>
    <!-- Smoothscroll -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/smoothscroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <!-- Template custom -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/custom.js"></script>

    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script>
        // jQuery(document).ready(function($) {
        //     $('.slick.marquee').slick({
        //         speed: 2000,
        //         autoplay: true,
        //         autoplaySpeed: 0,
        //         centerMode: true,
        //         cssEase: 'linear',
        //         slidesToShow: 1,
        //         slidesToScroll: 1,
        //         variableWidth: true,
        //         infinite: true,
        //         initialSlide: 1,
        //         arrows: false,
        //         buttons: false
        //     });
        // });
    </script>
    <script>
        var owl = $('.slidees');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[2000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>

    <script>
        $('.details').click(function () {
            var $postId = $(this).attr('id');
            // alert($postId);

            $.ajax({
                method:"GET",
                url:'api/postdeatils/'+$postId,
                dataType:'JSON',
                success:function (data) {
                    // alert(data);
                    $('#video_link').html(data.video_link );
                    if (data.image !=null){
                        $('#image').attr('src',data.image);
                    } else {
                        $('#image').attr('src','http://www.hgs.at/img/contact/ce.jpg')
                    }
                }
            });
            $('#modal_box').modal('show');
            return false;
        });
    </script>
    <script>
        window.__cfRLUnblockHandlers = true;
    </script>
    @include("frontEnd.include.toastr")


{{--    ....--}}

</div><!-- Body inner end -->
</body>

</html>
