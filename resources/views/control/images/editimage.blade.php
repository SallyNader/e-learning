@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل الصورة</h2>
									</div>
									<form  action="{{route('image.update',$image->i_id)}}"  files="true" method="POST" enctype="multipart/form-data"  style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>










<li><img src="../../extra-images/{{$image->path}}" style="width: 200px;height:200px;margin-right: 90px"></li>


											<li>
<label>أسم الصورة</label>
											<input type="text" name="name" value="{{$image->i_name}}" >
<p style="color:blue">{{$errors->first('name')}}</p>
											</li>
											<li>
<label>نبذة عن الصورة</label>
											<input name="disc" type="text" value="{{$image->i_disc}}" >


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
<label>تحميل صورة جديدة</label>
												<input type="file"   name="file"   >

											</li>







											









																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop