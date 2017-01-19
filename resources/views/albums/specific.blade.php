@extends('master')

@section('content')






 <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1> صور ألبوم {{$album->b_name}}</h1> 
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
                            <div class="wm-event wm-latest-event wm-filter-event" style="text-align: right;margin-left: 470px">
                                <ul class="row">
                                    
                                     @unless(empty($album))

                                        @foreach($album->images as $image)
                                                                        <li class="col-md-3 wordpress">
                                        <figure><a class="fancybox-buttons" data-fancybox-group="button" href="../extra-images/{{$image->path}}"><img src="../../public/extra-images/{{$image->path}}" alt="" style="width: 1000px;height:250px" > </a></figure>


                                       
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color c" style="color:#b99663
 ">{{$image->i_name}}</a></h6>
                                            <time datetime="2008-02-14 20:00">{{ date('F d, Y', strtotime($image->created_at)) }} </time>
                                            <p class="c">{{$image->i_disc}}</p>
                                           
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