@extends('master')

@section('content')




<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>{{$course->c_name}}</h1> 
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
						<aside class="col-md-3">
							<div class="widget widget_course-price">
							@if(!Auth::user())
<a href="{{url('register')}}" style="background-color: #b99663;color: white">للأشتراك في الدورة</a>

								@endif
							@if(Auth::check())
								<div class="wm-widget-heading" style="text-align: center;" >

								
									<h4>سعر الدورة</h4>
								</div>
								
								<span><small></small>${{$course->price}}</span>
								

								@if($Boolean=='true' and $accepted==1)
								<a href="{{url('addcourse/'.Auth::user()->id.'/'.$course->c_id)}}" style="background-color: #b99663;color: white" >للأشتراك في الدورة</a>
								@endif

								@endif
								<ul>
								@unless(empty($student))
									<li><a href="#"><i class=" wmicon-social7" ></i>{{$student}}</a></li>@endunless
									<li><a href="#"><i class=" wmicon-clock2"></i><time datetime="2017-02-14"> 2hr30mins</time></a></li>
									@unless(empty($sessions))
									<li><a href="#"><i class=" wmicon-book2"></i>{{$sessions}} محاضرة</a></li>@endunless
									
<!--
									<li><a href="#"><i class=" wmicon-location"></i>Campus L2</a></li>
									<li><a href="#">
										<div class="wm-levelrating">
											<span class="rating-box" style="width:70%"></span>
										</div>
										Intermediate</a></li>
									<li><a href="#"><i class=" wmicon-technology"></i>English Language</a></li>-->
								</ul>
							</div>
							<!--<div class="widget widget_futurecourse">
                               <div class="wm-widget-title">
									<h2>Featured Articles</h2>
								</div>
                                <ul>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img alt="" src="extra-images/blog-widget-1.jpg">
                                            </a>
                                        </figure>
                                        <div class="wm-futurecourse">
                                            <div class="wm-futurecourse-info">
                                                <h4>
                                                    <a href="#">Transdisciplinary Design</a>
                                                </h4>
                                                <small>$59.00</small>
                                                <span>$39.00</span>
                                            </div>
                                            <ul>
                                                <li><a href="#"><i class="wmicon-social7" aria-hidden="true"></i>309</a></li>
                                                <li><a href="#"><i class="wmicon-social6" aria-hidden="true"></i>19 </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img alt="" src="extra-images/blog-widget-2.jpg">
                                            </a>
                                        </figure>
                                        <div class="wm-futurecourse">
                                            <div class="wm-futurecourse-info">
                                                <h4>
                                                    <a href="#">Advanced Landscape & Urbanism</a>
                                                </h4>
                                                <span>$69.00</span>
                                            </div>
                                            <ul>
                                                <li><a href="#"><i class="wmicon-social7" aria-hidden="true"></i>176</a></li>
                                                <li><a href="#"><i class="wmicon-social6" aria-hidden="true"></i>23</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img alt="" src="extra-images/blog-widget-3.jpg">
                                            </a>
                                        </figure>
                                        <div class="wm-futurecourse">
                                            <div class="wm-futurecourse-info">
                                                <h4>
                                                    <a href="#">Finacial Information Systems</a>
                                                </h4>
                                                <span>Free</span>
                                            </div>
                                            <ul>
                                                <li><a href="#"><i class="wmicon-social7" aria-hidden="true"></i>176</a></li>
                                                <li><a href="#"><i class="wmicon-social6" aria-hidden="true"></i>23</a></li>
                                            </ul>
                                        </div>
                                    </li>        
                                </ul>
                            </div>
							<div class="widget widget_articles">
								<div class="wm-widget-title">
									<h2>Featured Articles</h2>
								</div>
								<ul>
									<li>
										<figure>
											<a href="#"><img src="extra-images/blog-widget-1.jpg" alt=""></a>
										</figure>
										<div class="wm-Article">
											<h6><a href="#">Transdisciplinary Art Design</a></h6>
											<time datetime="2008-02-14 20:00">7/4/2016</time>
											<a href="#"><i class="wmicon-social"></i>12</a>
										</div>										
									</li>
									<li>
										<figure>
											<a href="#"><img src="extra-images/blog-widget-2.jpg" alt=""></a>
										</figure>
										<div class="wm-Article">
											<h6><a href="#">Advanced Landscape & Urbanism</a></h6>
											<time datetime="2008-02-14 20:00">7/4/2016</time>
											<a href="#"><i class="wmicon-social"></i>36</a>
										</div>										
									</li>
									<li>
										<figure>
											<a href="#"><img src="extra-images/blog-widget-3.jpg" alt=""></a>
										</figure>
										<div class="wm-Article">
											<h6><a href="#">Financial Info Systems</a></h6>
											<time datetime="2008-02-14 20:00">7/4/2016</time>
											<a href="#"><i class="wmicon-social"></i>28</a>
										</div>										
									</li>
								</ul>
							</div>
							<div class="widget widget_categories">
								<div class="wm-widget-title">
									<h2>Categories</h2>
								</div>
								<ul>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Classical Archaeology </a></li>
									<li><a href="#">Classics & English</a></li>
									<li><a href="#">Materials Science</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Physics & Philosophy</a></li>
									<li><a href="#">Theology & Religion</a></li>
									<li><a href="#">Law</a></li>
                                    <li><a href="#">Chemistry</a></li>
                                    <li><a href="#">Classical Archaeology </a></li>
                                    <li><a href="#">Classics & English</a></li>
                                    <li><a href="#">Materials Science</a></li>
                                    <li><a href="#">Mathematics</a></li>
                                    <li><a href="#">Physics & Philosophy</a></li>
                                    <li><a href="#">Theology & Religion</a></li>
                                    <li><a href="#">Law</a></li>
								</ul>
							</div>-->
							<div class="widget widget_archive">
								<!--<div class="wm-widget-title">
									<h2>Archive</h2>
								</div>
								<div class="wm-select-two">
									<select>
										<option>Select Month</option>
										<option>Select Month1</option>
										<option>Select Month2</option>
										<option>Select Month3</option>
									</select>
								</div>-->
							</div>
							<div class="widget widget_professor-info" style="text-align: right;">
								<div class="wm-widget-title" style="text-align: right;">
									<h2 style="text-align: right;margin-left: 70px"><strong>عن المدرب</strong></h2>
								</div>
								<figure>
									<a href="#"><img src="../extra-images/{{$course->teacher->path}}" alt=""></a>
								</figure>
								<div class="wm-Professor-info">
									<h6><a href="#"><strong>{{$course->teacher->t_name}}</strong></a></h6>
									<p></p>
									<span>  <strong></strong></span>
								</div>
								
								<p>{{$course->teacher->t_experience}}..</p>
								<a class="wm-read-more" href="{{route('teacher.show',$course->teacher->t_id)}}">تفاصيل عن المدرب</a>
							</div>


						<!--	<div class="widget widget_courses-program">
								<div class="wm-widget-title">
									<h2>Course Program</h2>
								</div>
								<ul>
									<li>
										<a href="#">Monday</a>
										<span>9:00am - 10:30am</span>
									</li>
									<li>
										<a href="#">Tuesday</a>
										<span>9:30am - 10:30am</span>
									</li>
									<li>
										<a href="#">Wednesday</a>
										<span>8:00am - 9:30am</span>
									</li>
									<li>
										<a href="#">Thursday</a>
										<span>8:30am - 10:00am</span>
									</li>
									<li>
										<a href="#">Friday</a>
										<span>10:00am - 11:30am</span>
									</li>
									<li>
										<a href="#">Saturday</a>
										<span>Closed</span>
									</li>
									<li>
										<a href="#">Sunday</a>
										<span>Closed</span>
									</li>
								</ul>
							</div>
							<div class="widget widget_tags">
								<div class="wm-widget-title">
									<h2>Tags</h2>
								</div>
								<div class="tags">
									<a href="blog-detail.html">Course</a>
									<a href="blog-detail.html">Business</a>
									<a href="blog-detail.html">News</a>
									<a href="blog-detail.html">University</a>
									<a href="blog-detail.html">Conference</a>
									<a href="blog-detail.html">Professor</a>
									<a href="blog-detail.html">Finance</a>															
								</div>								
							</div>-->
							<div class="widget widget_add">
								<figure>
									<a href="blog-detail.html">
										
									</a>
								</figure>
							</div>
							<div class="widget widget_latestnews">
								<div class="wm-widget-title">
									<h2 style="text-align: right;"> <strong style="text-align: right;margin-left: 60px">أشهر المقالات</strong></h2>
								</div>
								<ul>
									@unless(empty($articles))

									@foreach($articles  as $a)
									<li>
										<figure>
											<a href="#"></a>
										</figure>
										<div class="wm-latestnews" style="margin-left: 20px">
											<h5><a href="{{route('article.show',$a->a_id)}}"><strong>{{$a->a_title}}</strong></a></h5>
											<p>...<?php
											 echo substr($a->a_article,0,90) 


											?></p>
											<time datetime="2008-02-14 20:00">{{ date('F d, Y', strtotime($a->created_at)) }}
</time>
											
										</div>										
									</li>



@endforeach
									@endunless
								</ul>
							</div>
						</aside>
						<div class="col-md-9"  style="text-align: right;">
							<div class="wm-blog-single wm-courses">
								<figure class="wm-detail-thumb">
									<img src="../{{$course->image}}" alt="" >
								</figure>
								<div class="wm-blog-author wm-ourcourses">
									<div class="wm-blogauthor-left">
										<img style="width: ;height: " src="../extra-images\{{$course->teacher->path}}" alt="">
										<a class="wm-authorpost" href="#">{{$course->teacher->t_name}}</a>
									</div>
									<div class="wm-our-courses">
										<ul><!--
											<li>
												<a href="#"><i class="wmicon-tool2"></i> Viewers</a>
											</li>
											<li>
												<a href="#"><i class="wmicon-diploma"></i>Certificate: No</a>
											</li>
											<li>
												<a href="#"><i class="wmicon-symbol"></i>Assesments: Yes</a>
											</li>-->
										</ul>
									</div>
								</div>								
							</div>
							<div class="wm-courses-reviewes">
								
								<div class="wm-ourcourses-right">
								@unless($course->c_id == $firstID)
									<a class="wm-previous-icon" href="{{route('course.show',$course->c_id-1)}}"><i class="fa fa-angle-left" ></i>الدورة السابقة</a>

									@endunless
									@unless($course->c_id >= $lastID)
									<a class="wm-Next-icon" href="{{route('course.show',$course->c_id+1)}}">الدورة التالية<i class="fa fa-angle-right" ></i></a>
									@endunless
								</div>
							</div>
							<div class="wm-our-course-detail">
								<div class="wm-title-full">
									<h2>{{$course->c_name}}</h2>
								</div>
								<p class="wm-text">{{$course->disc}}.</p>
								<p> </p>
								<div class="wm-course-blockquote-two">
									<blockquote>إذا كنت تعتقد أن التعليم باهظ الثمن، فلتجرّب الجهل</blockquote>
									<span> ديريك بوك-</span>
								</div>								
								<div class="wm-courses-info">
									<div class="wm-title-full">
										<h2>المنهج</h2>
									</div>
									<ul>
									@unless(empty($syllabus))

									@foreach($syllabus as $s)
										<li>{{$s}}<a href="#" class="wmicon-lock"></a></li>

										@endforeach
										@endunless
									</ul>
								</div>								
								<div class="wm-certification-listing">
									<div class="wm-title-full">
										<h2>بعد أتمام الدورة ستكون مؤهلا</h2>
									</div>
									<p>يوفر المركز لأعضائه دورات وورش عمل تعليمية وتدريبية متخصصة. يشارك في إعداد وتقديم هذه الدورات مجموعة من المحكمين والخبراء المتخصصين في العديد من المجالات المتعلقة بالتحكيم التجاري الدولي. سيتمكن الأعضاء الزملاء من كسب مهارات جديدة </p>
									<ul>
										@unless(empty($certificates))

									@foreach($certificates as $s)
										<li>{{$s}}<a href="#" class="wmicon-mark"></a> </li>

										@endforeach
										@endunless
									</ul>																		
								</div>	
							</div>
							@unless(empty($Boolean))
								@if($Boolean=='false')
							<div class="wm-courses-getting-started">
								<div class="wm-title-full">
									<h2>جميع الدروس المتعلقة بالدورة</h2>
								</div>
								<div class="wm-courses-started">
									<span></span>
									<ul class="wm-courses-started-listing">
										@if(!empty($videos))
										@foreach($videos as $v)
										<li>
											<a href="#" class=" wmicon-interface"></a>
											<div class="wm-courses-started-text">
												<h6><a href="#">{{$v->v_name}}</a></h6><br/><br/>

												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">{{$v->startDate}}</time></span>
												<span><a href="#" class=" wmicon-clock2"></a><time datetime="2017-02-14"> {{$v->duration}}</time></span>													
											</div>
											<div class="wm-courses-preview">
												<a href="{{route('video.show',$v->v_id)}}">لمشاهدة الدرس</a>
											</div>
										</li>
										@endforeach

										@else
										<div>لا يوجد دروس</div>
										@endif

									</ul>
								</div>
							
							</div>
							@endif
							@endunless
							<!--
							<div class="wm-title-full">
								<h2>Reviews</h2>
							</div>
							<div class="wm-courses-rating">								
								<div class="wm-average-rating">
									<span>Average Rating</span>
									<div class="wm-courses-average-rating">
										<span>8.9</span>
										<small>based on</small>
										<div class="wm-rating">
											<span class="rating-box" style="width:100%"></span>
										</div>
										<p>3 ratings</p>
									</div>									
								</div>
								<div class="wm-detailed-rating">
									<span>Detailed Rating</span>
									<div class="wm-courses-detail-rating">
										<ul>
											<li>
												<span>5 Stars</span>
												<div class="wm-rating">
													<span class="wm-rating-box" style="width:100%"></span>																				
												</div>
												<small>3</small>
											</li>
											<li>
												<span>4 Stars</span>
												<div class="wm-rating">
													<span class="wm-rating-box" style="width:0%"></span>																				
												</div>
												<small>4</small>
											</li>
											<li>
												<span>3 Stars</span>
												<div class="wm-rating">
													<span class="wm-rating-box" style="width:0%"></span>																				
												</div>
												<small>3</small>
											</li>
											<li>
												<span>2 Stars</span>
												<div class="wm-rating">
													<span class="wm-rating-box" style="width:0%"></span>																				
												</div>
												<small>2</small>
											</li>
											<li>
												<span>1 Stars</span>
												<div class="wm-rating">
													<span class="wm-rating-box" style="width:0%"></span>																				
												</div>
												<small>1</small>
											</li>
										</ul>
									</div>
								</div>														
							</div>							
							<div class="wm-postreviews">
				               	<ul>
				                    <li>
				                       	<div class="thumblist">
				                            <ul>
					                            <li>
					                            	<h4><a href="#">Brenda F. Oglesby</a></h4>
					                              	<figure><a href="blog-detail.html"><img src="extra-images/reviews-1.jpg" alt=""></a></figure>
									                <div class="wm-reviews-text">
														<div class="wm-rating">
															<span class="rating-box" style="width:100%"></span>											
														</div>
														<span>23 days ago</span>
														<p>The professors link theory and practice by illustrating their courses with examples from their own professional experience. This learning method prepared me for working life.</p>
													</div>
					                            </li>
				                            </ul>
				                        </div>
				                    </li>
				                    <li>
				                       	<div class="thumblist">
				                            <ul>
					                            <li>
					                            	<h4><a href="#">Gloria E. Larsen</a></h4>
					                              	<figure><a href="blog-detail.html"><img src="extra-images/reviews-2.jpg" alt=""></a></figure>
									                <div class="wm-reviews-text">
														<div class="wm-rating">
															<span class="rating-box" style="width:100%"></span>											
														</div>
														<span>24 days ago</span>
														<p>Studying at you brought an added value to my professional life. The courses were very interesting and the professors were highly qualified. The small size of the classes allowed the use of better learning methods, which also implied a better atmosphere</p>
													</div>
					                            </li>
				                            </ul>
				                        </div>
				                    </li>
				                    <li>
				                       	<div class="thumblist">
				                            <ul>
					                            <li>
					                            	<h4><a href="#">Gloria E. Larsen</a></h4>
					                              	<figure><a href="blog-detail.html"><img src="extra-images/reviews-3.jpg" alt=""></a></figure>
									                <div class="wm-reviews-text">
														<div class="wm-rating">
															<span class="rating-box" style="width:100%"></span>											
														</div>
														<span>24 days ago</span>
														<p>Very unique in terms of the social and academic environment. I discussed with my friends who attended various universities all around the world and have found that very few universities.</p>
													</div>
					                            </li>
				                            </ul>
				                        </div>
				                    </li>
				                </ul>
		                   	</div>							
							<div class="wm-form">
								<div class="wm-widgettitle">
									<h2>Leave <span>Your Review</span></h2>
								</div>
								<form>
									<ul>
										<li><input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>
										<li>
											<div class="wm-select-two">
												<select>
													<option>1 Star Review</option>
													<option>1 Star Review1</option>
													<option>1 Star Review2</option>
													<option>1 Star Review3</option>
												</select>
											</div>
										</li>
										<li class="wm-full-form">
											<textarea placeholder="Your Comment" ></textarea>
										</li>
	                                    <li class="wm-full-form">
											<input type="submit" value="Submit now">
	                                    </li>
	                                </ul>
								</form>                                
						    </div>							    
							<div class="wm-courses-author-info">
								<div class="wm-title-full">
									<h2>Course Instructors</h2>
								</div>	
								<ul>
									<li>
										<div class="wm-author-detail wm-courses-authorinfo">
											<figure>
												<a href="#"><img src="extra-images/author-blog-2.jpg" alt=""></a>
											</figure>
											<div class="wm-author-text">
												<h5><a href="#">George B. Rowe</a></h5>
												<span>Associate Professor of Modern Languages & Linguistics</span>
												<p>George accompanied Dr. Stephen Harnish to SC12, an international supercomputing conference in Salt Lake City, Utah. At the conference, he helped Harnish build a computer "minicluster" that will become Bluffton's.</p>
											</div>								
										</div>
									</li>
									<li>
										<div class="wm-author-detail wm-courses-authorinfo">
											<figure>
												<a href="#"><img src="extra-images/author-blog-7.jpg" alt=""></a>
											</figure>
											<div class="wm-author-text">
												<h5><a href="#">Heidi R. Jones</a></h5>
												<span>Assistant of Modern Languages & Linguistics</span>
												<p>Professors perform alongside Bluffton students and community members in music ensembles, including instrumental and vocal groups, such as the annual performance.</p>
											</div>								
										</div>
									</li>
								</ul>						
							</div>
                            <div class="wm-title-full">
                                <h2>FAQ’s</h2>
                            </div>
                            <div class="wm-faq">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls=" collapseOne">
                                                When are Mid-Year Reports due?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How do I track the status of my application?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree"> 
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                               Does Enroll work with third-party agents?
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                               Are Halal dining options available for students?
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                               Where do transfer students live?
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>-->
                            <br/>
                            <br/>
                            <br/>
                            <div></div>
                              @unless(empty($relatedCourses))
                            <div class="wm-title-full">
                                <h2>دورات تابعة للقسم</h2>
                            </div>
                            <div class="wm-courses wm-courses-popular">
                                <ul class="row">
                                    
                          

                            @foreach($relatedCourses as $r)
                                    <li class="col-md-4">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="{{route('course.show',$r->c_id)}}"><img src="../{{$r->image}}" alt=""> <span class="wm-popular-hover"> <small>تفاصيل الدورة</small> </span> </a>
                                                <figcaption>
                                                    <img src="../extra-images/{{$r->teacher->profile_image}}" alt="" style="height: 60px;width: 64px">
                                                    <h6><a href="#">{{$r->teacher->t_name}}</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">{{$r->c_name}}</a></h6>
                                                @if(Auth::check())
                                                <div class="wm-courses-price"> <span>${{$r->price}}</span> </div>
                                                @endif
                                                <ul><!--
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 309</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 19</a></li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
@endforeach

                                    @endunless
                                </ul>
                            </div>						
						</div>
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
		</div>
		<!--// Main Content \\-->

@stop