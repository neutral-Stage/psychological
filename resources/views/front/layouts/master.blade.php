<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remedic - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{asset('front')}}/https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('front')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('front')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('front')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('front')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/style.css">
  </head>
  <body>
    
  
    <!-- END nav -->

	<!-- Menu -->
@include('front.layouts.menu')
	
@yield('content')	
	<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Remedic</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="{{asset('front')}}/#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="{{asset('front')}}/#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="{{asset('front')}}/#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
              	<li><a href="{{asset('front')}}/#" class="py-2 d-block">Appointments</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Our Specialties</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Why Choose us</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Our Services</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">health Tips</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Home</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">About</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Departments</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Doctors</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Blog</a></li>
                <li><a href="{{asset('front')}}/#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="{{asset('front')}}/#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="{{asset('front')}}/#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="{{asset('front')}}/https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


  <script src="{{asset('front')}}/js/jquery.min.js"></script>
  <script src="{{asset('front')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('front')}}/js/popper.min.js"></script>
  <script src="{{asset('front')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('front')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('front')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('front')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('front')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('front')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('front')}}/js/aos.js"></script>
  <script src="{{asset('front')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('front')}}/js/bootstrap-datepicker.js"></script>
  <script src="{{asset('front')}}/js/jquery.timepicker.min.js"></script>
  <script src="{{asset('front')}}/js/scrollax.min.js"></script>
  <script src="{{asset('front')}}/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('front')}}/js/google-map.js"></script>
  <script src="{{asset('front')}}/js/main.js"></script>
    
  </body>
</html>