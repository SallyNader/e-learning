@extends('master')

@section('content')













		<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>الصفحة الشخصية</h1> 
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
						<aside class="col-md-4">
							<div class="wm-student-dashboard-nav">
								<div class="wm-student-nav">
									<figure>
										<a href="#"><img src="extra-images/students-setting-1.jpg" alt=""></a>
									</figure>
									<div class="wm-student-nav-text">
										<h6>{{Auth::user()->name}}</h6>
										<a href="#">لتحميل صورة جديدة</a>
									</div>
									<ul>
										<li>
											<a href="#">
												<i class="wmicon-avatar"></i>
												تفاصيل الصفحة الشخصية
											</a>
										</li>
										<li class="active">
											<a href="#">
												<i class="wmicon-book"></i>
												دوراتي
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-favorite"></i>
												المفضلات
											</a>
										</li>
										
									
									</ul>
								</div>
							</div>						
						</aside>
						<div class="col-md-8" >
							<div class="wm-student-dashboard-courses wm-dashboard-courses" style="width: 550px;margin-left: : 90px">
								<div class="wm-plane-title" style="text-align: center;">
									<h2>الدورات الخاصة بي</h2>
								</div>
								<div class="wm-article" style="text-align: right;">
									<ul>
										<li class="wm-courses-start wm-student">
											<span>أسم الدورة</span>
										</li>
										<li class="wm-student">
											<span></span>
										</li>
										<li class="wm-student">
											<span></span>
										</li>
									</ul>									
								</div>
								
								
								
								
								@unless(empty($courses))

								@foreach($courses as $c)
								@foreach($c as $course)
								<div class="wm-article" >
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">{{$course->c_name}}</a></h6>
												<span><a href="#" class="wmicon-tag"></a>${{$course->price}}</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">{{ date('F d, Y', strtotime($course->created_at)) }}</time></span>		
											</div>
										</li>
										
										<li style="text-align: center;">
											<a class="btn btn-warning" href="{{route('course.show',$course->c_id)}}">لمشاهدة الدورة</a>
										</li>
										<!--
										<li>
											<small>7/10</small>
										</li>-->										
									</ul>									
								</div>
								@endforeach
									@endforeach


								@endunless
							</div>										
						</div>
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
		</div>








@stop