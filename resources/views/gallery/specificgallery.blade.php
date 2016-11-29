@extends('master')

@section('content')






 <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1> صور {{$albumName}}</h1> 
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="index-2.html">Pages</a></li>
                                <li>Events</li>
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
                        
                        <div class="col-md-12">
                            <div class="wm-filterable-link">
                                
                            </div>
                            <div class="wm-event wm-latest-event wm-filter-event" style="text-align: right">
                                <ul class="row">
                                    
                                     @unless(empty($images))

                                        @foreach($images as $image)
                                                                        <li class="col-md-3 wordpress">
                                        <figure><img src="../../public/extra-images/{{$image->path}}" alt="" style="width: 300px;height:250px" > <span class="wm-event-transparent-hover wm-bgcolor"></span></figure>


                                       
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">{{$image->i_name}}</a></h6>
                                            <time datetime="2008-02-14 20:00">17/04/2016 <span><i class="wmicon-clock"></i> 9:30am - 11:15am</span></time>
                                            <p>{{$image->i_disc}}..</p>
                                           
                                        </div>

                                    </li>

                                    
                                     @endforeach

                                        @endunless
                                    
                                </ul>
                            </div>
                            <div class="wm-pagination">
                                <ul>
                                    <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>...</li>
                                    <li><a href="#">18</a></li>
                                    <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->







@stop