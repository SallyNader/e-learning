  <!--// Mini Header \\-->
        
@extends('master')

@section('content')



        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Our Events</h1> 
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="index-2.html">Pages</a></li>
                                <li><a href="index-2.html">Events</a></li>
                                <li>Single Post</li>
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
                            <figure class="wm-event-countdown"><img src="extra-images/event-detail-1.jpg" alt="">
                                <figcaption>
                                    <h2>Upcoming Event</h2>
                                    <div id="wm-countdown"></div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <!--// Editore \\-->
                            <div class="wm-detail-editore wm-custom-space">
                                <h3>Bodleian Treasures: 24 Pairs</h3>
                                <img class="wm-sharethumb" src="extra-images/share-img.png" alt="">
                                <p>An exhibition displaying a selection of the Bodleian Libraries most magnificent items. It features rare and renowned items including Tolkien's illustrations from The Hobbit, Mary Shelley's Frankenstein.</p>
                                <p><strong>The 'most expensive' printed book in the world and the venerated Shikshapatri.</strong></p>
                                <p>The exhibition presents some of the best of the 12 million items in the Bodleian's collections and uniquely displays these treasures in 24 pairs. Familiar icons of the Libraries' extraordinary holdings are shown alongside the less familiar, opening new avenues into the wealth of the Bodleian's famous collections.</p>
                                <div class="clearfix"></div>
                                <span>Into the wealth of the Bodleian's famous collections.</span>
                                <ul class="wm-list-style-icon">
                                    <li><i class="fa fa-circle"></i> Bodleian's collections and uniquely displays these treasures in 24 pairs.</li>
                                    <li><i class="fa fa-circle"></i> Familiar icons of the Libraries' extraordinary holdings are shown alongside the less familiar.</li>
                                    <li><i class="fa fa-circle"></i> Opening new avenues into the wealth of the Bodleian's famous collections.</li>
                                </ul>
                            </div>
                            <!--// Editore \\-->
                            <!--// Lesson \\-->
                            <div class="wm-lesson-tabs wm-tabs-style">

                                <!-- Nav tabs -->
                                <ul class="tabs-nav" role="tablist">
                                    <li role="presentation" class="active"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">Day1</a></li>
                                    <li role="presentation"><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">Day2</a></li>
                                    <li role="presentation"><a href="#day3" aria-controls="day3" role="tab" data-toggle="tab">Day3</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="day1">
                                        <ul class="wm-lesson-tabnav" role="tablist">
                                            <li role="presentation" class="active"><a href="#halla" aria-controls="halla" role="tab" data-toggle="tab">Hall A</a></li>
                                            <li role="presentation"><a href="#hallb" aria-controls="hallb" role="tab" data-toggle="tab">Hall b</a></li>
                                            <li role="presentation"><a href="#hallc" aria-controls="hallc" role="tab" data-toggle="tab">Hall c</a></li>
                                            <li role="presentation"><a href="#halld" aria-controls="halld" role="tab" data-toggle="tab">Hall d</a></li>
                                        </ul>
                                        <div role="tabpanel" class="tab-lesson active" id="halla">
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
                                                        <span>Professor</span>
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
                                                        <a href="#">James R. Allen</a>
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
                                        <div role="tabpanel" class="tab-lesson" id="hallb">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list3.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">James R. Allen</a>
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
                                        <div role="tabpanel" class="tab-lesson" id="hallc">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">James R. Allen</a>
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
                                            <li role="presentation" class="active"><a href="#hall1" aria-controls="hall1" role="tab" data-toggle="tab">Hall A</a></li>
                                            <li role="presentation"><a href="#hall2" aria-controls="hall2" role="tab" data-toggle="tab">Hall b</a></li>
                                            <li role="presentation"><a href="#hall3" aria-controls="hall3" role="tab" data-toggle="tab">Hall c</a></li>
                                            <li role="presentation"><a href="#hall4" aria-controls="hall4" role="tab" data-toggle="tab">Hall d</a></li>
                                        </ul>
                                        <div role="tabpanel" class="tab-lesson active" id="hall1">  
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">James R. Allen</a>
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
                                                        <a href="#">James R. Allen</a>
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
                                        <div role="tabpanel" class="tab-lesson" id="hall2">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list3.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">James R. Allen</a>
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
                                        <div role="tabpanel" class="tab-lesson" id="hall3">
                                            <div class="wm-lesson-list">
                                                <figure><img src="extra-images/lesson-list2.jpg" alt="">
                                                    <figcaption>
                                                        <a href="#">James R. Allen</a>
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
                                                        <a href="#">James R. Allen</a>
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
                                                        <a href="#">James R. Allen</a>
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
                                                        <a href="#">James R. Allen</a>
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
                            <!--// Lesson \\-->
                            <div class="wm-section-title-two"> <h2>Event <span>Sponsors</span></h2> </div>
                            <div class="wm-list-partner">
                                <ul class="gallery">
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"><img src="extra-images/university-partners-1.png" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-2.png"><img src="extra-images/university-partners-2.png" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-3.png"><img src="extra-images/university-partners-3.png" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-4.png"><img src="extra-images/university-partners-4.png" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-5.png"><img src="extra-images/university-partners-5.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="wm-section-title-two"> <h2>Event <span>Speakers</span></h2> </div>
                            <div class="wm-our-professors">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="#"><img src="extra-images/our-professors-1.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#">Read More</a>                                           
                                            </figcaption>                                           
                                        </figure>
                                        <div class="wm-team-info">
                                            <h5><a href="#">Chester J. Graham</a></h5>                                      
                                            <div class="wm-icon">
                                                <a class="wmicon-social5" href="#"></a>
                                                <a class="wmicon-social4" href="#"></a>
                                                <a class="wmicon-logo" href="#"></a>
                                            </div>
                                            <span>Law DEPARTMENT</span>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="#"><img src="extra-images/our-professors-2.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#">Read More</a>                                           
                                            </figcaption>                                           
                                        </figure>
                                        <div class="wm-team-info">
                                            <h5><a href="#">Sophie R. Ray</a></h5>                                      
                                            <div class="wm-icon">
                                                <a class="wmicon-social5" href="#"></a>
                                                <a class="wmicon-social4" href="#"></a>
                                                <a class="wmicon-logo" href="#"></a>
                                            </div>
                                            <span>drama DEPARTMENT</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="wm-section-title-two"> <h2>Event <span>Pricing Plans</span></h2> </div>
                            <div class="wm-pricesplan wm-typography-element">
                                <ul class="row">
                                    <li class="col-md-4">
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
                                    <li class="col-md-4">
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
                                    <li class="col-md-4">
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
                                </ul>
                            </div>
                            <div class="wm-section-title-two"> <h2>FAQ’s</h2> </div>
                            <div class="wm-faq">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls=" collapseOne">
                                                When are Mid-Year Reports due?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How do I track the status of my application?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree"> 
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                               Does Enroll work with third-party agents?
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                               Are Halal dining options available for students?
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                               Where do transfer students live?
                                               </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--// Register Now \\-->
                            <div class="wm-section-title-two"> <h2>Register <span>Now</span></h2> </div>
                            <div class="wm-event-register-list">
                                <div class="wm-register-title">
                                    <h6>Ticket Information</h6>
                                    <span>Powered By: <img src="extra-images/event-register-thumb.png" alt=""></span>
                                </div>
                                <div class="event-register-wrap">
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                            <li>Ticket Type</li>
                                            <li>sales end</li>
                                            <li>price</li>
                                            <li>fee</li>
                                            <li>quantity</li>
                                        </ul>
                                        <ul class="wm-simple-list">
                                            <li>Package 1</li>
                                            <li>Jan 20, 2016</li>
                                            <li>$20.99</li>
                                            <li>$1.99</li>
                                            <li>
                                                <button id="wm-dec"><i class="fa fa-caret-left"></i></button>
                                                <input type="text" name="qty" value="0">
                                                <button id="wm-inc"><i class="fa fa-caret-right"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="event-register-inner">
                                        <ul class="wm-simple-list">
                                            <li>Package 1</li>
                                            <li>Jan 20, 2016</li>
                                            <li>$20.99</li>
                                            <li>$1.99</li>
                                            <li>
                                                <button id="wm-decs"><i class="fa fa-caret-left"></i></button>
                                                <input type="text" name="qtys" value="0">
                                                <button id="wm-incs"><i class="fa fa-caret-right"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="event-register-inner">
                                        <ul class="wm-simple-list">
                                            <li>Package 1</li>
                                            <li>Jan 20, 2016</li>
                                            <li>$20.99</li>
                                            <li>$1.99</li>
                                            <li>
                                                <button id="wm-decd"><i class="fa fa-caret-left"></i></button>
                                                <input type="text" name="qtyd" value="0">
                                                <button id="wm-incd"><i class="fa fa-caret-right"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wm-event-cardlist">
                                        <ul class="wm-events-cards">
                                            <li><a href="#"><img src="extra-images/event-visa1.png" alt=""></a></li>
                                            <li><a href="#"><img src="extra-images/event-visa2.png" alt=""></a></li>
                                            <li><a href="#"><img src="extra-images/event-visa3.png" alt=""></a></li>
                                            <li><a href="#"><img src="extra-images/event-visa4.png" alt=""></a></li>
                                        </ul>
                                        <a href="#" class="wm-plain-btn-style"><i class="wmicon-shop"></i> Buy plan</a>
                                    </div>
                                </div>
                            </div>
                            <!--// Register Now \\-->
                            <!--// Related Events \\-->
                            <div class="wm-section-title-two"> <h2>You Might <span>Also Like</span></h2> </div>
                            <div class="wm-event wm-latest-event">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="extra-images/latest-event-1.png" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Out of This World: The Family Fun Day</a></h6>
                                            <time datetime="2008-02-14 20:00">21/04/2016 <span><i class="wmicon-clock"></i> 8:00am - 10:30am</span></time>
                                            <p>Join us for outer-space themed games, prizes, science & talks about careers in the UK.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="extra-images/latest-event-2.png" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Shakespeare at Balliol in those five acts</a></h6>
                                            <time datetime="2008-02-14 20:00">19/04/2016 <span><i class="wmicon-clock"></i> 8:00am - 10:30am</span></time>
                                            <p>A.C. Bradley and J.C. Maxwell get down to serious criticism; another Balliol writer launches the.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="extra-images/latest-event-3.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Modern ephemera sit alongside 400-year-old rolls</a></h6>
                                            <time datetime="2008-02-14 20:00">18/04/2016 <span><i class="wmicon-clock"></i> 9:00am - 11:00am</span></time>
                                            <p>Events listed here are open to every one. Whether you want to listen to a lecture, learn a new skill.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Related Events \\-->
                        </div>
                        <aside class="col-md-3">
                            <div class="wm-event-options">
                                <ul>
                                    <li>
                                        <i class="wmicon-time2"></i>
                                        <span>Date:</span>
                                        <p>23 May to 17 June</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-clock2"></i>
                                        <span>time:</span>
                                        <p>9:00am - 12:30pm</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-location"></i>
                                        <span>Location:</span>
                                        <p>3252 Hornor Avenue Claremore, OK 7401</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-folder-open-o"></i>
                                        <span>Event category:</span>
                                        <p>Open House</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-black"></i>
                                        <span>organizer:</span>
                                        <p>Jennifer Horse</p>
                                    </li>
                                    <li>
                                        <i class="wmicon-technology4"></i>
                                        <span>Phone:</span>
                                        <p>(012) 345-6789</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="wm-buyticket-section">
                                <h2>Buy Ticket</h2>
                                <ul>
                                    <li><a href="#"><i class="wmicon-social7"></i> 234 Students</a></li>
                                    <li><a href="#"><i class="wmicon-clock2"></i> Duration: 1hr30mins</a></li>
                                    <li><a href="#"><i class="wmicon-book2"></i> 14 Lectures</a></li>
                                    <li><a href="#"><i class="wmicon-location"></i> Campus L2</a></li>
                                    <li><a href="#"><i class="wmicon-social7"></i> Intermediate</a></li>
                                    <li><a href="#"><i class="wmicon-technology"></i> English Language</a></li>
                                    <li><span><i class="wmicon-tag2"></i> 45.99</span></li>
                                </ul>
                                <span class="wm-paytitle">Pay with:</span>
                                <img src="extra-images/paypal.png" alt="">
                                <div class="clearfix"></div>
                                <a class="wm-plain-btn-style" href="#"><i class="wmicon-shop"></i> purchase ticket</a>
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
@stop