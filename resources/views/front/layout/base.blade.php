<!DOCTYPE html>
<!--
Template Name: Wetwest
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>itbmu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ asset('layout/styles/custom.flexslider.css') }}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/08bf8f3019.js" crossorigin="anonymous"></script>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<style>
  .gallery{
    margin:5px;!important
    margin-bottom: 30px;
  }
  #gallery-div{
    height: 250px; overflow:hidden;
    border: solid #808080	 1px;
  }
  .gallery-img{
    width: 250px;
    
  }
</style>
<!-- End WOWSlider.com HEAD section -->
</head>
<body id="top">
  <div class="wrapper row0" style="background-color: #EEEEEE;">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> +951- 650712</li>
          <li><i class="fa fa-envelope-o"></i> admin@itbmu.org.mm</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace inline">
          <li><a href="{{route('home')}}"  style="color:#000000;"><i class="fa fa-home" style="font-size:24px"></i><strong>Home</strong></a></li>
          <li><a style="color:#000000;"> | </a></li>
          <li><a href="pages/contactus.html" style="color:#000000;"><i class="fa fa-address-card" style="font-size:20px"></i><strong>Contact Us</strong></a></li>
          <li><a style="color:#000000;"> | </a></li>
          <li><a href="pages/feedback.html" style="color:#000000;"><i class="fa fa-comment" style="font-size:24px"></i><strong>Feedback</strong></a></li>
          
        </ul>
      </div>
    </div>
      <!-- ################################################################################################ -->
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="{{route('home')}}"><img src="images/adminlogonew1.png"></a></h1>
      </div>
      
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="{{route('home')}}">Home</a></li>
        <li><a class="drop" href="#">About</a>
          <ul>
              <li><a href="{{route('setup')}}">Set-up</a></li>
              <li><a href="pages/faculities.html">Faculities</a></li>
              <li><a href="{{route('courses')}}">Course Year</a></li>
              <li><a href="pages/syllabus.html">Syllabus</a></li>
              <li><a href="pages/mottos.html">Mottos</a></li>
              <li><a href="{{route('organization')}}">Organization</a></li>
          </ul>
        </li>
       
  
        <li><a class="drop" href="#">Admissions</a>
          <ul>
            <li><a href="pages/itbmuent.html">ITBMU Entrance Form Download</a></li>
            <li><a href="{{route('appform')}}">Application Form</a></li>
            <li><a href="{{route('home')}}">Course Years Timetable</a></li>
          </ul>
        </li>
  
        
        <li><a class="drop" href="#">Media</a>
          <ul>
            <li><a href="{{route('new')}}">News & Events</a></li>
            <li><a href="pages/magazine.html">Magazine</a></li>
          
            <li><a class="drop" href="#">Multimedia</a>
              <ul>
                <li><a href="{{route('mediamp3')}}">Audio</a></li>
                <li><a href="{{route('mediamp4')}}">Video</a></li>
                
              </ul>
            </li>
          </ul>
        </li>
  
    <li><a class="drop" href="#">Facilities</a>
          <ul>
            <li><a href="{{route('centralmain')}}">Central(Main)Building</a></li>
            <li><a class="drop" href="#">Library</a>
              <ul>
                <li><a href="{{route('library')}}">About Library</a></li>
                <li><a href="{{route('booklist')}}">Book List</a></li>
                
              </ul>
            </li>
            <li><a href="{{route('dormitories')}}">Dormitories (Hostels)</a></li>
            <li><a href="pages/mcf.html">Medical Facilities</a></li>
            <li><a href="pages/meditationhall.html">Meditation Hall</a></li>
            <li><a href="pages/sima.html">Sima</a></li>
            <li><a href="pages/sacred.html">Sacred Tooth Relic Pagoda</a></li>
          </ul>
        </li>
  
        <li><a class="drop" href="#">Exam Result</a>
          <ul>
            <li><a href="{{route('entrance')}}">Entrance</a></li>
            <li><a href="pages/dipcou.html">Diploma course</a></li>
            <li><a href="pages/gracou.html">Graduate degree Course</a></li>
            <li><a href="pages/magra.html">M.A Post Graduate Course</a></li>
            <li><a href="pages/pagra.html">P.A Post Graduate Course</a></li>
          </ul>
        </li>
  
        <li><a href="pages/uniactivi.html">University Activities</a></li>
        <li><a href="{{route('faq')}}">FAQ</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
  <!-- End WOWSlider.com BODY section -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

 @yield('content')


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
            Dhammapāla Hill, Mayanggone P.O,
            Yangon, Myanmar.
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +951- 650712</li>
        <li><i class="fa fa-fax"></i> 095-1650700</li>
        <li><i class="fa fa-envelope-o"></i> admin@itbmu.org.mm</li>
      </ul>
      
    </div>
    <div class="one_third">
      <h6 class="title">Map</h6>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15272.588246782298!2d96.1566785!3d16.8686182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1947ecf881973%3A0x5c7dc24a82aff1b8!2sInternational+Theravada+Buddhist+Missionary+University!5e0!3m2!1sen!2smm!4v1467005451834" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> 
    </div>
    
    <div class="one_third">
      <h6 class="title">NEWSLETTER</h6>
      <p class="nospace btmspace-15">Subscribe To Our Newsletter:</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright © 2016 - All Rights Reserved -<a href="#"> www.itbmu.org.mm</a></p>
    <p class="fl_right">Empowered By SoftComm Technology ®</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset('layout/scripts/jquery.min.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('layout/scripts/jquery.flexslider-min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>