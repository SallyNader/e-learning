@extends('master')
@section('content')











<div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>جميع الدورات</h1> 
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
                      
                            <div class="widget widget_check-box widget_scroll-box" style="text-align: center;">
                                <h5><strong>القسم</strong> </h5>
                                <ul>
                                    <li>
                                        
                                        <label for="type1">
                                            <span></span>
                                       <a href="{{route('course.index')}}"> جميع الكورسات</a>   
                                        </label>
                                    </li>
                                   
                                   
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                   @unless(empty($categories))
                                   @foreach($categories as $c)
                                    <li >
                                        
                                        <label for="type13">
                                            <span></span>
                                        <a href="{{route('category.show',$c->ca_id)}}"> {{$c->ca_name}}</a>   
                                        </label>
                                    </li>

                                   @endforeach
                                    @endunless                                </ul>
                            </div>
                            <div class="widget widget_check-box">
                             <!--   <h5>Search By Price</h5>
                                <div class="wm-range-slider">
                                    <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 60%;"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span>
                                    </div>
                                    <form>
                                          <input id="amount" type="text" readonly="" value="$59">
                                          <input type="submit" value="Clear Filters">
                                    </form>
                                </div>-->
                            </div>
                            <div class="widget widget_check-box">

                            <!--
                                    <h5>Search By Availability</h5>
                                <ul>    
                                    <li>
                                        <input id="avail1" type="checkbox">
                                        <label for="avail1">
                                            <span></span>
                                            Current
                                        </label>
                                    </li>
                                    <li>
                                        <input id="avail2" type="checkbox">
                                        <label for="avail2">
                                            <span></span>
                                            Upcoming
                                        </label>
                                    </li>
                                    <li>
                                        <input id="avail3" type="checkbox">
                                        <label for="avail3">
                                            <span></span>
                                            Self-Placed
                                        </label>
                                    </li>
                                    <li>
                                        <input id="avail4" type="checkbox">
                                        <label for="avail4">
                                            <span></span>
                                            Arhived
                                        </label>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="widget widget_check-box">

                            <!--
                                    <h5>Search By Level</h5>
                                <ul>
                                    <li>
                                        <div class="wm-level-checkbox">
                                            <input id="level1" type="checkbox">
                                            <label for="level1">
                                                <span></span>
                                                Introductory
                                            </label>
                                        </div>
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width:30%"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-level-checkbox">
                                            <input id="level2" type="checkbox">
                                            <label for="level2">
                                                <span></span>
                                                Intermediate
                                            </label>
                                        </div>    
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width:65%"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-level-checkbox">
                                            <input id="level3" type="checkbox">
                                            <label for="level3">
                                                <span></span>
                                                Advanced
                                            </label>
                                        </div>    
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width:100%"></span>
                                        </div>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="widget widget_check-box widget_scroll-box">
                                  <!--  <h5>Search By Language</h5>
                                <ul>    
                                    <li>
                                        <input id="land1" type="checkbox">
                                        <label for="land1">
                                            <span></span>
                                            Chinese / Mandarin
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land2" type="checkbox">
                                        <label for="land2">
                                            <span></span>
                                            Spanish
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land3" type="checkbox">
                                        <label for="land3">
                                            <span></span>
                                            English / U.S Spoken
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land4" type="checkbox">
                                        <label for="land4">
                                            <span></span>
                                            Italian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land5" type="checkbox">
                                        <label for="land5">
                                            <span></span>
                                            French
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land6" type="checkbox">
                                        <label for="land6">
                                            <span></span>
                                            German
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land7" type="checkbox">
                                        <label for="land7">
                                            <span></span>
                                            Russian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land8" type="checkbox">
                                        <label for="land8">
                                            <span></span>
                                            Arabic / Egyptian Spoken
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land9" type="checkbox">
                                        <label for="land9">
                                            <span></span>
                                            Italian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land10" type="checkbox">
                                        <label for="land10">
                                            <span></span>
                                            French
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land11" type="checkbox">
                                        <label for="land11">
                                            <span></span>
                                            German
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land12" type="checkbox">
                                        <label for="land12">
                                            <span></span>
                                            Russian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land13" type="checkbox">
                                        <label for="land13">
                                            <span></span>
                                            Arabic / Egyptian Spoken
                                        </label>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="widget widget_check-box">
                                  <!--  <h5>Search By Duration</h5>
                                <ul>    
                                    <li>
                                        <input id="duration1" type="checkbox">
                                        <label for="duration1">
                                            <span></span>
                                            Under 1 hr
                                        </label>
                                    </li>
                                    <li>
                                        <input id="duration2" type="checkbox">
                                        <label for="duration2">
                                            <span></span>
                                            1hr - 1hr 30mins
                                        </label>
                                    </li>
                                    <li>
                                        <input id="duration3" type="checkbox">
                                        <label for="duration3">
                                            <span></span>
                                            2 hrs
                                        </label>
                                    </li>
                                    <li>
                                        <input id="duration4" type="checkbox">
                                        <label for="duration4">
                                            <span></span>
                                            2 hrs - 3hrs
                                        </label>
                                    </li>
                                </ul>-->
                            </div>
                        </aside>
                        
                        <div class="col-md-9" style="text-align: right;">
                    
                            <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                                <ul class="row">
                                @unless(empty($courses))
                                @foreach($courses as $c)
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="{{route('course.show',$c->c_id)}}"><img src="{{$c->image}}" alt=""> <span class="wm-popular-hover"> <small>تفاصيل الدورة</small> </span> </a>
                                                <figcaption>
                                                   @unless(empty($c->teacher))
                                                    <img style="width: 67px;height: 65px" src="extra-images/{{$c->teacher->path}}" alt="">
                                                    @endunless

                                                    @unless(empty($c->teacher))
                                                    <h6><a href="#">{{$c->teacher->t_name}}</a></h6>

                                                    @endunless
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6 style="text-align: right;"><a href="#"><strong>{{$c->c_name}}</strong></a></h6>
                                                <p>{{$c->disc,0,90}}...</p>
                                              
                                        @if(Auth::check())
                                                <div class="wm-courses-price"> <span>${{$c->price}}</span> </div>
                                                @endif
                                               <!-- <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                                </ul>-->
                                            </div>
                                        </div>
                                    </li>
                                    
                                    
                                 @endforeach
                                 @endunless
                                   
                                </ul>
                            </div>
                            <div class="wm-pagination">
                                <ul>
                                    <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> السابق</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>...</li>
                                    <li><a href="#">18</a></li>
                                    <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i>التالي</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->







@stop