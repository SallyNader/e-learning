

@extends('master')

@section('content')
<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				        	@unless(empty($article))
					@foreach($article as $a)
				       		<h1>{{$a->a_title}}</h1> 
				        </div>
				          
				    </div>
			    </div>
			</div>    
		</div>
  		<!--// Mini Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section wm-heading">
				<div class="container">
			
				</div>
			</div>
			<!--// Main Section \\-->

			<!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row" >
						
				
					
						
						<div class="col-md-12" >
							<div class="wm-title-typoelements" style="text-align: center">
								<h2>الناشر : <span>{{$a->a_publisher}}</span></h2>
							</div>
						</div>
						<div class="col-md-9">
							<div class="wm-typo-columns" style="text-align: right">
								<p>

             <?php





	echo $a->a_article;

	echo "</p>";
	
	?>

	
	
	
								
							</div>
								<div class="wm-button-left">
									
									
								</div>					
						</div>


						@endforeach
						@endunless
				
						
						
	
						
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->


@stop