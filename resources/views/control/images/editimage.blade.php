@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل الصورة</h2>
									</div>
									<form  action="{{route('image.update',$image->i_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>أسم الصورة</label>
											<input type="text" name="name" value="{{$image->i_name}}" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }">

											</li>
											<li>
<label>نبذة عن الصورة</label>
											<input name="disc" type="text" value="{{$image->i_disc}}" onblur="if(this.value == '') { this.value ='New Password'; }" onfocus="if(this.value =='New Password') { this.value = ''; }"></li>
											<li>
<label>الألبم التابع له</label>



											<input name="album" type="text" value="{{$image->album_id}}" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>	















											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop