<head>
    <title>AvsDirectory</title>
    <link rel = "icon" type = "frontend/images/compass.png" href = "frontend/images/compass.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{ url('frontend/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{ url('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}">



  </head>
<body class="no-skin">
@include('header')
<div class="main-container" id="main-container">

  <div class="main-content">
    <div class="main-content-inner">
      <div class="breadcrumbs" id="breadcrumbs">

      </div>
      @yield('content')
    </div>
  </div>
 @include('footer')
</div>
</body>
