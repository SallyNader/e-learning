@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل بيانات الدورة</h2>
									</div>
									<form  action="{{route('coursecontrol.update',$course->c_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;"  files="true"  enctype="multipart/form-data" >


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}

                                                  
										<ul>


<li><img src="../../{{$course->image}}" style="width: 200px;height:200px;margin-right: 90px"></li>

											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{$course->c_name}}" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }">

											</li>
											<li>
<label>المدرب</label>
											<input name="teacher" type="text" value="{{$course->teacher_id}}" onblur="if(this.value == '') { this.value ='New Password'; }" onfocus="if(this.value =='New Password') { this.value = ''; }"></li>
											<li>
<label>القسم</label>



											<input name="department" type="text" value="{{$course->category_id}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	









											<li>
<label>السعر</label>
											<input name="price" type="text" value="{{$course->price}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>









											<li>
<label>وصف الدورة</label>
											<input name="disc" type="text" value="{{$course->disc}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>






















											<li>
<label>المنهج</label>
											<input name="sy" type="text" value="{{$course->syllabus}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>



<li>
<label>المؤهلات</label>
											<input name="certificates" type="text" value="{{$course->certificates}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>





<li>
<label>صورة الدورة</label>
											<input  type="file"  name="file"></li>







																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop