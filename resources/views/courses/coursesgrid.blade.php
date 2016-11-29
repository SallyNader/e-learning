
@extends('master')
@section('content')


<div class="wm-categories-miniheader">
            <span class="wm-blue-transparent"></span>
            <div class="container">
                 <div class="row">
                      <div class="col-md-12">
                           <div class="wm-mini-title">
                                <h1>Shop Categories</h1>    
                           </div>
                           <div class="wm-breadcrumb">
                                <ul>
                                     <li><a href="index-2.html">Home</a></li>
                                     <li><a href="index-2.html">Shop</a></li>
                                     <li>Categories Grid</li>
                                </ul>
                           </div>      
                      </div>
                 </div>
            </div>    
       </div>
        <!--// Mini Header \\-->

        <!--// Header \\-->

        <!--// Main Content \\-->
        <div class="wm-main-content ">

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">   

                        <div class="col-md-12">
                            <div class="row">
                                <aside class="col-md-3">
                                    <div class="widget wm-search-course">
                                        <h3 class="wm-short-title wm-color">Find Your Course</h3>
                                        <p>Find your course here:</p>
                                        <form>
                                            <ul>
                                                <li>
                                                    <div class="wm-radio">
                                                        <div class="wm-radio-partition">
                                                            <input id="male" type="radio" name="gender" value="male">
                                                            <label for="male">by ID</label>
                                                        </div>
                                                        <div class="wm-radio-partition">
                                                            <input id="female" type="radio" name="gender" value="female">
                                                            <label for="female">by name</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                                <li>
                                                    <div class="wm-apply-select">
                                                        <select>
                                                            <option>Category</option>
                                                            <option>Category</option>
                                                            <option>Category</option>
                                                            <option>Category</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li> <input type="submit" value="Search course"> </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="widget widget_check-box widget_scroll-box">
                                        <h5>Search By Type</h5>
                                        <ul>
                                            <li>
                                                <input id="type1" type="checkbox">
                                                <label for="type1">
                                                    <span></span>
                                                    All Courses
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type2" type="checkbox">
                                                <label for="type2">
                                                    <span></span>
                                                    Chemistry
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type3" type="checkbox">
                                                <label for="type3">
                                                    <span></span>
                                                    Classical Archaeology 
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type4" type="checkbox">
                                                <label for="type4">
                                                    <span></span>
                                                    Classics & English
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type5" type="checkbox">
                                                <label for="type5">
                                                    <span></span>
                                                    Materials Science

                                                </label>
                                            </li>
                                            <li>
                                                <input id="type6" type="checkbox">
                                                <label for="type6">
                                                    <span></span>
                                                    Mathematics
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type7" type="checkbox">
                                                <label for="type7">
                                                    <span></span>
                                                    Physics & Philosophy
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type8" type="checkbox">
                                                <label for="type8">
                                                    <span></span>
                                                    Theology & Religion
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type9" type="checkbox">
                                                <label for="type9">
                                                    <span></span>
                                                    Classics & English
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type10" type="checkbox">
                                                <label for="type10">
                                                    <span></span>
                                                    Materials Science

                                                </label>
                                            </li>
                                            <li>
                                                <input id="type11" type="checkbox">
                                                <label for="type11">
                                                    <span></span>
                                                    Mathematics
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type12" type="checkbox">
                                                <label for="type12">
                                                    <span></span>
                                                    Physics & Philosophy
                                                </label>
                                            </li>
                                            <li>
                                                <input id="type13" type="checkbox">
                                                <label for="type13">
                                                    <span></span>
                                                    Theology & Religion
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget widget_check-box">
                                        <h5>Search By Price</h5>
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
                                        </div>
                                    </div>
                                    <div class="widget widget_check-box">
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
                                        </ul>
                                    </div>
                                    <div class="widget widget_check-box">
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
                                        </ul>
                                    </div>
                                    <div class="widget widget_check-box widget_scroll-box">
                                            <h5>Search By Language</h5>
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
                                        </ul>
                                    </div>
                                    <div class="widget widget_check-box">
                                            <h5>Search By Duration</h5>
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
                                        </ul>
                                    </div>
                                    <div class="widget widget_futurecourse">
                                            <h5>Featured Courses</h5>
                                        <ul>
                                            <li>
                                                <figure>
                                                    <a href="#">
                                                        <img alt="" src="extra-images/future-course-image-1.jpg">
                                                    </a>
                                                </figure>
                                                <div class="wm-futurecourse">
                                                    <div class="wm-futurecourse-info">
                                                        <h4>
                                                            <a href="#">Transdisciplinary Design</a>
                                                        </h4>
                                                        <small>$59.00</small>
                                                        <span>$39.00</span>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="wmicon-social7" aria-hidden="true"></i>
                                                                309
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="wmicon-social6" aria-hidden="true"></i>
                                                                19
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="#">
                                                        <img alt="" src="extra-images/future-course-image-1.jpg">
                                                    </a>
                                                </figure>
                                                <div class="wm-futurecourse">
                                                    <div class="wm-futurecourse-info">
                                                        <h4>
                                                            <a href="#">Advanced Landscape & Urbanism</a>
                                                        </h4>
                                                        <span>$69.00</span>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="wmicon-social7" aria-hidden="true"></i>
                                                                176
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="wmicon-social6" aria-hidden="true"></i>
                                                                23
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>        
                                        </ul>
                                    </div>
                                </aside>
                                <div class="col-md-9">
                                    <div class="wm-filter-box">
                                        <div class="wm-apply-select">
                                            <select>
                                                <option>By Category</option>
                                                <option>By Category</option>
                                                <option>By Category</option>
                                                <option>By Category</option>
                                            </select>
                                        </div>            
                                        <div class="wm-apply-select">
                                            <select>
                                                <option>Search By</option>
                                                <option>Search By</option>
                                                <option>Search By</option>
                                                <option>Search By</option>
                                            </select>
                                        </div>
                                        <div class="wm-normal-btn">
                                            <a href="#" class="active">Free</a>
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="wm-view-btn">
                                            <a href="#" class="wmicon-squares"></a>
                                            <a href="#" class="wmicon-signs active"></a>
                                        </div>
                                    </div>
                                    <div class="wm-shopgrid-sec">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-1.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-2.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img2.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-3.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img3.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-4.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img4.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-5.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img5.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-6.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img6.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-7.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img7.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-8.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img8.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-9.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img9.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-10.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img10.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-11.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img11.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-12.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img12.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-13.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img13.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-14.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img14.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
                                            <li class="col-md-4">
                                                <div class="wm-shop-grid">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/shop-gird-15.jpg" alt=""></a>
                                                    </figure>
                                                    <div class="wm-grid-tittle">
                                                        <a href="#">
                                                            <img src="extra-images/categories-tittle-img15.jpg" alt="">
                                                            Shelly T. Forrester
                                                        </a>
                                                    </div>
                                                    <div class="wm-grid-info">
                                                        <h6>Advanced Architectural Research</h6>
                                                        <span>$32.00</span>
                                                        <div class="wm-cart-button">
                                                            <a href="#">
                                                                <i class="wmicon-shop" aria-hidden="true"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </li>
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
                </div>
            </div>
            <!--// Main Section \\-->

        </div>
        <!--// Main Content \\-->
		<!--// Main Content \\-->
@stop