@extends('master')

@section('content')

















<!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>جميع الألبومات</h1> 
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
                        <center> 
                        <div class="wm-our-professors">
                            <ul class="row" >


                            @unless(empty($albums))

                            @foreach($albums as $t)
                                <li class="col-md-4 wordpress"  >
                                    <figure  style=";margin-right: 170px">
                                        <a href="#"><img src="extra-images/{{$t->b_cover}} " alt=""></a>
                                        <figcaption>
                                            <a href="{{route('album.show',$t->b_id)}}">لمشاهدة صور الألبوم</a>                                         
                                        </figcaption>                                           
                                    </figure>
                                    <div class="wm-latest-event-text" style=";margin-right: 170px">
                                           
                                       
                                    <div class="wm-team-info" style="text-align: left;">
                                        <h5><a href="#"></a>{{$t->b_name}}</h5>                                     
                                        <br>
                                        <p style="color:#ffb84d" ></p>
                                        
                                        <time datetime="2008-02-14 20:00">{{ date('F d, Y', strtotime($t->created_at)) }}</time>
                                    </div> </div>
                                </li>

                                @endforeach
                                
                                @endunless
                                
                                
                                
                                
                                
                                
                            </ul>
                        </div>  </center>
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