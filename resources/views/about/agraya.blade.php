@extends('master')

@section('content')


 <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>اللائحة اللأجرائية</h1> 
                        </div>
                            
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

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
            <div class="wm-main-section whowe-are-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6"> <figure class="wm-figure-thumb"><img src="extra-images/whowe-are-1.jpg" alt=""></figure> </div>
                        <div class="col-md-6 wm-editore-text" style="text-align: right;">
                            <h2 class="wm-left-border wm-color">اللائحة اللأجرائية</h2>
                            <p>في تطبيق أحكام هذه اللائحة يكون للعبارات والكلمات التالية المعاني المبينة قرين كل منها ما لم يقتض السياق معنى آخر:
المـــــــــــــــركـز : مركز القاهرة الاقليمي للتدريب والتحكيم .
الــــــــــــلائحــــة : لائحة إجراءات التحكيم التجاري بالمركز.
الأمـــــين العـــام : الأمين العام للمركز.
الـــهــــــيئــــــــة : هيئة التحكيم المشكلة وفقاً لأحكام اللائحة .
اتفاق التحكيـــم : اتفاق الأطراف كتابة على الالتجاء للتحكيم سواء قبل نشوء النزاع (شرط التحكيم) أو بعده (مشارطة التحكيم).
القـــــــــــائمــــة : قائمة أسماء المحكمين بالمركز.</p>
                            <ul>
                                <li><!--<i class="wmicon-mark"></i>--> الاتفاق على التحكيم وفق أحكام هذه اللائحة أمام المركز يحول دون عرض النزاع أمام أي جهة أخرى أو الطعن لديها بحكم هيئة التحكيم.</li>
                                <li> في حالة اللجوء الى التحكيم يقترح أن تضمن الصيغة التالية في اتفاق التحكيم</li>
                                <li> تفترض صحة جميع الاتفاقات والمشارطات المقدمة للتحكيم أمام المركز مالم يقم الدليل على عدم صحتها.
</li>

                                <li>كفل الهيئة بالمركز جميع حقوق الدفاع لأطراف النزاع، وتعاملهم على قدم المساواة وتتيح لكل منهم في جميع الإجراءات الفرصة الكاملة لعرض قضيته</li>
                                <li> في جميع الأحوال يعتبر الحكم صادراً في المكان المعين للتحكيم وفي التاريخ المبين فيه.</li>
                                <li> تشكل الهيئة من محكم واحد أو من ثلاثة محكمين بحسب اتفاق الطرفين، فإن لم يوجد اتفاق يشكل الأمين العام الهيئة من محكم واحد، ما لم ير أن طبيعة النزاع تتطلب تشكيلها من ثلاثة محكمين.
</li>
                                <li> في جميع الأحوال يعتبر الحكم صادراً في المكان المعين للتحكيم وفي التاريخ المبين فيه.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-parallexthree-full">
                <span class="wm-light-transparent wm-more-light-blue"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-parallex wm-parallex-three">
                                <h2> هي الأفضلCRC</h2>
                                <span>سنكون عند حسن ظنكم</span>
                                @unless(Auth::check())
                                <a class="wm-transparent-button" href="{{url('register')}}"><span>للأشتراك معنا</span></a>
                                @endunless
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="wm-apply-info wm-apply-info-color">
                            <ul>
                                <li class="col-md-4">
                                   
                                    <div class="wm-right-section">
                                        <h2>البريد الألكتروني</h2>
                                        <p></p>
                                        <a href="#" class="applyinfo-btn">ddd@yahoo.com</a>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                   
                                    <div class="wm-right-section">
                                        <h2>تليفون</h2>
                                        <p></p>
                                        <h3>22903214 - 002</h3>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                   
                                    <div class="wm-right-section">
                                        <h2>مدير الفرع</h2>
                                        <p>أحمد السنهوري</p>
                                       
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
       
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section our-professors-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>مدربينا و <span>خبرائنا</span></h2> </div>
                            <div class="wm-our-professors">
                                <ul class="row">

                                @unless(empty($teachers))

                                @foreach($teachers as $teacher)
                                    <li class="col-md-4 wordpress">
                                        <figure>
                                            <a href="#"><img src="extra-images/{{$teacher->profile_image}}" alt=""></a>
                                            <figcaption>
                                                <a href="{{route('teacher.show',$teacher->t_id)}}">عن المدرب</a>                                           
                                            </figcaption>                                           
                                        </figure>
                                        <div class="wm-team-info">
                                            <h5><a href="#">{{$teacher->t_name}}</a></h5>                                      
                                            <div class="wm-icon">
                                                <a class="wmicon-social5" href="#"></a>
                                                <a class="wmicon-social4" href="#"></a>
                                                <a class="wmicon-logo" href="#"></a>
                                            </div>
                                            <span><p style="color:#ffb84d">{{$teacher->type->t_title}}</p></span>
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

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
@stop