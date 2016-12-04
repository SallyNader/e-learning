@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أضافة مدرب جديد</h2>
									</div>
									<form  action="{{url('teachercontrol')}}" files="true" method="POST" enctype="multipart/form-data"  style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{old('name')}}" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }">

											</li>
											<li>
<label>البريد الألكترني</label>
											<input name="email" type="text" value="{{old('email')}}" onblur="if(this.value == '') { this.value ='New Password'; }" onfocus="if(this.value =='New Password') { this.value = ''; }"></li>
											<li>
<label>خبرات المدرب</label>



											<input name="experience" type="text" value="{{old('experience')}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	









											<li>
<label>التليفون</label>
											<input name="phone" type="text" value="{{old('phone')}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>









											<li>
<label>الفرع</label>
											<input name="branch" type="text" value="{{old('branch')}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>










											<li>
<label>اللقب</label>
											<input name="title" type="text" value="{{old('title')}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>












											<li>
<label>عدد سنين الخبرة</label>
											<input name="years" type="text" value="{{old('years')}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>




											<li>
												

<label>تحميل صورة الغلاف</label>

<input type="file" name="cover">

											</li>



											<li>
												




												<label>تحميل صورة شخصية</label>

<input type="file" name="profile">

											</li>










																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop