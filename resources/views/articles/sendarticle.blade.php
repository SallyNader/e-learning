@extends('master')

@section('content')

        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>انشر مقالك</h1> 
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-full wm-contact-full-inner">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="wm-contact-tab">

                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs">
                               
                        
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                        <div class="col-md-8">
                                            <div class="wm-contact-form">
                                                <span>أرسل مقالك و سيتم نشره</span>
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" value="اسمك" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                        </li>

                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" value="العنوان" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-symbol3"></i>
                                                            <input type="text" value="البريد الالكتروني" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-technology4"></i>
                                                            <input type="text" value="المحمول" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-web2"></i>
                                                            <textarea placeholder="المقال"></textarea>
                                                        </li>
                                                        <li> <input type="submit" value="أرسال"> </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                    <span class="wm-contact-title">Contact Info</span>
                                    <div class="wm-contact-service">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                <h5 class="wm-color">Address</h5>
                                                <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                <h5 class="wm-color">Phone & Fax</h5>
                                                <p>+1 505-753-5656 +1 505-753-4437</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                <h5 class="wm-color">E-mail</h5>
                                                <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>

        @stop