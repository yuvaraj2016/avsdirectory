<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
              </div>

              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Navigations</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved By | <a href="https://hridhamtech.com" target="_blank" >hridham Tech</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{ url('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{ url('frontend/js/popper.min.js')}}"></script>
  <script src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ url('frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ url('frontend/js/aos.js')}}"></script>
  <script src="{{ url('frontend/js/rangeslider.min.js')}}"></script>

  <script src="{{ url('frontend/js/main.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <script>
jQuery.fn.liScroll = function(settings) {
    settings = jQuery.extend({
		travelocity: 0.03
		}, settings);

		return this.each(function(){
		var $strip = jQuery(this);
		$strip.addClass("newsticker")
		var stripHeight = 1;
		$strip.find("li").each(function(i){
			stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
		});

		var $mask = $strip.wrap("<div class='mask'></div>");
		var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
		var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width
		$strip.height(stripHeight);
		var totalTravel = stripHeight;
		var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye
		function scrollnews(spazio, tempo){
		$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
		}

		scrollnews(totalTravel, defTiming);
		$strip.hover(function(){
		jQuery(this).stop();
		},
		function(){
		var offset = jQuery(this).offset();
		var residualSpace = offset.top + stripHeight;
		var residualTime = residualSpace/settings.travelocity;
		scrollnews(residualSpace, residualTime);
		});
		});
};

$(function(){
    $("ul#ticker01").liScroll();
});

  </script>
  </body>
</html>
