@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل بيانات المدرب</h2>
									</div>
									<form  action="{{route('teachercontrol.update',$teacher->t_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{$teacher->t_name}}" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }">

											</li>
											<li>
<label>البريد الألكترني</label>
											<input name="email" type="text" value="{{$teacher->t_email}}" onblur="if(this.value == '') { this.value ='New Password'; }" onfocus="if(this.value =='New Password') { this.value = ''; }"></li>
											<li>
<label>خبرات المدرب</label>



											<input name="experience" type="text" value="{{$teacher->t_experience}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	









											<li>
<label>التليفون</label>
											<input name="phone" type="text" value="{{$teacher->t_phone}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>









											<li>
<label>الفرع</label>
											<input name="branch" type="text" value="{{$teacher->t_branch}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>










											<li>
<label>اللقب</label>
											<input name="title" type="text" value="{{$teacher->type_id}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>












											<li>
<label>عدد سنين الخبرة</label>
											<input name="years" type="text" value="{{$teacher->experience_years}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>










																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop