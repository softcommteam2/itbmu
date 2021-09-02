<!DOCTYPE html>
<!--
Template Name: Wetwest
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="en">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>itbmu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('layout/styles/custom.flexslider.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="https://kit.fontawesome.com/08bf8f3019.js" crossorigin="anonymous"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{ asset('engine1/style.css') }}" />
    <script type="text/javascript" src="{{ asset('engine1/jquery.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <!-- End WOWSlider.com HEAD section -->
    <style>
        .default-img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            width: 120px;
            height: 100px;
        }
        .new-detail, #gallery-heading{
            clear: both!important;
            }
        .new-detail-img{
            float: left;
            margin-right: 10px;
            }
    
        .new-detail-para{
            text-align: justify;
            color:#000;
        }
      .myGallery .item {
        position: relative;
        height: 300px;
        overflow: hidden;
        }

        .myGallery .item img {
        vertical-align: middle;
        }

        .myGallery .caption {
        margin: 0;
        padding: 1em;
        position: absolute;
        z-index: 1;
        bottom: 0;
        left: 0;
        width: 100%;
        max-height: 100%;
        overflow: auto;
        box-sizing: border-box;
        transition: transform .5s;
        transform: translateY(100%);
        background: rgba(0, 0, 0, .7);
        color: rgb(255, 255, 255);
        }

        .myGallery .item:hover .caption {
        transform: translateY(0%);
        }
        .myGallery {
        display: grid;
        grid-gap: 10px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        .myGallery img {
        width: 100%;
        }
        .new-style, .new-detail-img{
        border: 1px solid; background-color: #fff;
        margin-bottom: 10px;
        }
        .primary{
            background-color: #09a9ed;
        }
        .reset{
            background-color: #fcba03;
        }
       
        .primary, .reset{
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 4px;
        }
        .map{
            color:#10542e;
        }
        .phone{
            color: #fcba03;
        }
        .fax{
            color: #eb5c1a;
        }
        .envelope{
            color:#de2f40;
        }
        .map, .phone,.fax, .envelope{
            font-size: 25px!important;
        }
    </style>
</head>

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row0" style="background-color: #f9faf2">
        <div id="topbar" class="hoc clear">
            <div class="fl_left">
                <ul class="inline nospace pushright">
                    <li><i class="fa fa-phone phone"></i> +951- 650712</li>
                    <li><i class="fa fa-envelope-o envelope"></i> admin@itbmu.org.mm</li>
                </ul>
            </div>
            <div class="fl_right">
                <ul class="inline nospace">
                    <li><a href="{{route('home')}}" style="color:#f57db1"><i class="fa fa-home" style="font-size:24px"></i><strong>Home</strong></a></li>
                    <li><a style="color:#f57db1"> | </a></li>
                    <li><a href="{{route('contact-us')}}" style="color:#f57db1"><i class="fa fa-address-card" style="font-size:20px"></i><strong>Contact Us</strong></a></li>
                    <li><a style="color:#f57db1"> | </a></li>
                    <li><a href="{{route('feedback')}}" style="color:#f57db1"><i class="fa fa-comment" style="font-size:24px"></i><strong>Feedback</strong></a></li>

                </ul>
            </div>
        </div>
        <!-- ################################################################################################ -->
    </div>
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1>
                    <a href="{{route('home')}}"><img src="images/adminlogonew1.png"></a>
                </h1>
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
                        <li><a href="{{ route('setup') }}">Set-up</a></li>
                        <li><a href="{{ route('faculities') }}">Faculities</a></li>
                        <li><a href="{{ route('courses') }}">Course Year</a></li>
                        <li><a href="{{ route('syllabus') }}">Syllabus</a></li>
                        <li><a href="{{ route('mottos') }}">Mottos</a></li>
                        <li><a href="{{ route('organizations') }}">Organization</a></li>
                    </ul>
                </li>


                <li><a class="drop" href="#">Admissions</a>
                    <ul>
                        <li><a href="{{ route('entrance') }}">ITBMU Entrance Form Download</a></li>
                        <li><a href="{{ route('appform') }}">Application Form</a></li>
                        <li><a href="{{ route('cy-timetables') }}">Course Years Timetable</a></li>
                    </ul>
                </li>


                <li><a class="drop" href="#">Media</a>
                    <ul>
                        <li><a href="{{ route('new') }}">News & Events</a></li>
                        <li><a href="{{ route('magazine') }}">Magazine</a></li>

                        <li><a class="drop" href="#">Multimedia</a>
                            <ul>
                                <li><a href="{{ route('mediamp3') }}">Audio</a></li>
                                <li><a href="{{ route('mediamp4') }}">Video</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a class="drop" href="#">Facilities</a>
                    <ul>
                        <li><a href="{{ route('centralmain') }}">Central(Main)Building</a></li>
                        <li><a class="drop" href="#">Library</a>
                            <ul>
                                <li><a href="{{ route('library') }}">About Library</a></li>
                                <li><a href="{{ route('booklist') }}">Book List</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('dormitories') }}">Dormitories (Hostels)</a></li>
                        <li><a href="{{ route('medical-facilities') }}">Medical Facilities</a></li>
                        <li><a href="{{ route('meditation-hall') }}">Meditation Hall</a></li>
                        <li><a href="{{ route('sima') }}">Sima</a></li>
                        <li><a href="{{ route('tooth-pagoda') }}">Sacred Tooth Relic Pagoda</a></li>
                    </ul>
                </li>

                <li><a class="drop" href="#">Exam Result</a>
                    <ul>
                        <li><a href="{{ route('entrance') }}">Entrance</a></li>
                        <li><a href="{{ route('diploma') }}">Diploma course</a></li>
                        <li><a href="{{ route('graduate') }}">Graduate degree Course</a></li>
                        <li><a href="{{ route('ma-graduate') }}">M.A Post Graduate Course</a></li>
                        <li><a href="{{ route('pa-graduate') }}">P.A Post Graduate Course</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('photo-gallery') }}">University Activities</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </nav>
    </div>

    <!-- ################################################################################################ -->



    <!-- ####################################slider##################################################### -->

    <!-- Start WOWSlider.com BODY section -->
    @yield('wowslider-content')
    <script type="text/javascript" src="{{ asset('engine1/wowslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('engine1/script.js') }}"></script>
    <!-- End WOWSlider.com BODY section -->
            <!-- main body -->
            <!-- ################################################################################################ -->
          @yield('article-content')
            <!-- ################################################################################################ -->
            <!-- / main body -->
    <!-- ################################################################################################ -->

            @yield('content')
        <!-- ################################################################################################ -->
        <div class="wrapper row4">
            <footer id="footer" class="hoc clear">
                <!-- ################################################################################################ -->
                <div class="one_third first">
                    <h6 class="title">Address</h6>
                    <ul class="nospace btmspace-30 linklist contact">
                        <li><i class="fa fa-map-marker map"></i>
                            <address>
            Dhammapāla Hill, Mayanggone P.O,
            Yangon, Myanmar.
          </address>
                        </li>
                        <li><i class="fa fa-phone phone"></i> +951- 650712</li>
                        <li><i class="fa fa-fax fax"></i> 095-1650700</li>
                        <li><i class="fa fa-envelope-o envelope"></i> admin@itbmu.org.mm</li>
                    </ul>

                </div>
                <div class="one_third">
                    <h6 class="title">Map</h6>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15272.588246782298!2d96.1566785!3d16.8686182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1947ecf881973%3A0x5c7dc24a82aff1b8!2sInternational+Theravada+Buddhist+Missionary+University!5e0!3m2!1sen!2smm!4v1467005451834"
                        width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="one_third">
                    <h6 class="title">NEWSLETTER</h6>
                    <p class="nospace btmspace-15">Subscribe To Our Newsletter:</p>
                    <form method="post" action="#">
                        <fieldset>
                            <legend>Newsletter:</legend>
                            <input class="btmspace-15" type="text" value="" placeholder="Name">
                            <input class="btmspace-15" type="text" value="" placeholder="Email">
                            <button type="submit" value="submit" class="reset">Submit</button>
                        </fieldset>
                    </form>
                </div>
                <!-- ################################################################################################ -->
            </footer>
        </div>
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
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="{{ asset('layout/scripts/jquery.min.js')}}"></script>
        <script src="{{ asset('layout/scripts/jquery.backtotop.js')}}"></script>
        <script src="{{ asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
        <script src="{{ asset('layout/scripts/jquery.flexslider-min.js')}}"></script>
        @yield('script')
</body>

</html>
