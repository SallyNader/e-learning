@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل  الألبومات </h2>
									</div>
									<form  action="{{route('albumcontrol.update',$album->b_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;"  files="true"  enctype="multipart/form-data">





                                  
									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>

<li><img src="../../extra-images/{{$album->b_cover}}" style="width: 200px;height:200px;margin-right: 90px"></li>
										
											<li>
<label>أسم الألبوم</label>
											<input type="text" name="name" value="{{$album->b_name}}" >



											  <p style="color:blue">{{$errors->first('name')}}</p>
											</li>








											<li>
<label>نبذة عن الألبوم</label>
											<input type="text" name="disc" value="{{$album->b_disc}}" >


  <p style="color:blue">{{$errors->first('disc')}}</p>
											</li>

<li>
<label>تحميل صورة جديدة</label>
											<input type="file"   name="file"   >

											</li>





<!--
											<li>
<label>لتحميل صورة جديجة للألبوم</label>


										<div><input type="file" style="display: none; " class="btn btn-success" name="file"  >
</div>	
											</li>-->
																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop