@extends('master')

@section('content')





<style type="text/css">
    
.c{



    font-size:110%;
}


</style>



    <!--     
        <div class="wm-main-banner" >
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-1.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-2.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-3.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-1.jpg')!!}" alt=""> </div> 
                </div>
                <div class="wm-banner-one-nav c" style="text-align: left">
                    <div class="wm-banner-one-nav-layer c" style="text-align: left;padding-bottom: : 60px;padding-left: 160px">
                        <h1>مركز القاهرة الإقليمي للتدريب و التحكيم</h1>
                        <p style="padding-top: 30px">تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمينتعيين محكمين تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين</p>
                        <a href="{{url('moreaboutcrc')}}" class="wm-banner-btn" tabindex="0" style="font-size: 90%">لمزيد من المعلومات عن المركز</a>
                       
                        
                    </div>
                 
                   
                </div>

            </div>

        </div>
        -->
    <!--// Main Banner \\-->
        <div class="wm-main-banner" >
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                   <!--  <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-2.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-3.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div> -->
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer"   >
                        <h1 style="padding-left:90px">مركز القاهرة الإقليمي للتدريب و التحكيم</h1>
                        <p class="c"  style="margin-left:90px" >تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين تقديم الدعم والاستشار</p>
                       <a  style="margin-left:90px" href="{{url('moreaboutcrc')}}" class="wm-banner-btn c" tabindex="0" style="font-size: 90%">لمزيد من المعلومات عن المركز</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1 style="margin-left:180px">مميزات العضوية لدينا</h1>
                        <p class="c" style="margin-left:90px"> تباشر اللجنة مهامها من تعيين محكمين تقديم الدعم والاستشار تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية</p>
                        <a style="margin-left:90px;background-color: #b99663;color: white " href="{{url('momyzat')}}" class="wm-banner-btn c">لمعرفة المزيد عن مميزات العضوية</a>
                    </div>
                  <!--   <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Research & Business</h1>
                        <p>The scientific community nominates CRISPR System, based on research developed at the UA.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div> -->
                   <!--  <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div> -->
                </div>
            </div>

        </div>
        <!--// Main Banner \\-->

           <!--// Main Section \\-->
            <div class="wm-main-section wm-latest-event-full c"  >
                <div class="container" >
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three"></small>
                                    <span class="wm-color-three" style="margin-left: 180px">أحدث الدورات</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="wm-event wm-event-medium">
                                <ul class="row">
                                    
                                   @unless(empty($latestCourse))
                                   @foreach($latestCourse as $l)
                                    <li class="col-md-12">
                                        <div class="wm-event-medium-wrap">
                                            <figure><a href="{{route('offline.show',$l->c_id)}}"><img src="{{$l->image}}" alt="" style="height: 150px"></a> </figure>
                                            <div class="wm-eventmedium-text">
                                                <h5 style="text-align:right;padding-left: 60px"><a href="{{route('offline.show',$l->c_id)}}">{{$l->c_name}}</a></h5>
                                                <p>{{$l->disc}}</p>
                                                <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i>{{$l->branch}} -   {{ date('F d, Y', strtotime($l->startDate)) }}</time>
                                            </div>
                                            
                                        </div>
                                    </li>
@endforeach
                                    @endunless
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-event wm-event-featured wm-left-spacer">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="{{url('person')}}"><img src="extra-images/featured-image-1.jpg" alt=""></a>
                                           
                                            
                                        </figure>
                                        <div class="wm-event-featured-text" style="text-align: center;">
                                            <h5 style="text-align: center;"><a href="{{url('person')}}">شخصية الشهر : صابر أحمد</a></h5>
                                            <p style="text-align: right;">وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام </p>
                                           
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->




        <!--// Main Content \\-->
        <div class="wm-main-content">

            <!--// Main Section \\
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="wm-search-course">
                                <h3 class="wm-short-title wm-color">Find Your Course</h3>
                                <p>Fill in the form below to find your course:</p>
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
                        </div>
                        <div class="col-md-8">
                            <div class="wm-service wm-box-service">
                                <ul>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-suitcase"></i>
                                            <h6><a href="#">Business</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-money"></i>
                                            <h6><a href="#">Economics</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-school"></i>
                                            <h6><a href="#">Math</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-science"></i>
                                            <h6><a href="#">Science</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-computer"></i>
                                            <h6><a href="#">Computing</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-technology3"></i>
                                            <h6><a href="#">Web Design</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-web3"></i>
                                            <h6><a href="#">Development</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-shape"></i>
                                            <h6><a href="#">Biology</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>-->
            <!--// Main Section \\-->





























   <div class="wm-main-section wm-ourhistory-full c">
                <span class="wm-light-transparent"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <div class="wm-history-list">
                                <h2>تاريخ مركزنا</h2>
                                <ul>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>أصدرت مجموعة القطب الشمالي مجموعة معمرة من منطقة السجاجيد الفاخرة معقود
</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>تصميم أول الكوفيرينج لدينا كل هذه قطاع الرعاية الصحية في مركز تورونتو</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>وضعت أول الكوفيرينج لدينا كل هذه قطاع الرعاية الصحية في مركز تورونتو</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>تثبيت لدينا أول floorcovering مخصصة للمتحف في متحف الآغا خان في تورونتو</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>وضعت أول الكوفيرينج لدينا كل هذه قطاع الرعاية الصحية في مركز تورونتو</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>تثبيت لدينا أول floorcovering مخصصة للمتحف في متحف الآغا خان في تورونتو</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>تصميم أول الكوفيرينج لدينا كل هذه قطاع الرعاية الصحية في مركز تورونتو</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>تصميم أول الكوفيرينج لدينا كل هذه قطاع الرعاية الصحية في مركز تورونتو</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="wm-subscribe-form">
                                <h2>من نحن ؟ و ماذا نقدم</h2>
                               
                                <p>يعمل لأكثر من 10 أعوام في مجال توظيف الطلاب الأجانب الذين يتوقون للدراسة في الجامعات الروسية والتحق أكثر من 11000 طالب من جميع أنحاء العالم. البعض منهم قد أنجزوا بالفعل دراستهم ويعملون في مجالات مختلفة مثل المتخصصين المؤهلين تأهيلا عاليا، والبعض الآخر ما زالوا يدرسون في الجامعةيعمل لأكثر من 10 أعوام في مجال توظيف الطلاب الأجانب الذين يتوقون للدراسة في الجامعات الروسية والتحق أكثر من 11000 طالب من جميع أنحاء العالم. البعض منهم قد أنجزوا بالفعل دراستهم ويعملون في مجالات مختلفة مثل المتخصصين المؤهلين تأهيلا عاليا، والبعض الآخر ما زالوا يدرسون في الجامعة</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



























<!-- <div class="wm-form" style="width: 70%;margin-left: 170px;margin-top: 70px;position: relative;margin:0 auto ;">
                                <div class="wm-widgettitle">
                                    <h2 style="text-align: right;">أرسل أستشارتك القانونية للبلد التي تريدها</h2>
                                </div>
                                <form>
                                    <ul>
                                        <li><input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>
                                        <li>
                                            <div class="wm-select-two">
                                                <select>
                                                    <option>1 Star Review</option>
                                                    <option>1 Star Review1</option>
                                                    <option>1 Star Review2</option>
                                                    <option>1 Star Review3</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="wm-full-form">
                                            <textarea placeholder="Your Comment" ></textarea>
                                        </li>
                                        <li class="wm-full-form">
                                            <input type="submit" value="Submit now">
                                        </li>
                                    </ul>
                                </form>                                
                            </div>      






 -->







    <!-- ModalLogin Box -->
  
        <div class="modal-content" style="margin-right: 19px" >
          <div class="modal-body">
            
            <div class="wm-modallogin-form wm-login-popup " >
                <span class="wm-color" style="text-align: right;padding-right: 80px">أرسل أستشارتك القانونية للبلد التي تريدها</span>
                <form action="{{url('astshara')}}" method="POST" style="text-align: right;">
                {{ csrf_field() }}
                    <ul >
                        <li  > <input type="text"  name="name" placeholder="االأسم" style="text-align: right;width: 400px;margin-right: 12px"  > </li>
                        <li> <input type="text" name="telephone" value="االهاتف" onblur="if(this.value == '') { this.value ='االهاتف'; }" onfocus="if(this.value =='االهاتف') { this.value = ''; }" style="text-align: right;width: 400px"   > </li>

                         <li> <input type="text" name="email" value="االبريد الألكترونية" onblur="if(this.value == '') { this.value ='االبريد الألكترونية'; }" onfocus="if(this.value =='االبريد الألكترونية') { this.value = ''; }" style="text-align: right;width: 400px" > </li>


                         <!--  <li> <input type="text" name="astshara" value="الأستشارة القانونية" onblur="if(this.value == '') { this.value ='الأستشارة القانونية'; }" onfocus="if(this.value =='الأستشارة القانونية') { this.value = ''; }" style="text-align: right;" > </li> -->
                         
                        <li></li>
                        <li style="" >
                                                            <textarea name="astshara" placeholder="الأستشارة القانونية" style="text-align: right;font-size: 125%;font-weight: 30px;width: 400px;height: 200px;margin-right: 12px"></textarea>
                                                        </li>
                                                         <li style="margin-left:  15px">

                                            <div class="wm-select-two" style="width: 97px ;">
                                                <select name="country" style="text-align: center"  >
                                                    <option>      مصر</option>
                                                    <option>السعودية</option>
                                                    <option>تونس</option>
                                                    <option>ليبيا</option>
                                                </select>
                                            </div>
                                            
                                        </li>
                        <li> <input type="submit" value="أرسال" class="c"> </li>
                    </ul>
                </form>
                <span class="wm-color"></span>
               
                <p><a href="#"></a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
                <span class="wm-color">create Your Account today</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Create Account"> </li>
                    </ul>
                </form>
                <span class="wm-color">or signup with your socials:</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
          






<style type="text/css">
    

    .font{
    
    font-size:110%;
}
</style>










            <div class="wm-main-section wm-courses-popular-full c">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"><a href="{{route('course.index')}}"><h2>أشهر <span>الدورات</span> الاون لاين</h2></a>

<p></p>

<h3 class="font"><strong>لدينا العديد من الدورات المناسبة لجميع الأعضاء دوراتنل تؤهلك لسوق العمل فهي تشمل جميع المنهج المخصصة للعمل</strong>

<a href="{{route('course.index')}}" style="color:#b37400"><strong>لمشاهدة دوراتنا </strong>  لمشاهدة دوراتنا الاون لاين</a></h3>
                              </div>
                            <div class="wm-courses wm-courses-popular" style="font-size: 110% ">
                                <ul class="row">
                                    
                                    @unless(empty($courses))
                                    @foreach($courses as $c)
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="{{route('course.show',$c->c_id)}}"><img src="{{$c->image}}" alt=""> <span class="wm-popular-hover"> <small>تفاصيل الدورة</small> </span> </a>
                                                <figcaption>
                                                    <img src="extra-images/{{$c->teacher->profile_image}}" alt="" style="width: 50px;height: 50px">
                                                    <h6><a href="#">{{$c->teacher->t_name}}</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text c">
                                                <h6><a href="#">{{$c->c_name}}</a></h6>
                                                <div class="wm-courses-price"><!-- <span>$50</span>--> </div>
                                                <ul>
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endunless
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
      

      <!--// Main Section \\-->











    <!--// Main Section \\-->
            <div class="wm-main-section c">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="wm-search-course" style="text-align: center;">
                                <h3 class="wm-short-title wm-color">أبحث عن دورتك في فروعنا</h3>
                                <p><strong>: أدخل أسم الدورة و أسم الفرع الذي تبحث عنه</strong>  </p>
                               
                                    <ul><!--
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
                                        </li>-->
                                        <li> 

<div class="wm-apply-select c"> 
<form action="{{url('search')}}">


                                                  @unless(empty($offlines))
                                                <select name="branch" >


                                                @foreach($offlines as $f)
                                                    <option >{{$f->branch}}</option>
                                                    @endforeach
                                                </select>

                                                @endunless
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wm-apply-select c" style="text-align: right;" >
                                            @unless(empty($offlineCourse))
                                                <select name="course" style="text-align: right;">
                                                @foreach($offlineCourse as $c)
                                                    <option  value="{{$c->c_name}}" style="text-align: right;" >{{$c->c_name}}</option>
                                                   
                                                   @endforeach
                                                </select>

                                                @endunless
                                            </div>
                                        </li>
                                        <li> <input type="submit" value="بحث" style="background-color: #b99663
;color: white;font-weight: 25px " > </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="wm-service wm-box-service">
                                <ul>
                                @unless(empty($offlines))

                                @foreach($offlines as $f)
                                    <li>

                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-suitcase"></i>
                                            <h6><a href="{{url('branch/'.$f->branch.'/test')}}">{{$f->branch}}</a></h6>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                    @endunless
                                   
                                   
                                    
                                   
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->








      











   <!--// Main Section \\-->
            <div class="wm-main-section wm-tocolumn-spacer" style="width: 1700px;text-align: right;">
                <div class="container" style="width: 1700px;margin-left: 270px">
                    <div class="row" >
                        
                        <div class="col-md-6">
                            <div class="wm-fancytitle-two wm-align-left" style="margin-left: 350px"> <h2>أشهر خبرائنا</h2> </div>
                            <div class="wm-thumb-testimonial" style="width: 900px" >
                               
                                  @unless(empty($teachers))

                                  @foreach($teachers  as $t)

                                <div class="wm-thumb-testimonial-layer">
                                    <figure><a href="{{route('teacher.show',$t->t_id)}}"><img src="extra-images/{{$t->profile_image}}" alt="" style="height: 320px;width: 300px"></a></figure>
                                    <div class="thumb-testimonial-text" style="height: 320px">
                                        <h4><a href="{{route('teacher.show',$t->t_id)}}">{{$t->t_name}}</a></h4>
                                        <span class="wm-color-two c" style="">{{$t->type->t_title}}</span>
                                        <p>{{$t->t_experience}}</p>
                                    </div>
                                </div>

@endforeach
                                @endunless
                                
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!--// Main Section \\-->






            <!--// Main Section \\-->
            <div class="wm-main-section wm-upcoming-event-slider-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancytitle-two"> <h2>المجلة الأعلامية</h2> </div>
                           
                            <div class="wm-upcoming-event-slider">

                                <div class="wm-upcoming-event-layer">
                                    <div class="wm-banner-addswrap">
                                        <div class="wm-banner-adds-inner">
                                            <time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i> 24 April, 2016</time>
                                            <h2>Convocation Recital</h2>
                                            <p>We are pleased to offer a live-stream of this concert. The concert will not be archived for future viewing.</p>
                                        </div>
                                        <span>3220 Terry Lane Orlando, FL 32801</span>
                                        <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                                    </div>
                                </div>
                              <!--   <div class="wm-upcoming-event-layer">
                                    <div class="wm-banner-addswrap">
                                        <div class="wm-banner-adds-inner">
                                            <time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i> 22 April, 2016</time>
                                            <h2>Percussion Ensemble</h2>
                                            <p>Performing contemporary works for percussion and marimba ensemble with a diverse array.</p>
                                        </div>
                                        <span>3198 Hill Street Wapakoneta, OH 45895</span>
                                        <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                                    </div>
                                </div> -->
                              <!--   <div class="wm-upcoming-event-layer">
                                    <div class="wm-banner-addswrap">
                                        <div class="wm-banner-adds-inner">
                                            <time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i> 10 April, 2016</time>
                                            <h2>Dean's Showcase Event</h2>
                                            <p>Music students who've been selected by faculty to participate in the Dean's Showcase.</p>
                                        </div>
                                        <span>2013 Webster Street Woodbridge, NJ 07095</span>
                                        <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->





         























          

            <!--// Main Section \\-->
            <!--
    <div class="wm-main-section wm-whychooseus-full wm-minus-spacer" style="margin-left: 170px">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-8">
                            <div class="whychooseus-list">
                                <div class="wm-fancy-title"> <h2>لماذا <span> تختارنا</span></h2> </div>
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span>98%</span>
                                        <h6>من المتدربين لدينا حصلت على وظيفة مرموقة</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>91%</span>
                                        <h6> افادة العضو بكافة الاصدارات للمركز سواء الشهرية او السنوية مجانا</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>35%</span>
                                        <h6>الحصول بشكل دوري على معلومات حول آخر المستجدات وقائمة بالمؤتمرات الدولية التي تعقد في أنحاء العالم في مجال التحكيم التجاري الدولي</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>-->
            <!--// Main Section \\-->







 









            <!--// Main Section \\-->
                 <div class="wm-main-section wm-studentslove-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12"> <div class="wm-fancy-title"> <h2>لماذا يفضلنا <span>المتدربون</span></h2> </div> </div>
                        <div class="col-md-6"> <video src="build/echo-hereweare.mp4" poster="build/echo-hereweare.jpg" controls="controls" preload="none"></video> </div>
                        <div class="col-md-6 c">
                            <div class="wm-recent-list-slider wm-recent-list-slider-color">
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-1.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“الذين يدرسون في يا رفاق جلب قيمة مضافة لحياتي المهنية وكانت الدورات مثيرة للاهتمام للغاية وكان الأساتذة”</p>
                                        <a href="#" class="wm-color-three">أحمد علي</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-2.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“تسجل هي فريدة من نوعها للغاية من حيث البيئة الأكاديمية الاجتماعية”</p>
                                        <a href="#" class="wm-color-three">محمد تامر</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-3.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“المعرفة المكتسبة في العديد من الدورات يمكن بسهولة أن تستخدم في مسؤولياتي وظيفة جديدة”</p>
                                        <a href="#" class="wm-color-three">مجدي زين</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-2.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“تسجل هي فريدة من نوعها للغاية من حيث البيئة الأكاديمية الاجتماعية”</p>
                                        <a href="#" class="wm-color-three">سالي نادر</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
      
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-testimonial-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>أراء  <span>خبراء القانون</span></h2> <p class="c"></p> </div>
                            <div class="wm-testimonial-slider c">
                                <div class="wm-testimonial-slider-wrap">
                                    <p>اخترت لهم لأنه أعطاني مرونة. كنت أعمل بدوام كامل في نفس الوقت كنت أدرس، لذلك أعطاني OU أن المرونة. أيضا والدي، وأنا الدنماركية المنشأ.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{!!asset('extra-images/testimonial-thumb-1.png')!!}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>بعد الانتهاء من دراسة ماجستير في إدارة الأعمال، أتيحت لي الفرصة للانضمام واحدة من كليات إدارة الأعمال الرائدة في المملكة المتحدة في دور عضو هيئة التدريس وكبار استشاري. أفترض دون ماجستير في إدارة الأعمال كان من الصعب اتخاذ هذه الخطوة الوظيفي. التحدي الأكبر في دراسة معهم.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{!!asset('extra-images/testimonial-thumb-2.png')!!}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>بعد الانتهاء من دراسة ماجستير في إدارة الأعمال، أتيحت لي الفرصة للانضمام واحدة من كليات إدارة الأعمال الرائدة في المملكة المتحدة في دور عضو هيئة التدريس وكبار استشاري. أفترض دون ماجستير في إدارة الأعمال كان من الصعب اتخاذ هذه الخطوة الوظيفي. التحدي الأكبر في دراسة معهم.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{!!asset('extra-images/testimonial-thumb-1.png')!!}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>بعد الانتهاء من دراسة ماجستير في إدارة الأعمال، أتيحت لي الفرصة للانضمام واحدة من كليات إدارة الأعمال الرائدة في المملكة المتحدة في دور عضو هيئة التدريس وكبار استشاري. أفترض دون ماجستير في إدارة الأعمال كان من الصعب اتخاذ هذه الخطوة الوظيفي. التحدي الأكبر في دراسة معهم.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="{!!asset('extra-images/testimonial-thumb-2.png')!!}" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->























       <!--// Main Section \\-->
            <div class="wm-main-section wm-ourprofessors-slider-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 c">
                            <div class="wm-fancy-title-four wm-fancy-title-left" style="text-align: center;" > <h2 ><small style="color: #b99663
">&nbsp &nbsp صور المركز &nbsp &nbsp &nbsp </small></h2> <div class="clearfix"></div> <span> </span> </div>


                            <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
    </style>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
        @unless(empty($images))
                            @foreach($images as $image)
            <div data-p="144.50">
              <a href="{{url('album/'.$image->album->b_id)}}" class="wm-color-four">  <img data-u="image" src="extra-images/{{$image->path}}" /></a>
               <a href="{{url('album/'.$image->album->b_id)}}" class="wm-color-four"> <img data-u="thumb" src="extra-images/{{$image->path}}" /></a>
            </div>

            @endforeach
                               @endunless
            <!--
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/02.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-02.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/03.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-03.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/04.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-04.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/05.jpg" />
                <img data-u="thumb" src="{!!asset('img/thumb-05.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/06.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-06.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/07.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-07.jpg')!!}" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/08.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-08.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/09.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-09.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/10.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-10.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/11.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-11.jpg')!!}" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="{!!asset('img/12.jpg')!!}" />
                <img data-u="thumb" src="{!!asset('img/thumb-12.jpg')!!}" />
            </div>-->
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
    </div>





                        </div>

                    </div>
                </div>
            </div>



<!-- <style>
/*body { background: #E96D65; }*/

#carousel {
  position: relative;
  width: 60%;
  margin: 0 auto;
  background: #b99663;
}

#slides {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 250px;
}

#slides ul {
  list-style: none;
  width: 100%;
  height: 250px;
  margin: 0;
  padding: 0;
  position: relative;
}

#slides li {
  width: 100%;
  height: 250px;
  float: left;
  text-align: center;
  position: relative;
  font-family: lato, sans-serif;
}

/* Styling for prev and next buttons */

.btn-bar {
  width: 60%;
  margin: 0 auto;
  display: block;
  position: relative;
  top: 40px;
}

#buttons {
  padding: 0 0 5px 0;
  float: right;
}

#buttons a {
  text-align: center;
  display: block;
  font-size: 50px;
  float: left;
  outline: 0;
  margin: 0 60px;
  color: white;
  text-decoration: none;
  display: block;
  padding: 9px;
  width: 35px;
}

a#prev:hover,
a#next:hover {
  color: #FFF;
  text-shadow: .5px 0px #b14943;
}

.quote-phrase,
.quote-author {
  font-family: sans-serif;
  font-weight: 300;
  display: table-cell;
  vertical-align: middle;
  padding: 5px 20px;
  font-family: 'Lato', Calibri, Arial, sans-serif;
}

.quote-phrase {
  height: 200px;
  font-size: 24px;
  color: #FFF;
  font-style: italic;
  text-shadow: .5px 0px #b14943;
}

.quote-marks {
  font-size: 30px;
  padding: 0 3px 3px;
  position: inherit;
}

.quote-author {
  font-style: normal;
  font-size: 20px;
  color: #b14943;
  font-weight: 400;
  height: 30px;
}

.quoteContainer,
.authorContainer {
  display: table;
  width: 100%;
}
</style>
 -->

<!-- <div id="carousel">
  <div class="btn-bar">
    <div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
  </div>
  <div id="slides">
    <ul>
      <li class="slide">
        <div class="quoteContainer">
          <p class="quote-phrase"><span class="quote-marks">"</span> I was literally BLOWN AWAY by Company A's work! They went above and beyond all of our expectations with design, usability. and branding, I will reccommend them to everyone I know!<span class="quote-marks">"</span> </p>
        </div>
        <div class="authorContainer">
          <p class="quote-author">John Doe // Local Business Owner</p>
        </div>
      </li>
      <li class="slide">
        <div class="quoteContainer">
          <p class="quote-phrase"><span class="quote-marks">"</span> I could not stop staring! Company A's Web Solutions are by far the most elegant solutions, you can't beat their quality and attention to detail! <span class="quote-marks">"</span> </p>
        </div>
        <div class="authorContainer">
          <p class="quote-author">Andy Fakename // CEO: Andy's Camping Supplies</p>
        </div>
      </li>
      <li class="slide">
        <div class="quoteContainer">
          <p class="quote-phrase"><span class="quote-marks">"</span>Carl Fakeguy, was the most helpful designer I've ever hired. He listened to my ideas and advised against things that could negatively affect my CEO. Company A is by far the most generous and helpful company, 5/5!<span class="quote-marks">"</span> </p>
        </div>
        <div class="authorContainer">
          <p class="quote-author">Janice Falsename</p>
        </div>
      </li>
    </ul>
  </div>
</div>





 -->





















   <!--// Main Section \\-->
                 <div class="wm-main-section wm-studentslove-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12"> <div class="wm-fancy-title"> <h2>المجلة<span> الأعلامية</span></h2> </div> </div>
                        <!-- <div class="col-md-6"> <video src="build/echo-hereweare.mp4" poster="build/echo-hereweare.jpg" controls="controls" preload="none"></video> </div> -->
                        <div class="col-md-6 c" style="width:900px;text-align: right;">
                            <div class="wm-recent-list-slider wm-recent-list-slider-color">
                                    @unless(empty($articles))

                                    @foreach($articles as $a)
                                <div class="wm-recent-list-layer">
                                   




 @if($a->vote >= 1 and $a->vote <= 10)
                            <img src="{!!asset('images/star1.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >= 11 and $a->vote<=20)
                            <img src="{!!asset('images/star2.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >= 21 and $a->vote <=40)
                            <img src="{!!asset('images/star3.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >=41 and $a->vote <= 60)
                            <img src="{!!asset('images/star4.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >= 61 )
                           <img src="{!!asset('images/star.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @endif

                                    <div class="wm-recent-list-text">
                                        <p> “ 




 {{substr($a->a_article,0,99)}}<a style="color:#b99663" href="{{route('article.show',$a->a_id)}}" class="wm-color c" style="color:#b99663;font-weight: 40px">....  لقرأة المقال كاملا</a>
”</p>
                                        <a href="#" class="wm-color-three">{{$a->a_publisher}}</a>
                                    </div>
                                </div>
                                @endforeach
                                    @endif
                               <!--  <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-2.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“تسجل هي فريدة من نوعها للغاية من حيث البيئة الأكاديمية الاجتماعية”</p>
                                        <a href="#" class="wm-color-three">محمد تامر</a>
                                    </div>
                                </div> -->
                             <!--    <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-3.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“المعرفة المكتسبة في العديد من الدورات يمكن بسهولة أن تستخدم في مسؤولياتي وظيفة جديدة”</p>
                                        <a href="#" class="wm-color-three">مجدي زين</a>
                                    </div>
                                </div> -->
                             <!--    <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="extra-images/recent-list-2.jpg" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“تسجل هي فريدة من نوعها للغاية من حيث البيئة الأكاديمية الاجتماعية”</p>
                                        <a href="#" class="wm-color-three">سالي نادر</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->


            <!--// Main Section \\-->

            <!--// Main Section \\-->
           <!--  <div class="wm-main-section wm-news-grid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2> <a href="{{url('article')}}">المجلة<span> الأعلامية</span></a></h2> <p></p> </div>
                            <div class="wm-news wm-news-grid c">
                                <ul class="row">

                                   
                                    @unless(empty($articles))

                                    @foreach($articles as $a)
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{!!asset('extra-images/news-grid-3.png')!!}" alt=""></a>
                                            <figcaption class="wm-bgcolor c">
                                                
                                                <h6 style="text-align: right;" class="c" >الناشر : <a href="#" class="c" >{{$a->a_publisher}}</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>
</li>
                                                <li>








                                                @if($a->vote >= 1 and $a->vote <= 10)
                            <img src="{!!asset('images/star1.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >= 11 and $a->vote<=20)
                            <img src="{!!asset('images/star2.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >= 21 and $a->vote <=40)
                            <img src="{!!asset('images/star3.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >=41 and $a->vote <= 60)
                            <img src="{!!asset('images/star4.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @elseif($a->vote >= 61 )
                           <img src="{!!asset('images/star.png')!!}" style="width:165px;height: 30px;margin-left: 40px"> 
                            @endif
                                                                            
                              
                                                </li>
                                            </ul>
                                            <h5 style="text-align: right;color:#b99663" ><a href="#" class="wm-color c" style="color:#b99663;font-weight: 40px">{{$a->a_title}}</a></h5>
                                            <p style="text-align: right;">{{substr($a->a_article,0,99)}}
</p>
                                            <a class="wm-banner-btn c" href="{{route('article.show',$a->a_id)}}" style="background-color:#b99663;color: white ">لقرأة المقال كاملا</a>

                                        </div>

                                    </li>


                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-simple-section-title wm-partners-title" style="text-align: right;"> <h2> <span> رعاة المركز</span></h2> </div>
                            <div class="wm-partners-slider gallery">
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/university-partners-1.png')!!}"> <img src="{!!asset('extra-images/university-partners-1.png')!!}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/university-partners-2.png')!!}"> <img src="{!!asset('extra-images/university-partners-2.png')!!}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/university-partners-3.png')!!}"> <img src="{!!asset('extra-images/university-partners-3.png')!!}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/university-partners-4.png')!!}"> <img src="{!!asset('extra-images/university-partners-4.png')!!}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/university-partners-5.png')!!}"> <img src="{!!asset('extra-images/university-partners-5.png')!!}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-6.png')!!}"> <img src="{!!asset('extra-images/university-partners-6.png')!!}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{!!asset('extra-images/university-partners-1.png')!!}"> <img src="{!!asset('extra-images/university-partners-1.png')!!}" alt=""> </a> </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->














            <!--// Main Section \\-->
            
            <!--// Main Section \\-->

        </div>










            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-full">
            
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="wm-contact-tab">

                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" aria-controls="home" data-toggle="tab" style="font-size: 120%"><b>أرسل مقالك </b> </a></li>
                                <li><a href="#profile" aria-controls="profile" data-toggle="tab" style="font-size: 120%"><b> لمزيد من المقترحات</b></a></li>
                              </ul>

                              <!-- Tab panes -->
                               <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row" >
                                        
                                        <div class="col-md-8" style="margin-left:170px" >
                                                               <div class="wm-contact-form">
                                               
                                                <form style="text-align: right;" action="{{route('article.store')}}" method="POST"  >



                                                {{ csrf_field() }}
                                                    <ul>
                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" placeholder="الاسم" name="name" style="text-align: right;" >
                                                        </li>

                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" placeholder="العنوان" name="address" style="text-align: right;"  >
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-symbol3"></i>
                                                            <input type="text" placeholder="البريد" name="email" style="text-align: right;" >
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-technology4"></i>
                                                            <input type="text" placeholder="المحمول" name="mobile" style="text-align: right;"  >
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-web2"></i>
                                                            <textarea placeholder="المقال" name="article" style="text-align: right;" ></textarea>
                                                        </li>
                                                        <li class="c"> <input type="submit" value="أرسال" style="background-color:#b99663;color: white"> </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row" >
                                        
                                        <div class="col-md-8" style="margin-left:170px" >
                                                               <div class="wm-contact-form">
                                               
                                                <form style="text-align: right;" action="{{url('suggestion')}}" method="POST"  >



                                                {{ csrf_field() }}
                                                    <ul>
                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" placeholder="الاسم" name="name" style="text-align: right;" >
                                                        </li>

                                                        
                                                       
                                                        <li>
                                                            <i class="wmicon-web2"></i>
                                                            <textarea placeholder="المقترح" name="suggestion" style="text-align: right;" ></textarea>
                                                        </li>
                                                        <li class="c"> <input type="submit" value="أرسال" style="background-color:#b99663;color: white;" > </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <!--<span class="wm-contact-title">Contact Info</span>
                                    <div class="wm-contact-service">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                <h5 class="wm-color">Address</h5>
                                                <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                <h5 class="wm-color">Phone & Fax</h5>
                                                <p>+1 505-753-5656 +1 505-753-4437</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                <h5 class="wm-color">E-mail</h5>
                                                <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                            </li>
                                        </ul>
                                    </div>-->
                                   <!-- <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                    </ul>-->
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->


@stop