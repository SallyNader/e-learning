@extends('master')

@section('content')


 <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>مميزات العضوية
                            </h1> 
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
                                        <h6 class="c">من المتدربين لدينا حصلت على وظيفة مرموقة</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>91%</span>
                                        <h6 class="c"> افادة العضو بكافة الاصدارات للمركز سواء الشهرية او السنوية مجانا</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>35%</span>
                                        <h6 class="c">الحصول بشكل دوري على معلومات حول آخر المستجدات وقائمة بالمؤتمرات الدولية التي تعقد في أنحاء العالم في مجال التحكيم التجاري الدولي</h6>
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
                        <div class="col-md-6 wm-editore-text" style="text-align: right">
                            <h2 class="wm-left-border wm-color">مميزات العضوية</h2>
                            <p>عضوية مركز القاهرة الاقليمي تمنح التلاقي في وسط علمي ومهني على اعلى مستوى لتبادل الخبرات والدراسات وايضا مركز القاهرة الاقليمي يستعين بأعضاء بمختلف عضويتهم وبكافة انواعها في القضايا اللتحكيمية كلٍ حسب تخصصه ودرجة عضويته</p>
                            <ul>
                                <li> المشاركة في كافة الفعاليات للمركز بتخفيض يصل الى 60 % </li>
                                <li>افادة العضو بكافة الاصدارات للمركز سواء الشهرية او السنوية مجانا</li>
                                <li> افادة العضو باهم الابحاث العلمية على كافة الاصعدة العلمية مجانا
</li>

                                <li>المشاركة في خدمات الاستشارات القانونية والتحكيمية المتخصصة "مع مراعاة درجة العضوية"</li>
                                <li> يمنح المركز كل مشترك حساب الكتروني على الموقع الخاص بالمركز يمكنه من التعليم عن بعد والاستفادة من كافة المسمموعات والمقرؤات والمرئيات 
والكتابات والمقالات والابحاث الدورية الصادرة من المركز على مدار الساعة .</li>
                                <li> الحصول بشكل دوري على معلومات حول آخر المستجدات وقائمة بالمؤتمرات الدولية التي تعقد في أنحاء العالم في مجال التحكيم التجاري الدولي
</li>
                                <li> في جميع الأحوال يعتبر الحكم صادراً في المكان المعين للتحكيم وفي التاريخ المبين فيه.</li>

                                <li>افادة العضو بكافة الاصدارات للمركز سواء الشهرية او السنوية مجانا</li>

                                 <li> المشاركة في كافة الفعاليات للمركز بتخفيض يصل الى 60 % </li>

                                 <li>افادة العضو بكافة الاصدارات للمركز سواء الشهرية او السنوية مجانا</li>
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
                                            <span>{{$teacher->type->t_title}}</span>
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
		<!--// Footer \\-->
@stop