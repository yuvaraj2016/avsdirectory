<!DOCTYPE html>
<html lang="en">

  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>




    <header class="site-navbar container py-0 " role="banner" style="  background-color: rgba(100, 100, 100, 0.5);color:white;height:10%">

      <!-- <div class="container"> -->
        <div class="row align-items-center" style="margin-top:-9px">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{url('/')}}" class="text-black mb-0">Avs<span class="text-primary">Directory</span>  </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                {{-- <li><a href="{{url('listings')}}">Ads</a></li> --}}
                <li>
                  <a href="{{ url('about')}}">About Us</a>
                  {{-- <ul class="dropdown">
                    <li><a href="#">The Company</a></li>
                    <li><a href="#">The Leadership</a></li>
                    <li><a href="#">Philosophy</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul> --}}
                </li>
                <li class="has-children">
                    <a href="{{ url('about')}}">Business</a>
                    <ul class="dropdown">
                      <li><a href="#">Business Listing</a></li>
                      <li><a href="#">Business Requirements & Ads</a></li>
                      {{-- <li><a href="#">Gallery</a></li>
                      <li><a href="#">Careers</a></li> --}}
                    </ul>
                  </li>
                <li><a href="{{ url('blog')}}">Martrimony</a></li>
                <li class="has-children">
                    <a href="{{ url('about')}}">Community</a>
                    <ul class="dropdown">
                      <li><a href="#">Announcements & Help</a></li>
                      <li><a href="#">Events</a></li>
                      <li><a href="#">Gallery</a></li>
                      {{-- <li><a href="#">Careers</a></li> --}}
                    </ul>
                  </li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
                <li class="has-children">
                    <a href="{{ url('about')}}">Profile</a>
                    <ul class="dropdown">
                      <li><a href="#">Login</a></li>
                      <li><a href="#">Register</a></li>
                      {{-- <li><a href="#">Gallery</a></li> --}}
                      {{-- <li><a href="#">Careers</a></li> --}}
                    </ul>
                  </li>

                {{-- <li class="ml-xl-3 login"><a href="{{url('login')}}"><span class="border-left pl-xl-4"></span>Log In</a></li>
                <li><a href="{{ url('register')}}">Register</a></li> --}}

                {{-- <li><a href="#" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li> --}}
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      <style>
.listing-item img{
  height: none !important;
}
</style>
    </header>
