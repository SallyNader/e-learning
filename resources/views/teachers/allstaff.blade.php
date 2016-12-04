@extends('master')

@section('content')

















<!--// Mini Header \\-->
		<div class="wm-mini-header">
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

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row">
						<div class="wm-filterable">
							<!--<ul>
								<li>															
									<a href="casestudy-single-post.html" data-filter="*" class="active">All</a>				
								</li>
								<li>																	
									<a href="casestudy-single-post.html" data-filter=".jquery">Biochemistry</a>
								</li>
								<li>
									<a href="casestudy-single-post.html" data-filter=".php">science</a>
								</li>
								<li>
									<a href="casestudy-single-post.html" data-filter=".wordpress">Geography</a>
								</li>
								<li>
									<a href="casestudy-single-post.html" data-filter=".jquery">History</a>
								</li>
							</ul>-->
						</div>	
						<div class="wm-our-professors">
							<ul class="row">


							@unless(empty($teachers))

							@foreach($teachers as $t)
								<li class="col-md-4 wordpress">
									<figure>
										<a href="#"><img src="extra-images/{{$t->profile_image}}" alt=""></a>
										<figcaption>
											<a href="{{route('teacher.show',$t->t_id)}}">لمشاهدة المزيد</a>											
										</figcaption>											
									</figure>
									<div class="wm-team-info" style="text-align: left;">
										<h5><a href="#"></a>{{$t->t_name}}</h5>										
										<br>
										@unless(empty($t->type))
										<p style="color:#ffb84d" ><b>{{$t->type->t_title}}</b></p>
										@endunless
										
										
									</div>
								</li>

								@endforeach
								
								@endunless
								
								
								
								
								
								
							</ul>
						</div>	
						<div class="wm-pagination">
							<ul>
							    <li>
							      <a href="#" aria-label="Previous">
							       <i class="wmicon-arrows4"></i>
							       Previous
							      </a>
							    </li>
							    <li class="active"><a href="#">1</a></li>
							    <li><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li> </li>
							    <li>...</li>
							    <li> </li>
							    <li><a href="#">18</a></li>
							    <li>
							      <a href="#" aria-label="Next">
							       <i class="wmicon-arrows4"></i>
							       Next
							      </a>
							    </li>
							</ul>
						</div>					
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

@stop