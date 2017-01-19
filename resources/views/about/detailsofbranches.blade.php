@extends('master')

@section('content')


        <!--// Mini Header \\-->
       <!--  <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>About Us</h1> 
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="index-2.html">Pages</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>    
        </div> -->
        <!--// Mini Header \\-->

		<!--// Main Content \\-->
		<!-- <div class="wm-main-content">

           
            <div class="wm-main-section wm-whychooseus-full wm-minus-spacer">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-8">
                            <div class="whychooseus-list">
                                <div class="wm-fancy-title"> <h2>Why <span>Choose Us</span></h2> </div>
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span>209</span>
                                        <h6>of our trainees have got a prestigious job</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>91%</span>
                                        <h6>students have established successful business</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>35%</span>
                                        <h6>have already earned their first million</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-questions-studying">
                                <img src="extra-images/ask-questoin-bg.png" alt="">
                                <h3 class="wm-color">Questions about studying with us?</h3>
                                <p>We have a team of student advisers & officers to answer any questions:</p>
                                <a class="wm-banner-btn" href="#">ask us now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            

     
            <div class="wm-main-section whowe-are-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6"> <figure class="wm-figure-thumb"><img src="extra-images/whowe-are-1.jpg" alt=""></figure> </div>
                        <div class="col-md-6 wm-editore-text">
                            <h2 class="wm-left-border wm-color">Who We Are</h2>
                            <p>This course allows students to study one modern language in depth together with Linguistics, the study of language itself. Part of your course will consist of developing your practical language skills to a high level.</p>
                            <ul>
                                <li><i class="wmicon-mark"></i> Training in rigorous analysis</li>
                                <li><i class="wmicon-mark"></i> Highly developed practical competence</li>
                                <li><i class="wmicon-mark"></i> Excellent basis for a wide range of careers</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
          -->
            <div class="wm-main-section wm-parallexthree-full">
                <span class="wm-light-transparent wm-more-light-blue"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-parallex wm-parallex-three">
                                <h2>فرع  {{$name}}</h2>
                                <span>زور أقرب فرع و قم بحجز دورتك</span>
                                <a class="wm-transparent-button" href="{{route('course.index')}}"><span>تعلم أون لين</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="wm-apply-info wm-apply-info-color">
                            <ul>
                                <li class="col-md-4">
                                    <!-- <i class="wmicon-editing"></i> -->
                                    <div class="wm-right-section">
                                        <h2 style="margin-left: 150px">الموقع</h2>
                                        <p style="font-size: 170%;font-weight: 39px;margin-right: 20px">{{$location}}</p>
                                       <!--  <a href="#" class="applyinfo-btn">apply now</a> -->
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <i class="wmicon-telephone"></i>
                                    <div class="wm-right-section">
                                        <h2>أتصل بنا و أحجز مكان</h2>
                                        <p></p>
                                        <h3>{{$phone}}</h3>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                  <!--   <i class="wmicon-people2"></i> -->
                                    <div class="wm-right-section">
                                        <h2>مدير الفرع</h2>
                                        <p style="font-size: 170%;font-weight: 39px;margin-right: 50px">{{$moderator}}</p>
                                       <!--  <a href="#" class="applyinfo-btn">start chat</a> -->
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
              <div class="wm-main-section wm-studentslove-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12"> <div class="wm-fancy-title"> <h2>لماذا يفضلنا <span>المتدربون</span></h2> </div> </div>
                        <div class="col-md-6"> <video src="build/echo-hereweare.mp4" poster="build/echo-hereweare.jpg" controls="controls" preload="none"></video> </div>
                        <div class="col-md-6 c">
                            <div class="wm-recent-list-slider wm-recent-list-slider-color">
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-1.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“الذين يدرسون في يا رفاق جلب قيمة مضافة لحياتي المهنية وكانت الدورات مثيرة للاهتمام للغاية وكان الأساتذة”</p>
                                        <a href="#" class="wm-color-three">أحمد علي</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-2.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“تسجل هي فريدة من نوعها للغاية من حيث البيئة الأكاديمية الاجتماعية”</p>
                                        <a href="#" class="wm-color-three">محمد تامر</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-3.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“المعرفة المكتسبة في العديد من الدورات يمكن بسهولة أن تستخدم في مسؤولياتي وظيفة جديدة”</p>
                                        <a href="#" class="wm-color-three">مجدي زين</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-2.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“تسجل هي فريدة من نوعها للغاية من حيث البيئة الأكاديمية الاجتماعية”</p>
                                        <a href="#" class="wm-color-three">سالي نادر</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
<!--             <div class="wm-main-section our-professors-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Our <span>Professors</span></h2> </div>
                            <div class="wm-our-professors">
                                <ul class="row">
                                    <li class="col-md-4 wordpress">
                                        <figure>
                                            <a href="#"><img src="extra-images/our-professors-1.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#">Read More</a>                                           
                                            </figcaption>                                           
                                        </figure>
                                        <div class="wm-team-info">
                                            <h5><a href="#">Chester J. Graham</a></h5>                                      
                                            <div class="wm-icon">
                                                <a class="wmicon-social5" href="#"></a>
                                                <a class="wmicon-social4" href="#"></a>
                                                <a class="wmicon-logo" href="#"></a>
                                            </div>
                                            <span>Law DEPARTMENT</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4 jquery">
                                        <figure>
                                            <a href="#"><img src="extra-images/our-professors-2.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#">Read More</a>                                           
                                            </figcaption>                                           
                                        </figure>
                                        <div class="wm-team-info">
                                            <h5><a href="#">Sophie R. Ray</a></h5>                                      
                                            <div class="wm-icon">
                                                <a class="wmicon-social5" href="#"></a>
                                                <a class="wmicon-social4" href="#"></a>
                                                <a class="wmicon-logo" href="#"></a>
                                            </div>
                                            <span>drama DEPARTMENT</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4 php">
                                        <figure>
                                            <a href="#"><img src="extra-images/our-professors-3.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#">Read More</a>                                           
                                            </figcaption>                                           
                                        </figure>
                                        <div class="wm-team-info">
                                            <h5><a href="#">Jeremy E. Orem</a></h5>                                     
                                            <div class="wm-icon">
                                                <a class="wmicon-social5" href="#"></a>
                                                <a class="wmicon-social4" href="#"></a>
                                                <a class="wmicon-logo" href="#"></a>
                                            </div>
                                            <span>arts DEPARTMENT</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

@stop