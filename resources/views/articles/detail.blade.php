

@extends('master')

@section('content')
<!--// Mini Header \\-->
<style type="text/css">
	



div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}

</style>
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

							@if($a->vote >= 1 and $a->vote <= 10)
							<div style="margin-left: 30px"><img src="{!!asset('images/star1.png')!!}" style="width:200px;height: 30px;"> {{$a->vote}} <strong>: التقيم </strong>  </div>
							@elseif($a->vote >= 11 and $a->vote<=20)
							<div style="margin-left: 30px"><img src="{!!asset('images/star2.png')!!}" style="width:200px;height: 30px;"> {{$a->vote}} <strong>: التقيم </strong>  </div>
							@elseif($a->vote >= 21 and $a->vote <=40)
							<div style="margin-left: 30px"><img src="{!!asset('images/star3.png')!!}" style="width:200px;height: 30px;"> {{$a->vote}} <strong>: التقيم </strong>  </div>
							@elseif($a->vote >=41 and $a->vote <= 60)
							<div style="margin-left: 30px"><img src="{!!asset('images/star4.png')!!}" style="width:200px;height: 30px;"> {{$a->vote}} <strong>: التقيم </strong>  </div>
							@elseif($a->vote >= 61 )
							<div style="margin-left: 30px"><img src="{!!asset('images/star.png')!!}" style="width:200px;height: 30px;"> {{$a->vote}} <strong>: التقيم </strong>  </div>
							@endif





<p></p>

<p></p>
@if(Auth::check())

@if($boolean == 'false')
<div class="wm-average-rating" style="margin-top: 17px" >
								
									<div class="wm-courses-average-rating" style="width: 400px">
									
										<small><strong>قيم المقال</strong></small>
										
																	<div class="stars">
  <form action="{{url('article/vote')}}" method="POST">
<input type="hidden" name="id" value="{{$a->a_id}}">
                                                {{ csrf_field() }}
    <input class="star star-5" id="star-5" type="radio" name="star5"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star4"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star3"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star2"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star1"/>
    <label class="star star-1" for="star-1"></label>
<input type="submit" name=""  value=" قيم المقال " class="c" style="margin-right:22px ;border: 0;background-color: #b99663;color: white;border-radius: 12px; width: 80px;height: 30px"> 
  </form>
</div>
										
									</div>									
								</div>
								@endif
								@endif




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