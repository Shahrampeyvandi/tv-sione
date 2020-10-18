<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/range-slider/css/ion.rangeSlider.min.css')}}" type="text/css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">
    {{-- <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.2.0/dist/jBox.all.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        $(".user-login-show").on("click", function() {
        let status = $(".profile-dropdown-box").css("display");
        if (status === "none") {
            $(".profile-dropdown-box").fadeIn(300);
        } else {
            $(".profile-dropdown-box").hide();
        }
    });
    </script>

    <style>
        .show {
            display: block !important;
        }

        .hidden {
            display: none !important;
        }
    </style>

    @yield('css')
    <script>
        var mainUrl = "{{route('MainUrl')}}";
    </script>

    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> sione | @yield('Title')</title>
</head>
<style>
    .movie-sections h3 a {
        opacity: 100%;
        color: white;
    }

    .Season-select {
        width: 200px;
        background-color: #ffffff;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        cursor: pointer;
        margin-right: 1rem;
    }

    .cover-img-movies_movie-Page {
        background: rgb(255, 255, 255);
        background: -moz-linear-gradient(86deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8687850140056023) 32%, rgba(0, 0, 0, 1) 39%, rgba(1, 0, 0, 1) 100%);
        background: -webkit-linear-gradient(86deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8687850140056023) 32%, rgba(0, 0, 0, 1) 39%, rgba(1, 0, 0, 1) 100%);
        background: linear-gradient(86deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8687850140056023) 32%, rgba(0, 0, 0, 1) 39%, rgba(1, 0, 0, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff", endColorstr="#010000", GradientType=1);
    }

    .head-film-cover>img {
        width: 47% !important;
        height: 100% !important;
        object-fit: cover;
    }
</style>



<body @if (\Request::route()->getName() == "S.SiteSharing" || \Request::route()->getName() == "S.Account" ||
    \Request::route()->getName() == "S.OrderLists" || \Request::route()->getName() == "MovieRequest")
    class="site-sharing"
    @endif>

    @if(\Request::route()->getName() !== "login" && \Request::route()->getName() !== "forgetpass" &&
    \Request::route()->getName() !== "forgetpass.submitCode" && \Request::route()->getName() !==
    "forgetpass.submitNewPass"

    )
    @include('Includes.Front.Header')
    @endif

    @yield('content')

    @if(\Request::route()->getName() !== "login" && \Request::route()->getName() !== "S.SiteSharing" &&
    \Request::route()->getName() !== "S.OrderLists" && \Request::route()->getName() !== "forgetpass" &&
    \Request::route()->getName() !== "forgetpass.submitCode" && \Request::route()->getName() !==
    "forgetpass.submitNewPass"
    && \Request::route()->getName() !== "S.Account" && \Request::route()->getName() !== "MovieRequest"
    )
    @include('Includes.Front.Footer')
    @endif

    <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-validate/jquery.validate.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('frontend/assets/js/all.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.2.0/dist/jBox.all.min.js"></script> --}}
    {{-- <script src="{{asset('frontend/assets/js/index.js')}}"></script> --}}

    <script src="{{asset('assets/js/toastr.min.js')}}"></script>
    <!-- begin::range slider -->
    <script src="{{asset('assets/vendors/range-slider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/examples/range-slider.js')}}"></script>
    <!-- end::range slider -->
    @toastr_render
    @yield('js')
    <script>
        //      $("#search-box").on("click", function() {
    //     $(".search-panel").css("display", "block");
    // });
    var delay = 1000; // 2 seconds

    $("#search-input").on("keyup", function() {
        var timeout = true;
        if (timeout) {
            
                arr = [];
                let val = $(this).val();
                let url = $(this).data("url");
                arr.push({ type: "word", key: val });

                var token = $('meta[name="_token"]').attr("content");
data = { data: arr, _token: token }
                 var request = $.post(url, data);
            request.done(function(res) {
                $(".results").html(res);
                timeout = true;
            });
          
            }
    });
     $("#search-box").on("click", function() {
        $(".search-panel").css("display", "block");
    });
    $("#close_search").on("click", function() {
        $(".search-panel").css("display", "none");
    });



$(".slick").slick({
  // normal options...
  infinite: false,
//  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
  rtl:true,
  // the magic
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: true
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        dots: true
      }

    }, {

      breakpoint: 300,
      settings: "unslick" // destroys slick

    }]
});



$('.fadeslick').slick({
    slidesToShow: 1,
     slidesToScroll: 1,
  rtl:true,
  nav:true,
    nextArrow: '<button class="custom-next"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    prevArrow: '<button class="custom-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'
    
})
function showImage(event) {
    event.preventDefault();
    var src = $(event.target).attr("src");
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = src;
    captionText.innerHTML = this.alt;
}
function closeImage(event) {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// Season movie
    $(".Season-select").on("click", function() {
        let status = $(".movie-Season-box").css("display");
        if (status === "none") {
            $(".movie-Season-box").fadeIn(200);
        } else {
            $(".movie-Season-box").fadeOut(250);
        }
    });

function addToFavorite(event, id, url) {
    event.preventDefault();
    var el = $(event.target);
    var token = $('meta[name="_token"]').attr("content");
    
    var request = $.post(url, {
        post_id: id,
        _token: token
    });
    request.done(function(res) {
        if (res == "attach") {
            el.html('<i class="fa fa-check"></i>');
            el.css("background-color", "#007bff");
        } else {
            el.html('<i class="fa fa-plus"></i> افزودن به لیست');
            el.css("background-color", "transparent");
        }
    });
}

         $(".user-login-show").on("click", function() {
       var box = $('.profile-dropdown-box')
        if (box.hasClass('hidden')) {
            box.addClass('show')
            box.removeClass('hidden')
        } else {
            box.addClass('hidden')
            box.removeClass('show')
        }
    });
    </script>

</body>

</html>