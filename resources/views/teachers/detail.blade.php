@extends('master')

@section('content')

















<div class="wm-pro-mini-header">
			<span class="wm-blue-transparent"></span>
		    <div class="container">
			     <div class="row">
				      <div class="col-md-12">
			      		   <div class="wm-mini-title">
						   		<h1>المحكمين و الخبراء</h1>	
			      		   </div>
					          
				      </div>
			     </div>
		    </div>    
	   </div>
		<!--// Mini Header \\-->

		<!--// Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content " >

            <!--// Main Section \\-->
            <div class="wm-main-section">
            	<div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="row">

                                <aside class="col-md-3">
                                    <div class="widget widget_our-professors">
                                        <figure>
                                            <a href="#"><img src="../../public/extra-images/{{$teacher->profile_image}}" alt=""></a>
                                            <figcaption>
                                                <a href="#" style="text-align: right;" >{{$teacher->t_name}}</a>


                                                <p style="color:#ffb84d" ><b>{{$teacher->type->t_title}}</b></p>
                                                <span></span>
                                            </figcaption>
                                        </figure>
                                        <ul>
                                             <li><a href="#"><i class="wmicon-social5" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="wmicon-social4" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="wmicon-logo" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div><!--
                                    <div class="widget widget_contact-form">
                                        <h6>Contact Chester</h6>
                                        <form>
                                               <ul>
                                                    <li>    
                                                        <input type="text" value="Your Name" onblur="if(this.value ==  '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                                    </li>
                                                    <li>    
                                                        <input type="text" value="Your E-mail" onblur="if(this.value ==  '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }">
                                                    </li>
                                                    <li class="full">
                                                        <textarea placeholder="Message" name="send"></textarea>
                                                    </li>
                                                    <li class="full">
                                                        <input type="submit" value="contact">
                                                    </li>
                                               </ul> 
                                        </form>
                                    </div>-->
                                    <div class="widget widget_twittwe-feed">
                                         <h5> <span></span></h5>  
                                         <ul>
                                            
                                         </ul> 
                                    </div>             
                                </aside>
                                <div class="col-md-9">
                                    <div class="wm-professor-info">
                                      <div > <h2></h2></div> 
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <div class="wm-professor-contact">
                                                    <div class="wm-professor-icon">
                                                       <a href="#" class="icon-hidden"><i class="wmicon-technology4" aria-hidden="true"></i></a>
                                                    </div>
                                                    <h6><strong>التليفون</strong></h6>
                                                    <span>{{$teacher->t_phone}}</span>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-professor-contact">
                                                    <div class="wm-professor-icon">
                                                       <a href="#"><i class="wmicon-web2" aria-hidden="true"></i></a>
                                                    </div>
                                                    <h6> <strong>البريد الالكتروني</strong></h6>
                                                    <span>{{$teacher->t_email}}</span>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-professor-contact">
                                                    <div class="wm-professor-icon">
                                                       <a href="#"><i class="wmicon-pen" aria-hidden="true"></i></a>
                                                    </div>
                                                    <h6><strong>عدد سنين الخبرة</strong></h6>
                                                    <span>{{$teacher->experience_years}}</span>
                                                </div>
                                            </li>
                                        </ul>    
                                    </div>
                                    <div class="wm-rich-aditor" style="text-align: right;">
                                        <p></p>

                                        <h3>خبرات المدرب</h3>

                                        <p>{{$teacher->t_experience}}</p>
                                        <!--<ul class="row">
                                            <li class="col-md-6">Research the conditions of urbanism</li>
                                            <li class="col-md-6">Employs advanced design techniques </li>
                                            <li class="col-md-6">Lens of landscape theory and design practice</li>
                                            <li class="col-md-6">Innovative methodologies</li>
                                            <li class="col-md-6">Employ advanced design techniques</li>
                                            <li class="col-md-6">Develop speculative designs</li>
                                            <li class="col-md-6">Innovative methodologies </li>
                                            <li class="col-md-6">Strategies & interventions </li>                
                                        </ul>-->
                                    </div>

                                    <div class="wm-rich-aditor" style="text-align: right;">

                                    <br/><br/><br/> <h3> الدورات التي يدرسها &nbsp{{$teacher->t_name}}</h3> </div>
                                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec"  style="text-align: center;">
                                        <ul class="row">
                                    
                                      
                                         @foreach($teacher->courses as $c)
                                            <li class="col-md-12">
                                                <div class="wm-courses-popular-wrap" style="text-align: right;" >
                                                    <figure> <a href="{{route('course.show',$c->c_id)}}"><img src="../{{$c->image}}" alt=""> <span class="wm-popular-hover"> <small>تفاصيل الدورة</small> </span> </a>
                                                        <figcaption>
                                                            <img style="width: 50px;height: 50px" src="../extra-images/{{$c->teacher->profile_image}}" alt="">
                                                            <h6><b><a href="#">{{$c->teacher->t_name}}</a></b></h6>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="wm-popular-courses-text" style="text-align: right;">
                                                        <h6 style="text-align: right;"><a href="#"><strong>{{$c->c_name}}</strong></a></h6>
                                                        <p>{{$c->disc}}</p>
                                                        <div class="wm-courses-price"> <span></span> </div>
                                                        <ul>
                                                           <!-- <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a></li>-->
                                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 45</a></li>
                                                            <!--
                                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L3</a></li>
                                                            <li><div class="wm-rating"><span style="width:100%" class="rating-box"></span></div> Intermediate</li>

                                                            -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
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
		<!--// Main Content \\-->












@stop