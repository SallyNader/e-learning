<!DOCTYPE html>

  
<!-- Mirrored from webmarce.com/html/education/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2016 14:47:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Education Home Page1</title>














  <meta name="viewport" content="width=device-width, initial-scale=1.0">


 <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-22.0.6.mini.js" type="text/javascript"></script>

         
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Css Files -->
    <link href="{!!asset('css/bootstrap.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/font-awesome.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/flaticon.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/slick-slider.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/prettyphoto.css')!!}" rel="stylesheet">
    <link href="{!!asset('build/mediaelementplayer.css')!!}" rel="stylesheet">
    <link href="{!!asset('style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/color.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/color-two.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/color-three.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/color-four.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/responsive.css')!!}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        
        <!--// Header \\-->
    <header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
      <div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-language"> <ul> <li><a href="#"></a></li> <li><a href="#"></a></li> </ul> </div>
                            <ul class="wm-stripinfo">
                                <li><i class="wmicon-location"></i> 22 شارع محمود حسن - الميرغني مصر الجديدة </li>
                                <li><i class="wmicon-technology4"></i> 22903214 - 002</li>
                                <li><i class="wmicon-clock2"></i> فاكس: 22903416 - 002 </li>
                            </ul>

                            @if(Auth::check())
<ul class="wm-adminuser-section">

                                <li>
                                <form action="{{url('logout')}}" method="POST">
                                {!! csrf_field() !!}
                                    <input type="submit" name="" value="لتسجيل الخروج" style="background-color: #2d2d53;color: white;border-color:  #2d2d53;font-size: 120%  "> 

                                    </form>
                                </li>
                                <li style="color: white">|</li>
                                 <li>
                                    <a href="{{url('profile')}}" style="font-size: 120%">{{Auth::user()->name}}</a>
                                </li>
                               
                            </ul>
                            @else
                            <ul class="wm-adminuser-section">
                            
                                <li>
                                    <a href="{{url('login')}}" >تسجيل الدخول</a>
                                </li>
                                <li>
                                    <a href="{{url('register')}}">للتسجيل في الموقع</a>
                                </li>
                                <li>
                                    <!--<a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>-->
                                </li>
                                
                            </ul>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img style="height: 90px;width:90px" src="{!!asset('images/crc.jpg')!!}" alt=""></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default" >
                                <div class="navbar-header" >
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1"  >
                                  <ul class="nav navbar-nav"  >
                                    <li class="active"><a href="{{url('branches')}}" style="font-size: 110%">فروعنا</a>
                                        
                                    </li>
                                   
                                    <li style="text-align: right;"><a href="#" style="font-size: 110%" >الدوبلومات و الدورات</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="{{route('course.index')}}" style="font-size: 110%">جميع الدورات</a></li>


                                           

                                            
                                        </ul>
                                    </li>
                                    <li><a href="#" style="font-size: 110%">عن المركز</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="{{url('agraya')}}" style="font-size: 110%">اللائحة اللأجرائية</a></li>
                                            <li><a href="{{url('momyzat')}}" style="font-size: 110%">مميزات العضوية</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="#" style="font-size: 110%">العضويات الدولية</a>
                                        
                                    </li>
                                    <li class="wm-megamenu-li"><a href="{{route('album.index')}}" style="font-size: 110%">ألبوم صور المركز</a>
<!--

                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Link 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-list.html">Blog List</a></li>
                                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                                        <li><a href="faq-page.html">Faq Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 2</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="ourprofessors.html">Our Professors</a></li>
                                                        <li><a href="our-professsors-detail.html">Our Professsors Detail</a></li>
                                                        <li><a href="typography-elements.html">Typography Elements</a></li>
                                                        <li><a href="courses-list.html">Courses List</a></li>
                                                        <li><a href="courses-grid.html">Courses Grid</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 3</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="courses-detail.html">Courses Detail</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                        <li><a href="contact-us.html">أنشر مقالك</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="{!!asset('extra-images/megamenu-frame.jpg')!!}" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li><a href="{{route('teacher.index')}}" style="font-size: 110%">قوائم المحكمين و الخبراء</a>
                                          <!--<ul class="wm-dropdown-menu">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-single-product.html">Shop Detail</a></li>
                                        </ul>
                                        -->
                                    </li>
                                    <li class="wm-megamenu-li"><a href="{{url('/')}}" style="font-size: 110%">الرئيسية  </a>
  <!--
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Links 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Artists text</h4>
                                                    <div class="wm-mega-text">
                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>sub category widget</h4>
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="{!!asset('extra-images/mega-menuadd.jpg')!!}" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>-->
                                    </li>
                                  </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                         
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

    </header>



    @yield('content')

    <footer id="wm-footer" class="wm-footer-one">
            
            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->

            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-3">
                            <a href="index-2.html" class="wm-footer-logo"><img src="{!!asset('images/crc.jpg')!!}" alt="" ></a>
                            <ul>
                                <li>14 شارع الدوحة - المنطقة الخامسة النسيم <i class="wm-color wmicon-pin"></i></li>


                                <li> 24 شارع فهد الوسري - العبيكان الدولي<i class="wm-color wmicon-pin"></i></li>

                                <li> 22 شارع محمود حسن - الميرغني مصر الجديدة<i class="wm-color wmicon-pin"></i></li>

                                <li> 22-شارع أحمد-شارع تونس <i class="wm-color wmicon-pin"></i></li>


                                <li><i class="wm-color wmicon-phone"></i> +1 505-753-5656 <br> +1 505-753-4437</li>
                                <li><i class="wm-color wmicon-letter"></i> <a href="mailto:name@email.com">info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_archive col-md-2" style="margin-top: 150px">
                            <div class="wm-footer-widget-title"> <h5>بعض الروابط</h5> </div>
                            <ul>
                                <li><a href="{{route('album.index')}}">الألبومات</a></li>
                                <li><a href="{{route('course.index')}}">الدورات و الدبلومات</a></li>
                                <li><a href="{{url('agraya')}}">الائحة الأجرائية</a></li>
                               
                                <li><a href="{{route('teacher.index')}}">خبرائنا و مدربينا</a></li>
                               
                            </ul>
                        </aside>
                        <aside class="widget widget_twitter col-md-4"  style="margin-top: 150px">
                            <div class="wm-footer-widget-title"> <h5><i class="wmicon-social2"></i> @enrollcampus</h5> </div>
                            <ul>
                                <li>
                                    <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                </li>
                                <li>
                                    <p>Check out my New PSD:  FashionPlus - Fashion eCommerce: <a href="#">pic.twitter.com/xc445Ghyt</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                                </li>
                                <li>
                                    <p>MedicAid - Medical Template @ThemeForest: <a href="#">pic.twitter.com/xcVlq542wfER</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_gallery col-md-3" style="margin-top: 150px">
                            <div class="wm-footer-widget-title"> <h5 style="text-align: center;">أهم خبرائنا</h5> </div>
                            <ul class="gallery">
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-1.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-1.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-2.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-2.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-3.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-3.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-4.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-4.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-5.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-5.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-6.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-6.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-7.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-7.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-8.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-8.jpg')!!}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/widget-galleryfull-9.jpg')!!}"><img src="{!!asset('extra-images/widget-gallery-9.jpg')!!}" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> <span> </span> </div>
                        <!--
                        <div class="col-md-6"> <p>© 2016, جميع الحقوق محفوظة -من <a href="index-2.html" class="wm-color">daleel marketing solutiom</a></p> </div>-->
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

        </footer>
        <!--// Footer \\-->

    <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form wm-login-popup" style="text-align: right;">
                <span class="wm-color">أرسل أستشارتك القانونية للبلد التي تريدها</span>
                <form action="{{url('astshara')}}" method="POST">
                {{ csrf_field() }}
                    <ul>
                        <li> <input type="text" name="name" value="الأسم" onblur="if(this.value == '') { this.value ='الأسم'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="text" name="telephone" value="الهاتف" onblur="if(this.value == '') { this.value ='الهاتف'; }" onfocus="if(this.value =='الهاتف') { this.value = ''; }"> </li>

                         <li> <input type="text" name="email" value="البريد الألكترونية" onblur="if(this.value == '') { this.value ='البريد الألكترونية'; }" onfocus="if(this.value =='البريد الألكترونية') { this.value = ''; }"> </li>
<li>
                                            <div class="wm-select-two">
                                                <select name="country">
                                                    <option>مصر</option>
                                                    <option>السعودية</option>
                                                    <option>تونس</option>
                                                    <option>ليبيا</option>
                                                </select>
                                            </div>
                                        </li>

                          <li> <input type="text" name="astshara" value="الأستشارة القانونية" onblur="if(this.value == '') { this.value ='الأستشارة القانونية'; }" onfocus="if(this.value =='الأستشارة القانونية') { this.value = ''; }"> </li>
                        <li></li>
                        <li> <input type="submit" value="أرسال"> </li>
                    </ul>
                </form>
                <span class="wm-color"></span>
               
                <p><a href="#"></a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
                <span class="wm-color">create Your Account today</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Create Account"> </li>
                    </ul>
                </form>
                <span class="wm-color">or signup with your socials:</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form">
                <span class="wm-color">Search Your KeyWord</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Search"> </li>
                    </ul>
                </form>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalSearch Box -->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{!!asset('script/jquery.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/modernizr.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/bootstrap.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/jquery.prettyphoto.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/jquery.countdown.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/fitvideo.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/skills.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/slick.slider.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/waypoints-min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('build/mediaelement-and-player.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/isotope.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('script/jquery.nicescroll.min.js')!!}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{!!asset('script/functions.js')!!}"></script>

  </body>

<!-- Mirrored from webmarce.com/html/education/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2016 14:47:02 GMT -->
</html>