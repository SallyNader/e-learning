@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أدخال دورة جديدة</h2>
									</div>
									<form  action="{{route('offlinecontrol.store')}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;"  files="true"  enctype="multipart/form-data" >


									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}

                                                  
										<ul>
											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{old('name')}}">
											<p style="color:blue">{{$errors->first('name')}}</p>

											</li>
											<li>
<label>المدرب</label>
											<select name="teacher" style="text-align: right; width: 150px">
												

@unless(empty($teachers))

@foreach($teachers as $t)

<option value="{{$t->t_name}}">{{$t->t_name}}</option>


@endforeach
@endunless

											</select>
											</li>
											<li>
<label>القسم</label>

<select name="category" style="text-align: right; width: 150px">
@unless(empty($categories))

@foreach($categories as $t)

<option value="{{$t->ca_name}}">{{$t->ca_name}}</option>


@endforeach
@endunless

			</select>								



											</li>	









											<li>
<label>السعر</label>
											<input name="price" type="text" value="{{old('price')}}" >





<p style="color:blue">{{$errors->first('price')}}</p>

											</li>









											<li>
<label>وصف الدورة</label>
											<input name="disc" type="text" value="{{old('disc')}}" >








<p style="color:blue">{{$errors->first('disc')}}</p>
											</li>






















											<li>
<label>المنهج</label>
											<input name="sy" type="text" value="{{old('sy')}}" >



<p style="color:blue">{{$errors->first('sy')}}</p>
											</li>



<li>
<label>المؤهلات</label>
											<input name="certificates" type="text" value="{{old('certificates')}}" >



<p style="color:blue">{{$errors->first('certificates')}}</p>
											</li>


<li>
<label>الفرع</label>
											<input name="branch" type="text" value="{{old('branch')}}" >



<p style="color:blue">{{$errors->first('branch')}}</p>
											</li>












<li>
<label>ساعة بدء الدورة</label>
											<input name="startClock" type="text" value="{{old('startClock')}}" >



<p style="color:blue">{{$errors->first('startClock')}}</p>
											</li>











<li>
<label>ساعة أنتهاء الدورة</label>
											<input name="endClock" type="text" value="{{old('endClock')}}" >



<p style="color:blue">{{$errors->first('endClock')}}</p>
											</li>











											<li>
<label>تاريخ بدء الدورة</label>
											<input name="startDate" type="text" value="{{old('startDate')}}" >



<p style="color:blue">{{$errors->first('startDate')}}</p>
											</li>



<li>
<label>رقم الفرع</label>
											<input name="telephone" type="text" value="{{old('telephone')}}" >



<p style="color:blue">{{$errors->first('telephone')}}</p>
											</li>








<li>
<label>صورة غلاف الدورة</label>
											<input type="file" name="file" >




<p style="color:blue">{{$errors->first('file')}}</p>
											</li>







																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop