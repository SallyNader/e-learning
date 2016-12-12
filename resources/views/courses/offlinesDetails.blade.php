@extends('master')

@section('content')


 <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>تفاصيل الدورة</h1> 
                        </div>
                        <div class="wm-breadcrumb">
                           <!-- <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="index-2.html">Pages</a></li>
                                <li><a href="index-2.html">Events</a></li>
                                <li>Single Post</li>
                            </ul>-->
                        </div>      
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <figure class="wm-event-countdown"><img src="../{{$offlines->image}}" alt="">
                                <figcaption>
                                    <h2>{{$offlines->c_name}}</h2>
                                   
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-9" style="text-align:center;">


























                        
                            <!--// Editore \\-->
                              <div class="wm-section-title-two"> <h2></h2> </div>
                            <div class="wm-faq">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"  style="font-size: 200%">
                                    
                                   
                                    
                                   
                                <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls=" collapseOne" style="font-size: 140%">
                                              المدرب
                                               </a>
                                            </h4>
                                        </div>
                                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                           
                                            <div class="panel-body" style="font-size: 90%">
                                               {{$offlines->teacher->t_name}}
                                            </div>
                                        </div>    
                                    </div>























       <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 140%">
                                                المنهج
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body" style="font-size: 90%">
                                                {{$offlines->syllabus}}
                                            </div>
                                        </div>
                                    </div>









      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 140%">
                                                بعد أتمام الدورة ستكون مؤهلا في التالي
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body" style="font-size: 90%">
                                                 {{$offlines->certificates}}
                                            </div>
                                        </div>    
                                    </div>



                               

                                </div>
                            </div>


                            <!--// Editore \\-->
                            <!--// Lesson \\-->
                            
                                <!-- Tab panes -->
                                
                            <!--// Lesson \\-->
                           
                            
                   
                                  
                            <!--// Register Now \\-->
                     
                            <!--// Register Now \\-->

                            <!--// Related Events \\-->
                           
                            <!--// Related Events \\-->
                       

                    </div>
                    <aside class="col-md-3">
                            <div class="wm-event-options">
                                <ul>
                                    <li>
                                        <i class="wmicon-time2"></i>
                                        <span>التلريخ</span>
                                        <p>{{ date('F/ d / Y', strtotime($offlines->startDate)) }}</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-clock2"></i>
                                        <span>الساعة</span>
                                        <p>{{$offlines->startClock}} - {{$offlines->endClock}}</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-location"></i>
                                        <span>الفرع</span>
                                        <p>{{$offlines->branch}}</p>
                                    </li>
                                    
                                    <li>
                                        <i class="wmicon-black"></i>
                                        <span>المدرب</span>
                                        <p>{{$offlines->teacher->t_name}}</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-technology4"></i>
                                        <span>رقم الفرع</span>
                                        <p>{{$offlines->branchTelephone}}</p>
                                    </li>
                                </ul>
                            </div>
                            <!--
                            <div class="wm-buyticket-section">
                                <h2>Buy Ticket</h2>
                                <ul>
                                    <li><a href="#"><i class="wmicon-social7"></i> 234 Students</a></li>
                                    <li><a href="#"><i class="wmicon-clock2"></i> Duration: 1hr30mins</a></li>
                                    <li><a href="#"><i class="wmicon-book2"></i> 14 Lectures</a></li>
                                    <li><a href="#"><i class="wmicon-location"></i> Campus L2</a></li>
                                    <li><a href="#"><i class="wmicon-social7"></i> Intermediate</a></li>
                                    <li><a href="#"><i class="wmicon-technology"></i> English Language</a></li>
                                    <li><span><i class="wmicon-tag2"></i> 45.99</span></li>
                                </ul>
                                <span class="wm-paytitle">Pay with:</span>
                                <img src="extra-images/paypal.png" alt="">
                                <div class="clearfix"></div>
                                <a class="wm-plain-btn-style" href="#"><i class="wmicon-shop"></i> purchase ticket</a>
                            </div>-->
                        </aside>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<footer id="wm-footer" class="wm-footer-one">
			
            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <i class="wmicon-interface2"></i>
                                <input type="text" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                                <input type="submit" value="Subscribe to our newsletter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->
@stop