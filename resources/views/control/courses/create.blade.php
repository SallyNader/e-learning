@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أدخال دورة جديدة</h2>
									</div>
									<form  action="{{route('coursecontrol.store')}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;"  files="true"  enctype="multipart/form-data" >


									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}

                                                  
										<ul>
											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{old('name')}}">

											</li>
											<li>
<label>المدرب</label>
											<input name="teacher" type="text" value="{{old('teacher')}}" ></li>
											<li>
<label>القسم</label>



											<input name="department" type="text" value="{{old('department')}}"></li>	









											<li>
<label>السعر</label>
											<input name="price" type="text" value="{{old('price')}}" ></li>









											<li>
<label>وصف الدورة</label>
											<input name="disc" type="text" value="{{old('disc')}}" ></li>






















											<li>
<label>المنهج</label>
											<input name="sy" type="text" value="{{old('sy')}}" ></li>



<li>
<label>المؤهلات</label>
											<input name="certificates" type="text" value="{{old('certificates')}}" ></li>












<li>
<label>صورة غلاف الدورة</label>
											<input type="file" name="file" ></li>







																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop