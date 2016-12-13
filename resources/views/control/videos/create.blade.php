@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أضافة فيديو جديد</h2>
									</div>
									<form  action="{{route('video.store')}}"  files="true" method="POST" enctype="multipart/form-data"  style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>أسم الفيديو</label>
											<input type="text" name="name" value="{{old('name')}}" >
<p style="color:blue">{{$errors->first('name')}}</p>
											</li>
											<li>
<label>الدورة التابعة له</label>


<select name="course" style="text-align: right; width: 150px">
												

@unless(empty($courses))

@foreach($courses as $t)

<option value="{{$t->c_name}}">{{$t->c_name}}</option>


@endforeach
@endunless

											</select>


											</li>
											<li>
<label>نبذة عن الفيديو</label>



											<input name="disc" type="text" value="{{old('disc')}}" >



<p style="color:blue">{{$errors->first('disc')}}</p>
											</li>	






<li>
<label>موعد بدء الدورة</label>



											<input name="date" type="text" value="{{old('date')}}" >



<p style="color:blue">{{$errors->first('date')}}</p>
											</li>	





<li>
<label>زمن الفيديو</label>



											<input name="duration" type="text" value="{{old('duration')}}" >


<p style="color:blue">{{$errors->first('duration')}}</p>
											</li>	





											<li>
<label>رقم الحلقة </label>



											<input name="episode" type="text" value="{{old('episode')}}" >


<p style="color:blue">{{$errors->first('episode')}}</p>
											</li>	


<li>
<label>تحميل الفيديو </label>



		<input type="file"   name="file"   >

		<p style="color:blue">{{$errors->first('file')}}</p>
</li>	








											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop