@extends('master')

@section('content')













		<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>Student Dashboard</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	<ul>
				          	 	<li><a href="index-2.html">Home</a></li>
				          	 	<li><a href="#">Student Dashboard</a></li>
				           		<li>My Courses</li>
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
										<h6>Kevin Nickols</h6>
										<a href="#">update image</a>
									</div>
									<ul>
										<li>
											<a href="#">
												<i class="wmicon-avatar"></i>
												Profile Details
											</a>
										</li>
										<li class="active">
											<a href="#">
												<i class="wmicon-book"></i>
												My Courses
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-favorite"></i>
												Favorites
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-paper"></i>
												Statement
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-three"></i>
												Settings
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-arrow"></i>
												Logout
											</a>
										</li>
									</ul>
								</div>
							</div>						
						</aside>
						<div class="col-md-8">
							<div class="wm-student-dashboard-courses wm-dashboard-courses">
								<div class="wm-plane-title">
									<h2>My Courses</h2>
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start wm-student">
											<span>Course Name</span>
										</li>
										<li class="wm-student">
											<span>Status</span>
										</li>
										<li class="wm-student">
											<span>Rating</span>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Archaeology and Anthropology</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$25.99</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">16/05/2016 - 17/06/2016</time></span>
											</div>
										</li>										
										<li>
											<a class="wm-status-courses wm-paid" href="#">Paid</a>
										</li>
										<li>
											<small>8/10</small>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Biochemistry (Molecular and Cellular)</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$34.00</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">9/04/2016 - 10/05/2016</time></span>
											</div>
										</li>
										<li>
											<a class="wm-status-courses wm-completed" href="#">Completed</a>
										</li>
										<li>
											<small>10/10</small>
										</li>										
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Mathematics and Statistics</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$30.50</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">20/06/2016 - 24/07/2016</time></span>
											</div>
										</li>
										<li>
											<a class="wm-status-courses wm-in-Progress" href="#">In Progress</a>
										</li>
										<li>
											<small>4/10</small>
										</li>										
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Materials Science</a></h6>
												<span><a href="#" class="wmicon-tag"></a>Free</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">5/04/2016 - 11/05/2016</time></span>
											</div>
										</li>
										<li>
											<a class="wm-status-courses wm-expired" href="#">Expired</a>
										</li>
										<li>
											<small>0/10</small>
										</li>										
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Modern Languages and Linguistics</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$34.00</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">9/04/2016 - 10/05/2016</time></span>
											</div>
										</li>										
										<li>
											<a class="wm-status-courses wm-paid" href="#">Paid</a>
										</li>
										<li>
											<small>10/10</small>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Computer Science and Philosophy</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$30.50</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">20/06/2016 - 24/07/2016</time></span>
											</div>
										</li>
										<li>
											<a class="wm-status-courses wm-paid" href="#">Paid</a>
										</li>
										<li>
											<small>8/10</small>
										</li>										
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Medicines</a></h6>
												<span><a href="#" class="wmicon-tag"></a>Free</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">5/04/2016 - 11/05/2016</time></span>		
											</div>
										</li>
										<li>
											<a class="wm-status-courses wm-paid" href="#">Paid</a>
										</li>
										<li>
											<small>7/10</small>
										</li>										
									</ul>									
								</div>
							</div>										
						</div>
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
		</div>








@stop