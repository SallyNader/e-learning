@extends('master')
@section('content')











<div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>الدورات</h1> 
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
                                <h5> <strong>القسم</strong></h5>
                                <ul>
                                    <li>
                                        
                                        <label for="type1">
                                            <span></span>
                                       <a href=""> جميع الكورسات</a>   
                                        </label>
                                    </li>
                                   
                                   
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                   @unless(empty($categories))
                                   @foreach($categories as $c)
                                    <li>
                                        
                                        <label for="type13">
                                            <span></span>
                                        <a href="{{url('category/offline/'.$c->ca_id)}}"> {{$c->ca_name}}</a>   
                                        </label>
                                    </li>

                                   @endforeach
                                    @endunless                                </ul>
                            </div>
                            <div class="widget widget_check-box">
                                
                            </div>
                            <div class="widget widget_check-box">
                                    
                            </div>
                            <div class="widget widget_check-box">
                              
                            </div>
                            <div class="widget widget_check-box widget_scroll-box">
                  
                            </div>
                           
                        </aside>
                        
                        <div class="col-md-9">
                        
                            <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                                <ul class="row">
                                @unless(empty($category))
                                @foreach($category->offlines as $c)
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="{{route('offline.show',$c->c_id)}}"><img src="../../{{$c->image}}" alt=""> <span class="wm-popular-hover"> <small>تفاصيل الدورة</small> </span> </a>
                                                <figcaption>

                                                    <img style="width: 67px;height: 65px" src="../../extra-images/{{$c->teacher->path}}" alt="">
                                                    <h6><a href="#">{{$c->teacher->t_name}}</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#"><strong>{{$c->c_name}}</strong>  </a></h6>
                                                <p>{{$c->disc,0,90}}...</p>

                                                
                                                
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
                                    <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> التالي</a></li>
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