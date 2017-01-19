@extends('master')

@section('content')


 <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>فروعنا
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
                        <div class="wm-courses-author-info" style="text-align:center;">
                                <div class="wm-title-full">
                                    <h2 style="text-align: right;"></h2>
                                </div>  
                                <ul>

                                <style>
      #map {
        height: 200px;
        width: 50%;
        margin-left: 270px;
         margin-bottom:  20px;
       }




       #map5 {
        height: 200px;
        width: 50%;
       margin-left: 270px;
         margin-bottom:  20px;
       }
 #map6 {
        height: 200px;
        width: 50%;
       margin-left: 270px;
         margin-bottom:  20px;
       }


       #map2 {
        height:200px;
        width: 50%;
        margin-left: 270px;
         margin-bottom:  20px;


               }


       #map3 {
        height: 200px;
        width: 50%;
        margin-left: 290px;
        padding-bottom: 20px
       }
    </style>  
                                    <li>
                                        <div class="wm-author-detail wm-courses-authorinfo c">
<!--<figure>
                                                <a href="#"><img src="extra-images/author-blog-2.jpg" alt=""></a>
                                            </figure>-->
                                            <div class="wm-author-text" style="font-size: 40px">
                                                <h5 class="c"><a href="#" style="color:#b99663;font-size: 20px ">    فرع تونس   </a></h5>
                                                <span>مدير : أحمد محمد خالد </span>
                                                <p class="c">22-شارع أحمد-شارع تونس</p>
                                            </div> 
                                                   <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>      
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUWLDgNSH5lzbiuUiAgN0xzaXCFEFGn_g&callback=initMap">
    </script>     
                                        </div>

                                    </li>
                                    <li>
                                        <div class="wm-author-detail wm-courses-authorinfo">
                                          <!--  <figure>
                                                <a href="#"><img src="extra-images/author-blog-7.jpg" alt=""></a>
                                            </figure>-->
                                            <div class="wm-author-text">
                                                <h5 class="c"><a href="#" style="color:#b99663;font-size: 20px ">فرع القاهرة    </a></h5>
                                                <span</span>
                                                <p class="c">22 شارع محمود حسن - الميرغني مصر الجديدة </p>
                                            </div> 



                                            

<div id="map5"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map5'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>           
                  
                  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABSO5iwX5h7hIsmVvuk7n0zmAqzvWKXYw&callback=initMap">
    </script>                                    
                                        </div>
                                    </li>

                                    <li>
                                        <div class="wm-author-detail wm-courses-authorinfo" style="">
                                           <!-- <figure>
                                                <a href="#"><img src="extra-images/lesson-list2.jpg" alt=""></a>
                                            </figure>-->
                                            <div class="wm-author-text" style="padding-right: 0px">
                                               <h5 class="c"><a href="#" style="color:#b99663;font-size: 20px ">فرع الأردن</a></h5>
                                                <span>مدير : محمد جمال علي</span>
                                                <p class="c">24 شارع فهد الوسري - العبيكان الدولي </p>
                                            </div>  
                                                 
<div id="map2"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>           
                   
                   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABSO5iwX5h7hIsmVvuk7n0zmAqzvWKXYw&callback=initMap">
    </script>                     </div>
                                    </li>

                                    <li>
                                        <div class="wm-author-detail wm-courses-authorinfo">
                                            


                                           <!-- <figure>
                                                <a href="#"><img src="extra-images/news-grid-thumb-1.png" alt=""></a>
                                            </figure>-->
                                            <div class="wm-author-text">
                                                <h5 class="c"><a href="#" style="color:#b99663;font-size: 20px "> فرع السعودية   </a></h5>
                                                <span>مدير : تامر علي المهدي </span>
                                                <p class="c">14 شارع الدوحة - المنطقة الخامسة النسيم </p>
                                            </div> 


                                               <div id="map3"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map3'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>                                                        
                                        </div>
                                    </li>
                                </ul>                       
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
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABSO5iwX5h7hIsmVvuk7n0zmAqzvWKXYw&callback=initMap">
    </script>
        </div>
        <!--// Main Content \\-->

        <!--// Footer \\-->
		<!--// Footer \\-->
@stop