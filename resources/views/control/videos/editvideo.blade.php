@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل الفيديو</h2>
									</div>
									<form  action="{{route('video.update',$video->v_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>أسم الفيديو</label>
											<input type="text" name="name" value="{{$video->v_name}}" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }">

											</li>
											<li>
<label>الدورة التابعة له</label>
											<input name="course" type="text" value="{{$video->course_id}}" onblur="if(this.value == '') { this.value ='New Password'; }" onfocus="if(this.value =='New Password') { this.value = ''; }"></li>
											<li>
<label>نبذة عن الفيديو</label>



											<input name="disc" type="text" value="{{$video->v_disc}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	






<li>
<label>موعد بدء الدورة</label>



											<input name="date" type="text" value="{{$video->startDate}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	





<li>
<label>زمن الفيديو</label>



											<input name="duration" type="text" value="{{$video->duration}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	











											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop