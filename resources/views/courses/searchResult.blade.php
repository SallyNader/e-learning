 @extends('master')
@section('content')




 <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>نتائج البحث</h1> 
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
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">



                            <div class="wm-lesson-tabs wm-tabs-style">

                          
                                <ul class="tabs-nav" role="tablist">
                                    <li role="presentation" class="active"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">نتائج البحث</a></li>
                                    <li role="presentation"><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">نتائج ذات صلة</a></li>
                                    <!--<li role="presentation"><a href="#day3" aria-controls="day3" role="tab" data-toggle="tab">Day3</a></li>-->
                                </ul>

                             
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="day1">
                                        <ul class="wm-lesson-tabnav" role="tablist">
                                            <li role="presentation" class="active"><a href="#halla" aria-controls="halla" role="tab" data-toggle="tab"></a></li>
                                            <!--
                                            <li role="presentation"><a href="#hallb" aria-controls="hallb" role="tab" data-toggle="tab">Hall b</a></li>
                                            <li role="presentation"><a href="#hallc" aria-controls="hallc" role="tab" data-toggle="tab">Hall c</a></li>
                                            <li role="presentation"><a href="#halld" aria-controls="halld" role="tab" data-toggle="tab">Hall d</a></li>-->
                                        </ul>
                                        <div role="tabpanel" class="tab-lesson active" id="halla">
                                        @if(count($getCourse)>0)
                                @foreach($getCourse as $c)
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/{{$c->teacher->profile_image}}" alt="">
                                                    <figcaption>
                                                        <a href="#">{{$c->teacher->t_name}}</a>
                                                        <span>{{$c->category->ca_name}}</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="{{route('offline.show',$c->c_id)}}">{{$c->c_name}}</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> {{$c->startClock}} - {{$c->endClock}}</time>
                                                    <p>{{$c->disc}}</p>
                                                    <span><i class="fa fa-bullhorn"></i> {{$c->branch}}</span>
                                                </div>
                                            </div>
                                              @endforeach


                                             @else


                                              <div class="wm-lesson-list">
                                                <figure><img src="extra-images/404-image.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#"></a>
                                                        <span></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="">لا يوجد نتائج</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> </time>
                                                    <p></p>
                                                    <span><i class="fa fa-bullhorn"></i> </span>
                                                </div>
                                            </div>
                                    @endif
                                
                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hallb">
                                  
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Barbara Martin</a>
                                                        <span>Speaker</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 2 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 10:15am - 11:30am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div role="tabpanel" class="tab-lesson" id="halld">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list1.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Brittany Porter</a>
                                                        <span>Assistant</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 1 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 9:00am - 10:00am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="day2">
                                        <ul class="wm-lesson-tabnav" role="tablist">
                                            <li role="presentation" class="active"><a href="#hall1" aria-controls="hall1" role="tab" data-toggle="tab"></a></li>
                                            <!--
                                            <li role="presentation"><a href="#hall2" aria-controls="hall2" role="tab" data-toggle="tab">Hall b</a></li>
                                            <li role="presentation"><a href="#hall3" aria-controls="hall3" role="tab" data-toggle="tab">Hall c</a></li>
                                            <li role="presentation"><a href="#hall4" aria-controls="hall4" role="tab" data-toggle="tab">Hall d</a></li>-->
                                        </ul>
                                        <div role="tabpanel" class="tab-lesson active" id="hall1">  
                                    
                                     
                                         @if(count($related)>0)
@foreach($related as $r)
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/{{$r->teacher->profile_image}}" alt="">
                                                    <figcaption>
                                                        <a href="#">{{$r->teacher->t_name}}</a>
                                                        <span>{{$r->category->ca_name}}</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="{{route('offline.show',$r->c_id)}}">{{$r->c_name}}</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> {{$r->startClock}} - {{$r->endClock}}</time>
                                                    <p>{{$r->disc}}</p>
                                                    <span><i class="fa fa-bullhorn"></i> {{$r->branch}}</span>
                                                </div>
                                            </div>
@endforeach


 @else


                                              <div class="wm-lesson-list">
                                                <figure><img src="extra-images/404-image.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#"></a>
                                                        <span></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="">لا يوجد نتائج</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> </time>
                                                    <p></p>
                                                    <span><i class="fa fa-bullhorn"></i> </span>
                                                </div>
                                            </div>
                                    @endif


                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hall2">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list3.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">hjhjh</a>
                                                        <span>Manager</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 3 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 11:45am - 12:55pm</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hall3">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">jhjh</a>
                                                        <span>Manager</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 3 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 11:45am - 12:55pm</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hall4">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list1.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Brittany Porter</a>
                                                        <span>Assistant</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 1 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 9:00am - 10:00am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="day3">
                                        <ul class="wm-lesson-tabnav" role="tablist">
                                            <li role="presentation" class="active"><a href="#hall5" aria-controls="hall5" role="tab" data-toggle="tab">Hall A</a></li>
                                            <li role="presentation"><a href="#hall6" aria-controls="hall6" role="tab" data-toggle="tab">Hall b</a></li>
                                            <li role="presentation"><a href="#hall7" aria-controls="hall7" role="tab" data-toggle="tab">Hall c</a></li>
                                            <li role="presentation"><a href="#hall8" aria-controls="hall8" role="tab" data-toggle="tab">Hall d</a></li>
                                        </ul>
                                        <div role="tabpanel" class="tab-lesson active" id="hall5">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list1.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Brittany Porter</a>
                                                        <span>Assistant</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 1 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 9:00am - 10:00am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Barbara Martin</a>
                                                        <span>Speaker</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 2 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 10:15am - 11:30am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list3.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">hjhjh</a>
                                                        <span>Manager</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 3 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 11:45am - 12:55pm</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hall6">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list3.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">gffg</a>
                                                        <span>Manager</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 3 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 11:45am - 12:55pm</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Barbara Martin</a>
                                                        <span>Speaker</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 2 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 10:15am - 11:30am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hall7">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">James R. Allenghfgh</a>
                                                        <span>Manager</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 3 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 11:45am - 12:55pm</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-lesson" id="hall8">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list1.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">Brittany Porter</a>
                                                        <span>Assistant</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-lesson-text">
                                                    <h2><a href="#">Day 1 - Lesson 1 (Hall A)</a></h2>
                                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 9:00am - 10:00am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis purus blandit, tris tique justo eget, porta tellus. Praesent non dignissim elit.</p>
                                                    <span><i class="fa fa-bullhorn"></i> Jerry B. Fegan, Deborah B. McBride</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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