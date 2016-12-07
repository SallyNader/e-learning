@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل الفيديو</h2>
									</div>
									<form  action="{{route('video.update',$video->v_id)}}"  files="true" method="POST" enctype="multipart/form-data"  style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>أسم الفيديو</label>
											<input type="text" name="name" value="{{$video->v_name}}" >
<p style="color:blue">{{$errors->first('name')}}</p>
											</li>
											<li>
<label>الدورة التابعة له</label>
											<select name="course" style="text-align: right; width: 150px">
												

@unless(empty($courses))

@foreach($courses as $t)


@if($t->c_name == $courseNameRelated)
<option selected value="{{$t->c_name}}" selected >{{$t->c_name}}</option>
@else

<option value="{{$t->c_name}}">{{$t->c_name}}</option>

@endif
@endforeach
@endunless

											</select>


											</li>
											<li>
<label>نبذة عن الفيديو</label>



											<input name="disc" type="text" value="{{$video->v_disc}}" >


<p style="color:blue">{{$errors->first('disc')}}</p>
											</li>	






<li>
<label>موعد بدء الدورة</label>



											<input name="date" type="text" value="{{$video->startDate}}">


<p style="color:blue">{{$errors->first('date')}}</p>
											</li>	





<li>
<label>زمن الفيديو</label>



											<input name="duration" type="text" value="{{$video->duration}}" >


<p style="color:blue">{{$errors->first('duration')}}</p>
											</li>	


<li>
<label>تحميل فيديو جديد</label>



		<input type="file"   name="file"   >
</li>	








											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop