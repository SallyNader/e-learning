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
<p style="color:blue">{{$errors->first('name')}}</p>
											</li>
											<li>
<label>نبذة عن الصورة</label>
											<input name="disc" type="text" value="{{old('disc')}}" >

<p style="color:blue">{{$errors->first('disc')}}</p>
											</li>
											<li>
<label>الألبوم التابع له</label>



											<select name="album" style="text-align: right; width: 150px">
												

@unless(empty($albums))

@foreach($albums as $t)

<option value="{{$t->b_name}}">{{$t->b_name}}</option>


@endforeach
@endunless

											</select>
											</li>	








<li>
<label>تحميل صورة </label>
												<input type="file"   name="file"   >

												<p style="color:blue">{{$errors->first('file')}}</p>

											</li>







											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop