@extends('master')

@section('content')





<style type="text/css">
    
.c{



    font-size:110%;
}


</style>



        <!--// Main Banner \\-->
        <div class="wm-main-banner">
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-1.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-2.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-3.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-1.jpg')!!}" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav c" style="text-align: left;height: 300px">
                    <div class="wm-banner-one-nav-layer c" style="text-align: left;height: 583px;padding-bottom: : 60px;padding-left: 160px">
                        <h1>مركز القاهرة الإقليمي للتدريب و التحكيم</h1>
                        <p style="padding-top: 30px">تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمينتعيين محكمين تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين</p>
                        <a href="{{url('moreaboutcrc')}}" class="wm-banner-btn" tabindex="0" style="font-size: 90%">لمزيد من المعلومات عن المركز</a>
                       
                        
                    </div>
                 
                   
                </div>

            </div>

        </div>
        <!--// Main Banner \\-->


           <!--// Main Section \\-->
            <div class="wm-main-section wm-latest-event-full">
                <div class="container">
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
                                                <h5 style="text-align:center;"><a href="{{route('offline.show',$l->c_id)}}">{{$l->c_name}}</a></h5>
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





























   <div class="wm-main-section wm-ourhistory-full">
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
                                <p>نحن نساعد الطلاب ليس فقط الحصول على رسالة القبول </p>
                                <p>يعمل لأكثر من 10 أعوام في مجال توظيف الطلاب الأجانب الذين يتوقون للدراسة في الجامعات الروسية والتحق أكثر من 11000 طالب من جميع أنحاء العالم. البعض منهم قد أنجزوا بالفعل دراستهم ويعملون في مجالات مختلفة مثل المتخصصين المؤهلين تأهيلا عاليا، والبعض الآخر ما زالوا يدرسون في الجامعةيعمل لأكثر من 10 أعوام في مجال توظيف الطلاب الأجانب الذين يتوقون للدراسة في الجامعات الروسية والتحق أكثر من 11000 طالب من جميع أنحاء العالم. البعض منهم قد أنجزوا بالفعل دراستهم ويعملون في مجالات مختلفة مثل المتخصصين المؤهلين تأهيلا عاليا، والبعض الآخر ما زالوا يدرسون في الجامعة</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

















<style type="text/css">
    

    .font{
    
    font-size:110%;
}
</style>










            <div class="wm-main-section wm-courses-popular-full">
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
                                            <div class="wm-popular-courses-text">
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
            <div class="wm-main-section">
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

<div class="wm-apply-select"> 
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
                                            <div class="wm-apply-select">
                                            @unless(empty($offlineCourse))
                                                <select name="course">
                                                @foreach($offlineCourse as $c)
                                                    <option  value="{{$c->c_name}}" >{{$c->c_name}}</option>
                                                   
                                                   @endforeach
                                                </select>

                                                @endunless
                                            </div>
                                        </li>
                                        <li> <input type="submit" value="بحت"> </li>
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








      <div class="wm-main-section wm-latestevents-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-9 wm-top-spacer">
                            <h2 class="wm-simple-title" style="text-align: right;">أشهر أقسام الدورات</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="wm-event-latest-slider">
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color c">دوراتنل تؤهلك لسوق العمل فهي تشمل جميع المنهج المخصصة للعمل</h6>
                                           <!-- <a href="#" class="wm-banner-btn">about us</a>-->
                                        </div>
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color c">نحن نحرص في دورتنا على أن يكون الطالب قد أستفاد بشكل كبير و فهم الدرس</h6>
                                         <!--   <a href="#" class="wm-banner-btn">about us</a>-->
                                        </div>
                                    </div>
                                </div>
                               
                               @unless(empty($category))

                               @foreach($category as $c)
                                <div class="col-md-4">
                                    <div class="wm-event wm-latest-event">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <figure><a href="#"><img src="{!!asset('extra-images/latest-event-2.png')!!}" alt=""></a></figure>
                                                <div class="wm-latest-event-text">
                                                    <h6 style="text-align: center;"><a href="#" class="wm-color">{{$c->ca_name}}</a></h6>
                                                    <time datetime="2008-02-14 20:00" style="text-align: center;">{{ date('F d, Y', strtotime($c->created_at)) }}</time>
                                                    <p></p>
                                                    <a href="{{route('category.show',$c->ca_id)}}" class="wm-banner-btn" style="text-align: center; margin-left: 60px">دورات القسم</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

@endunless
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wm-counter wm-counter-simple">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <span class="word-count">5</span>
                                        <h6>مركزنا يحتل المركز الخامس على مستوى الشرق الأوسط</h6>
                                    </li>
                                    <li class="col-md-12">
                                        <span class="word-count">50</span>
                                        <h6>طلبنا من مختلف أنحاء الدول العربية حوالي 50 دولة</h6>
                                    </li>
                                    <li class="col-md-12">
                                        <span class="word-count">91</span>
                                        <h6>نضم أمهر الخبراء علي مستوى الشرق الأوسط حوالي 91 خبير</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>











   <!--// Main Section \\-->
            <div class="wm-main-section wm-tocolumn-spacer" style="width: 1700px;text-align: right;">
                <div class="container" style="width: 1700px;margin-left: 270px">
                    <div class="row" >
                        
                        <div class="col-md-6">
                            <div class="wm-fancytitle-two wm-align-left" style="margin-left: 350px"> <h2>أشهر خبرائنا</h2> </div>
                            <div class="wm-thumb-testimonial">
                               
                                  @unless(empty($teachers))

                                  @foreach($teachers  as $t)

                                <div class="wm-thumb-testimonial-layer">
                                    <figure><a href="#"><img src="extra-images/{{$t->profile_image}}" alt="" style="height: 320px;width: 300px"></a></figure>
                                    <div class="thumb-testimonial-text" style="height: 320px">
                                        <h4><a href="#">{{$t->t_name}}</a></h4>
                                        <span class="wm-color-two">{{$t->type->t_title}}</span>
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











         





















<div class="col-md-12">
                            <div class="wm-callaction-two-typo">
                                <span class="wm-typo-transparents-color"></span>
                                <div class="wm-callaction-typo-text">
                                    <h2>!هل ترغب في أرسال أستشاره قانونية لبلد معينة</h2>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin" style="background-color: #b99663;color: white;font-size: 120%">أرسل أستشارتك القانونية</a>
                                </div>                              
                            </div>
                        </div>

          

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
                        <div class="col-md-6">
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
                            <div class="wm-fancy-title"> <h2>أراء  <span>خبراء القانون</span></h2> <p>لا تأخذ في كلمتنا لذلك، ونرى ما يقول عملائنا رهيبة</p> </div>
                            <div class="wm-testimonial-slider">
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
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-four wm-fancy-title-left" style="text-align: center;" > <h2><small>&nbsp &nbsp صور المركز &nbsp &nbsp &nbsp </small></h2> <div class="clearfix"></div> <span>صور دوراتنا داخل المركز </span> </div>


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














            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-news-grid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2> <a href="{{url('article')}}">المجلة<span> الأعلامية</span></a></h2> <p></p> </div>
                            <div class="wm-news wm-news-grid">
                                <ul class="row">

                                   
                                    @unless(empty($articles))

                                    @foreach($articles as $a)
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{!!asset('extra-images/news-grid-3.png')!!}" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                
                                                <h6 style="text-align: right;">الناشر: <a href="#">{{$a->a_publisher}}</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>{{ date('F d, Y', strtotime($a->created_at)) }}
</li>
                                                <li>








                                                @if($a->vote >= 1 and $a->vote <= 10)
                            <img src="{!!asset('images/star1.png')!!}" style="width:160px;height: 30px;"> 
                            @elseif($a->vote >= 11 and $a->vote<=20)
                            <img src="{!!asset('images/star2.png')!!}" style="width:160px;height: 30px;"> 
                            @elseif($a->vote >= 21 and $a->vote <=40)
                            <img src="{!!asset('images/star3.png')!!}" style="width:160px;height: 30px;"> 
                            @elseif($a->vote >=41 and $a->vote <= 60)
                            <img src="{!!asset('images/star4.png')!!}" style="width:160px;height: 30px;"> 
                            @elseif($a->vote >= 61 )
                           <img src="{!!asset('images/star.png')!!}" style="width:160px;height: 30px;"> 
                            @endif
                                                                            
                              
                                                </li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">{{$a->a_title}}</a></h5>
                                            <p>..{{substr($a->a_article,0,99)}}
</p>
                                            <a class="wm-banner-btn" href="{{route('article.show',$a->a_id)}}">لقرأة المقال كاملا</a>

                                        </div>

                                    </li>


                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
                                                        <li> <input type="submit" value="أرسال"> </li>
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
                                                        <li> <input type="submit" value="أرسال"> </li>
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