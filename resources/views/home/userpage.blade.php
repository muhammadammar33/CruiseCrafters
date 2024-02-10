<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CruiseCrafters</title>
    @include('home.css')
  </head>
  <body>

    @if(session('error'))
        <script>alert("{{ session('error') }}");</script>
    @endif
    
    <!-- Navigation -->
	  @include('home.nav')
    
    {{-- Hero --}}
    @include('home.hero')

    {{-- Trip --}}
    @include('home.trip')

    {{-- Categories --}}
    @include('home.categories')

    {{-- Featured Vehicles --}}
    @include('home.feature')
    
    {{-- About US --}}
    @include('home.about')

    {{-- Services --}}
    @include('home.services')

	  {{-- Job --}}
    @include('home.job')

    {{-- Clients --}}
    @include('home.clients')
    
    {{-- Blog --}}
    @include('home.blog')
    	
    {{-- Counter --}}
    @include('home.counter')

    {{-- Footer --}}
    @include('home.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.easing.1.3.js"></script>
    <script src="home/js/jquery.waypoints.min.js"></script>
    <script src="home/js/jquery.stellar.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/aos.js"></script>
    <script src="home/js/jquery.animateNumber.min.js"></script>
    <script src="home/js/bootstrap-datepicker.js"></script>
    <script src="home/js/jquery.timepicker.min.js"></script>
    <script src="home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="home/js/google-map.js"></script>
    <script src="home/js/main.js"></script>
    
  </body>
</html>