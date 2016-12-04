@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أضافة الألبوم جديد </h2>
									</div>
									<form  action="{{route('albumcontrol.store')}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;"  files="true"  enctype="multipart/form-data">





                                  
									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}
										<ul>


										
											<li>
<label>أسم الألبوم</label>
											<input type="text" name="name" value="{{old('name')}}" >

											</li>








											<li>
<label>نبذة عن الألبوم</label>
											<input type="text" name="disc" value="{{old('disc')}}" >

											</li>

<li>
<label>تحميل صورة غلاف الألبوم</label>
											<input type="file"   name="file"   >

											</li>





<!--
											<li>
<label>لتحميل صورة جديجة للألبوم</label>


										<div><input type="file" style="display: none; " class="btn btn-success" name="file"  >
</div>	
											</li>-->
																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop