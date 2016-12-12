@extends('master')

@section('content')









        <!--// Main Banner \\-->
        <div class="wm-main-banner">
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-1.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-2.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-3.jpg')!!}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="{!!asset('extra-images/banner-view1-1.jpg')!!}" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>شخصية الشهر : أحمد عدوي</h1>
                        <p>تقديم الدعم والاستشارات للسادة مستشاري التحكيم والسادة المحكمين وتقديم الاستشارة القانونية بشكل عام - و تباشر اللجنة مهامها من تعيين محكمين .</p>
                        <a href="#" class="wm-banner-btn">لمزيد من التفاصيل</a>
                        
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>لماذا تختارنا</h1>
                        <p>إن واجب المحكم هو إتباع قواعد العدالة والإنصاف الطبيعية، بينما يتبع القاضي نص القانون، ومن ثم فإن التحكيم استحدث أساساً لضمان تحقيق أكبر قدر من العدالة والإنصاف". (أرسطو) 
في القول المقتطف أعلاه أوضح أرسطو الدور المتميز الذي يلعبه التحكيم في تحقيق العدالة. وبصفته سلطة عامة فان التحكيم يملأ الفراغات التي تنتج عن تطبيق التشريعات والنصوص، خصوصا تلك المتصلة بالوقت والنفقات. ومع ارتفاع تكلفة الدعاوى المدنية أمام المحاكم، أخذت القطاعات التجارية تلجأ أكثر فأكثر نحو تبني استراتيجيات متنوعة لتسوية نزاعاتها. وبوصفه وسيلة سريعة واقتصادية ينضمها القانون أصبح التحكيم بديلاً مفضلا لحل النزاعات التجارية.</p>
                        <a href="#" class="wm-banner-btn">لمزيد من التفاصيل</a>
                    </div>
                   
                </div>
            </div>

        </div>
        <!--// Main Banner \\-->

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
                                            <h6 class="wm-color">دوراتنل تؤهلك لسوق العمل فهي تشمل جميع المنهج المخصصة للعمل</h6>
                                           <!-- <a href="#" class="wm-banner-btn">about us</a>-->
                                        </div>
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color">نحن نحرص في دورتنا على أن يكون الطالب قد أستفاد بشكل كبير و فهم الدرس</h6>
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
                                                    <a href="{{route('category.index')}}" class="wm-banner-btn" style="text-align: center; margin-left: 60px">دورات القسم</a>
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
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
                 <div class="wm-main-section wm-studentslove-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12"> <div class="wm-fancy-title"> <h2>لماذا يفضلنا <span>الطلاب</span></h2> </div> </div>
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
                            <div class="wm-fancy-title"> <h2>أراء  <span>الناس</span></h2> <p>لا تأخذ في كلمتنا لذلك، ونرى ما يقول عملائنا رهيبة</p> </div>
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
                            <div class="wm-ourprofessors-slider">



@unless(empty($images))
                            @foreach($images as $image)
                                <div class="wm-ourprofessors-slider-layer" style="text-align: right">
                                    <figure><a href="#"><img src="extra-images/{{$image->path}}" alt=""  style="width:364px;height:186px  "></a> <figcaption><a href="{{url('album/'.$image->album->b_id)}}" class="wm-color-four">مشاهدة الألبوم كاملا</a></figcaption> </figure>
                                    <div class="wm-ourprofessors-text">
                                        <a href="#"><h3>{{$image->i_name}}</h3></a>
                                        <span>{{$image->i_disc}}</span>
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
            <div class="wm-main-section wm-news-grid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>أشهر<span>المقالات</span></h2> <p></p> </div>
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
                            <div class="wm-simple-section-title wm-partners-title"> <h2> <span></span></h2> </div>
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
            <div class="wm-main-section wm-contact-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="wm-contact-tab">

                              <!-- Nav tabs -->
                             

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row" >
                                        
                                        <div class="col-md-8" style="margin-left:170px" >
                                                               <div class="wm-contact-form">
                                                <span>أرسل مقالك و سيتم نشره</span>
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
                                    <span class="wm-contact-title">Contact Info</span>
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
                                    </div>
                                    <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
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










@stop