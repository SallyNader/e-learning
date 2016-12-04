@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أضافة صورة جديدة</h2>
									</div>
									<form  action="{{route('image.store')}}"  files="true" method="POST" enctype="multipart/form-data"  style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}
										<ul>














											<li>
<label>أسم الصورة</label>
											<input type="text" name="name" value="{{old('name')}}" >

											</li>
											<li>
<label>نبذة عن الصورة</label>
											<input name="disc" type="text" value="{{old('disc')}}" ></li>
											<li>
<label>الألبوم التابع له</label>



											<input name="album" type="text" value="{{old('album')}}" ></li>	








<li>
<label>تحميل صورة </label>
												<input type="file"   name="file"   >

											</li>







											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop