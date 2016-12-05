@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل بيانات المدرب</h2>
									</div>
									<form  action="{{route('teachercontrol.update',$teacher->t_id)}}" files="true" method="POST" enctype="multipart/form-data" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{$teacher->t_name}}" >
											<p style="color:blue">{{$errors->first('name')}}</p>


											</li>
											<li>
<label>البريد الألكترني</label>
											<input name="email" type="text" value="{{$teacher->t_email}}">

<p style="color:blue">{{$errors->first('email')}}</p>


											</li>
											<li>
<label>خبرات المدرب</label>



											<input name="experience" type="text" value="{{$teacher->t_experience}}" >


<p style="color:blue">{{$errors->first('experience')}}</p>

											</li>	









											<li>
<label>التليفون</label>
											<input name="phone" type="text" value="{{$teacher->t_phone}}" >


<p style="color:blue">{{$errors->first('phone')}}</p>

											</li>









											<li>
<label>الفرع</label>
											<input name="branch" type="text" value="{{$teacher->t_branch}}" >




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
											<input name="years" type="text" value="{{$teacher->experience_years}}" >

<p style="color:blue">{{$errors->first('years')}}</p>


											</li>

<li>
												

<label>تحميل صورة الغلاف</label>

<input type="file" name="cover">



											</li>



											<li>
												




												<label>تحميل صورة شخصية</label>

<input type="file" name="profile">



											</li>









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop