

@extends('master')

@section('content')
<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>المجلة الأعلامية</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	
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
						
					@unless(empty($articles))
					@foreach($articles as $a)
					
						
						<div class="col-md-12" >
							<div class="wm-title-typoelements" style="text-align: center">
								<h2>الناشر : <span>{{$a->a_publisher}}</span></h2>
								
								 @if($a->vote >= 1 and $a->vote <= 10)
                            <img src="{!!asset('images/star1.png')!!}" style="width:160px;height: 30px; margin-right: 670px"> 
                            @elseif($a->vote >= 11 and $a->vote<=20)
                            <img src="{!!asset('images/star2.png')!!}" style="width:160px;height: 30px;margin-right: 670px"> 
                            @elseif($a->vote >= 21 and $a->vote <=40)
                            <img src="{!!asset('images/star3.png')!!}" style="width:160px;height: 30px;margin-right: 670px"> 
                            @elseif($a->vote >=41 and $a->vote <= 60)
                            <img src="{!!asset('images/star4.png')!!}" style="width:160px;height: 30px;margin-right: 670px;"> 
                            @elseif($a->vote >= 61 )
                           <img src="{!!asset('images/star.png')!!}" style="width:160px;height: 30px;margin-right: 670px"> 
                            @endif
							</div>
						</div>
						<div class="col-md-9">
							<div class="wm-typo-columns" style="text-align: center;margin-bottom: 1px">
								<p>

             <?php


if(strlen($a->a_article)>400){


	echo substr($a->a_article, 0,800);

	echo "</p>";
	echo "<br>";
	?>

	<div class="wm-button-left">
									<a class="wm-read-button" href="{{route('article.show',$a->a_id)}}">لقرأة المزيد</a>
									
								</div>	
	
	<?php
}else{


	echo $a->a_article;

	echo "</p>";
}

             ?>
								
							</div>
								<div class="wm-button-left">
									
									
								</div>					
						</div>


						@endforeach
						@endunless
				<!--
						<div class="col-md-6">
							<div class="wm-classic-heading">
								<h2>Tabs</h2>
							</div>
							<div class="wm-tabs-typo wm-typography-element">
								<ul class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Section 1</a></li>
								   <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Section 2</a></li>
								</ul>
								<div class="tab-content">
								    <div role="tabpanel" class="tab-pane active" id="home">
								    	<a href="#"><img src="extra-images/typo-tabs.jpg" alt="logo"></a>
								    	<p>Donec porta diam eu massa. Quisum que diam lorem, interdum vitae eta, dapibus a, scelerisque vitae, pedem. 
								    		Donec eget tellus non erat lacinia eti fermentum. Donec in velit vel ipsum auctor.
								    	</p>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="profile">	
								    	<a href="#"><img src="extra-images/typo-tabs.jpg" alt="logo"></a>
								    	<p>Donec porta diam eu massa. Quisum que diam lorem, dapibus a, scelerisque vitae, pedem. 
								    		Donec eget tellus non erat lacinia eti fermentum. Donec in velit vel ipsum auctor.
								    	</p>
									</div>
								</div>
							</div>			
						</div>
-->
						<!--
						<div class="col-md-6">
							<div class="wm-classic-heading">
								<h2>Tour <span>Section</span></h2>
							</div>
							<div class="wm-tabs-listing wm-typography-element">
								<ul class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#form" aria-controls="form" role="tab" data-toggle="tab">Section 1</a></li>
								   <li role="presentation"><a href="#form" aria-controls="form" role="tab" data-toggle="tab">Section 2</a></li>
								   <li role="presentation"><a href="#letter" aria-controls="letter" role="tab" data-toggle="tab">Section 3</a></li>
								</ul>
								<div class="tab-content">
								    <div role="tabpanel" class="tab-pane active" id="form">								
								    	<p>Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem,
								    	 scelerisque vitae Donec eget tellus tellus non non erat lacinia fermentum. </p>
								    	 <p>Donec porta diam eu massa. Quisum que lorem, interdum, scelerisque vitae, pedem.</p>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="letter">								    	
								    	<p>Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus,
								    	 scelerisque vitae, pede. Donec non erat lacinia fermentum. </p>
									</div>
								</div>
							</div>			
						</div>-->
						<!--
						<div class="col-md-12">
							<div class="wm-classic-heading">
								<h2>Lists</h2>
							</div>
						</div>
						<div class="wm-list-wrap wm-typography-element">							
							<div class="col-md-2">
								<ul class="wm-icon-list-style">
									<li>
										<i class="fa fa-caret-right"></i>
										Aenean auctor
									</li>
									<li>
										<i class="fa fa-caret-right"></i>
										Et urna aliquam
									</li>
									<li>
										<i class="fa fa-caret-right"></i>
										Erat volutpat
									</li>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="wm-icon-list-style">
									<li>
										<i class="fa fa-check"></i>
										Aenean auctor
									</li>
									<li>
									<i class="fa fa-check"></i>
									Et urna aliquam
									</li>
									<li>
									<i class="fa fa-check"></i>
									Erat volutpat
									</li>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="wm-icon-list-style">
									<li>
										<i class="fa fa-plus"></i>
										Aenean auctor
									</li>
									<li>
										<i class="fa fa-plus"></i>
										Et urna aliquam
									</li>
									<li>
										<i class="fa fa-plus"></i>
										Erat volutpat
									</li>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="wm-icon-list-style">
									<li>
										<i class="fa fa-star"></i>
										Aenean auctor
									</li>
									<li>
										<i class="fa fa-star"></i>
										Et urna aliquam
									</li>
									<li>
										<i class="fa fa-star"></i>
										Erat volutpat
									</li>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="wm-list-style">
									<li><span>Aenean auctor</span></li>
									<li><span>Et urna aliquam</span></li>
									<li><span>Erat volutpat</span></li>
								</ul>
							</div>
							<div class="col-md-2">
								<ol class="wm-list-style">
									<li><span>Aenean auctor</span></li>
									<li><span>Et urna aliquam</span></li>
									<li><span>Erat volutpat</span></li>
								</ol>
							</div>
						</div>-->
						<!--
						<div class="col-md-12">
							<div class="wm-classic-heading">
								<h2>Tables</h2>
							</div>
						</div>
						<div class="col-md-6">
							<div class="wm-table wm-typography-element">
								<ul class="wm-table-head">
									<li>Heading 1</li>
									<li>Heading 2</li>
									<li>Heading 3</li>
								</ul>
								<div class="wm-table-content">
									<ul>
										<li>Item 1</li>
										<li>Nemo enim ipsam</li>
										<li>$5.99</li>
									</ul>
									<ul>
										<li>Item 2</li>
										<li>Voluptatem quia</li>
										<li>$5.99</li>
									</ul>
									<ul>
										<li>Item 3</li>
										<li>Sit aspernatur aut</li>
										<li>$5.99</li>
									</ul>
									<ul>
										<li>Total</li>
										<li>Aut fugit sed quia</li>
										<li>$5.99</li>
									</ul>
								</div>
							</div>
						</div>-->
						<!--
						<div class="col-md-6">
							<div class="wm-table-horizontal">
								<ul class="wm-table-head">
									<li>Heading 1</li>
									<li>Heading 2</li>
									<li>Heading 3</li>
									<li>Total</li>
								</ul>
								<div class="wm-table-content">
									<ul>
										<li>Item 1</li>
										<li>Nemo enim ipsam</li>
										<li>$5.99</li>
										<li>$5.99</li>
									</ul>
								</div>
							</div>
						</div>-->
						<!--
						<div class="col-md-12">
							<div class="wm-classic-heading">
								<h2>Forms</h2>
							</div>
						</div>
						<div class="col-md-12">
							<div class="wm-form-wrap wm-typography-element">
								<div class="row">
									<div class="col-md-6">
										<ul class="wm-form-listing">
											<li class="wm-label-sec">Text</li>
											<li><input type="text"></li>
											<li class="wm-label-sec">Radio</li>
											<li>
												<div class="wm-select-radio">
													<input type="checkbox" name="ca" id="c13">
													<label for="c13"><span></span>  Radio 1</label>
						                        </div>
						                        <div class="wm-select-radio">
													<input type="checkbox" name="ca" id="c14">
													<label for="c14"><span></span>  Radio 1</label>
						                        </div>
											</li>											
											<li class="wm-label-sec">Checkbox</li>
											<li>
												<div class="wm-select-checkbox">
													<input type="checkbox" name="ca" id="c11">
													<label for="c11"><span></span>  Check 1</label>
						                        </div>
						                        <div class="wm-select-checkbox">
													<input type="checkbox" name="ca" id="c12">
													<label for="c12"><span></span>  Check 2</label>
						                        </div>
											</li>
											<li class="wm-label-sec">Select</li>
											<li>
												<div class="wm-select">
													<select>
														<option>select</option>
														<option>select</option>
														<option>select</option>
														<option>select</option>
													</select>
												</div>
											</li>
											<li class="wm-label-sec">Text Area</li>
											<li><textarea></textarea></li>
											<li class="wm-label-sec">Input with warning</li>
											<li><input class="warning-input" type="text"></li>
											<li class="wm-label-sec">Input with error</li>
											<li><input class="error-input" type="text"></li>
											<li class="wm-label-sec">Input with info</li>
											<li><input class="info-input" type="text"></li>
											<li class="wm-label-sec">Input with success</li>
											<li><input class="success-input" type="text"></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="wm-form-listing wm-form-listing-section">
											<li class="wm-label-sec">Text</li>
											<li><input type="text"></li>
											<li class="wm-label-sec">Radio</li>
											<li>
												<div class="wm-select-radio">
													<input type="checkbox" name="ca" id="c15">
													<label for="c15"><span></span>  Radio 1</label>
						                        </div>
						                        <div class="wm-select-radio">
													<input type="checkbox" name="ca" id="c16">
													<label for="c16"><span></span>  Radio 1</label>
						                        </div>
											</li>											
											<li class="wm-label-sec">Checkbox</li>
											<li>
												<div class="wm-select-checkbox">
													<input type="checkbox" name="ca" id="c17">
													<label for="c17"><span></span>  Check 1</label>
						                        </div>
						                        <div class="wm-select-checkbox">
													<input type="checkbox" name="ca" id="c18">
													<label for="c18"><span></span>  Check 2</label>
						                        </div>
											</li>
											<li class="wm-label-sec">Select</li>
											<li>
												<div class="wm-select">
													<select>
														<option>select</option>
														<option>select</option>
														<option>select</option>
														<option>select</option>
													</select>
												</div>
											</li>
											<li class="wm-label-sec">Text Area</li>
											<li><textarea></textarea></li>
											<li class="wm-2column"><span>Input with warning</span><input class="warning-input" type="text"></li>											
											<li class="wm-2column"><span>error-input</span><input class="error-input" type="text"></li>											
											<li class="wm-2column"><span>info-input</span><input class="info-input" type="text"></li>											
											<li class="wm-2column"><span>success-input</span><input class="success-input" type="text"></li>
										</ul>
									</div>
								</div>
							</div>
						</div>-->
						<!--
						<div class="col-md-12">
							<div class="wm-title-typoelements">
								<h2>Pricing <span>Plans</span></h2>
							</div>
						</div>
						<div class="col-md-12">
							<div class="wm-pricesplan wm-typography-element">
								<ul class="row">
									<li class="col-md-3">
										<div class="wm-price-plans">
											<h2>Start</h2>
											<span>$15.99/month</span>
											<ul>
												<li>
													<i class="wmicon-check"></i>
													Mauris malesuada
												</li>
												<li>
													<i class="wmicon-check"></i>
													Augue id massa												
												</li>
												<li>
													<i class="wmicon-check wm-plan"></i>
													Accumsan, at lobortis												
												</li>
												<li>
													<i class="wmicon-check wm-plan"></i>
													Cras ac diam non felisum												
												</li>
												<li>
													<i class="wmicon-check wm-plan"></i>
													Vestibulum cresciam												
												</li>											
											</ul>
											<a class="wm-buyplan" href="#">
												<i class="wmicon-shop"></i>
												Buy plan											
											</a>
										</div>
									</li>
									<li class="col-md-3">
										<div class="wm-price-plans">
											<h2>pro</h2>
											<span>$19.99/month</span>
											<ul>
												<li>
													<i class="wmicon-check"></i>
													Mauris malesuada
												</li>
												<li>
													<i class="wmicon-check"></i>
													Augue id massa												
												</li>
												<li>
													<i class="wmicon-check"></i>
													Accumsan, at lobortis												
												</li>
												<li>
													<i class="wmicon-check wm-plan"></i>
													Cras ac diam non felisum												
												</li>
												<li>
													<i class="wmicon-check wm-plan"></i>
													Vestibulum cresciam												
												</li>											
											</ul>
											<a class="wm-buyplan" href="#">
												<i class="wmicon-shop"></i>
												Buy plan											
											</a>
										</div>
									</li>		
									<li class="col-md-3">
										<div class="wm-price-plans">
											<h2>ultimate</h2>
											<span>$25.99/month</span>
											<ul>
												<li>
													<i class="wmicon-check"></i>
													Mauris malesuada
												</li>
												<li>
													<i class="wmicon-check"></i>
													Augue id massa												
												</li>
												<li>
													<i class="wmicon-check"></i>
													Accumsan, at lobortis												
												</li>
												<li>
													<i class="wmicon-check"></i>
													Cras ac diam non felisum												
												</li>
												<li>
													<i class="wmicon-check wm-plan"></i>
													Vestibulum cresciam												
												</li>											
											</ul>
											<a class="wm-buyplan" href="#">
												<i class="wmicon-shop"></i>
												Buy plan											
											</a>
										</div>
									</li>
									<li class="col-md-3">
										<div class="wm-price-plans">
											<h2>diamond</h2>
											<span>$35.99/month</span>
											<ul>
												<li>
													<i class="wmicon-check"></i>
													Mauris malesuada
												</li>
												<li>
													<i class="wmicon-check"></i>
													Augue id massa												
												</li>
												<li>
													<i class="wmicon-check"></i>
													Accumsan, at lobortis												
												</li>
												<li>
													<i class="wmicon-check"></i>
													Cras ac diam non felisum												
												</li>
												<li>
													<i class="wmicon-check"></i>
													Vestibulum cresciam												
												</li>											
											</ul>
											<a class="wm-buyplan" href="#">
												<i class="wmicon-shop"></i>
												Buy plan											
											</a>
										</div>
									</li>
								</ul>
							</div>							
						</div>-->
						<!--
						<div class="col-md-6">
							<div class="wm-title-typoelements">
								<h2>Promo <span>Box</span></h2>
							</div>						
							<div class="wm-promo-box wm-typography-element">
								<div class="wm-promo-box-text">
									<h2>University Course</h2>
									<span class="wm-save">
										<i class="fa fa-heart" aria-hidden="true"></i>
										Save 25%
									</span>
									<span>$39.00 <small>$49.00</small></span>																	
								</div>
								<p>It is a long established fact that a reader will be distracted by the read able content of a page when looking at its layout. </p>
								<a class="read-more" href="#">read more</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="wm-message wm-typography-element">
								<div class="wm-title-typoelements">
									<h2>Message <span>Alerts</span></h2>
								</div>	
								<div class="message alert error-message" >
									<button class="close" data-dismiss="alert">
										<i class="fa fa-times-circle"></i>
									</button>
									<p>Error! This would be an error message.</p>
								</div>	
								<div class="message information-message">
									<i class="fa fa-info-circle"></i>
									<p>Information! This would be an information message.</p>
								</div>									
								<div class="message caution-message">
									<i class="fa fa-warning"></i>
									<p>Caution! This would be a caution message.</p>
								</div>
								<div class="message success-message">
									<i class="fa fa-check-circle"></i>
									<p>Success! This would be a successful message.</p>
								</div>
							</div>
						</div>-->
						<!--
						<div class="col-md-12">
							<div class="wm-callaction-two-typo">
								<span class="wm-typo-transparents-color"></span>
								<div class="wm-callaction-typo-text">
									<h2>We’re interested in hearing from you!</h2>
									<a href="#">contact us today</a>
								</div>								
							</div>
						</div>-->
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->


@stop