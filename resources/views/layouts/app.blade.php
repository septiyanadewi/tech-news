<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tech News &mdash; Website by Septiyana Dewi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('/fonts/icomoon/style.css') }}">

  <!-- <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('/fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/aos.css') }}">
  <link href="{{ asset('/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top">
      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target pl-0 d-lg-block" role="banner">

        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="site-logo">
              Tech News
            </a>
            
            <div class="mr-auto d-none pl-0 d-lg-flex align-items-center">
              <nav class="site-navigation position-relative text-right mx-4" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                  <li class="active">
                    <a href="index.html" class="nav-link text-left">Home</a>
                  </li>
                  <li>
                    <a href="categories.html" class="nav-link text-left">More</a>
                  </li>
                  <li>
                    <a href="categories.html" class="nav-link text-left">About</a>
                  </li>
                </ul>                                                                                                                                                                                                                                                                                         
              </nav>
              <div class="form-check form-switch mb-0">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Light / Dark </label>
              </div>

            </div>
            
          
          </div>
        </div>

      </div>
    
    </div>

    <div class="container site-section">
      @yield('content')
    </div>


    
    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    Photo by <a href="https://unsplash.com/@marvelous?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Marvin Meyer</a> on <a href="https://unsplash.com/s/photos/tech?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('/js/jquery-ui.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- <script src="{{ asset('/js/popper.min.js') }}"></script> -->
  <!-- <script src="{{ asset('/js/bootstrap.min.js') }}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('/js/aos.js') }}"></script>
  <script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('/js/jquery.mb.YTPlayer.min.js') }}"></script>




  <script src="js/main.js"></script>

</body>

</html>