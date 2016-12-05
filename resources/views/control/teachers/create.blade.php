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
											<input type="text" name="name" value="{{old('name')}}" >
											<p style="color:blue">{{$errors->first('name')}}</p>


											</li>
											<li>
<label>البريد الألكترني</label>
											<input name="email" type="text" value="{{old('email')}}" >


<p style="color:blue">{{$errors->first('email')}}</p>

											</li>
											<li>
<label>خبرات المدرب</label>



											<input name="experience" type="text" value="{{old('experience')}}" >


<p style="color:blue">{{$errors->first('experience')}}</p>

											</li>	









											<li>
<label>التليفون</label>
											<input name="phone" type="text" value="{{old('phone')}}">






<p style="color:blue">{{$errors->first('phone')}}</p>



											</li>









											<li>
<label>الفرع</label>
											<input name="branch" type="text" value="{{old('branch')}}" >



<p style="color:blue">{{$errors->first('branch')}}</p>

											</li>










											<li>
<label>اللقب</label>
											
											<select name="type" style="text-align: right; width: 150px">
												

@unless(empty($types))

@foreach($types as $t)

<option value="{{$t->t_title}}">{{$t->t_title}}</option>


@endforeach
@endunless

											</select>

											</li>












											<li>
<label>عدد سنين الخبرة</label>
											<input name="years" type="text" value="{{old('years')}}" >



<p style="color:blue">{{$errors->first('years')}}</p>

											</li>




											<li>
												

<label>تحميل صورة الغلاف</label>

<input type="file" name="cover">
<p style="color:blue">{{$errors->first('cover')}}</p>


											</li>



											<li>
												




												<label>تحميل صورة شخصية</label>

<input type="file" name="profile">
<p style="color:blue">{{$errors->first('profile')}}</p>


											</li>










																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop