@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل بيانات المقال</h2>
									</div>
									<form  action="{{route('articlecontrol.update',$article->a_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>صاحب المقال</label>
											<input type="text" name="name" value="{{$article->a_publisher}}" >
<p style="color:blue">{{$errors->first('name')}}</p>
											</li>
											<li>
<label>عنوان المقال</label>
											<input name="title" type="text" value="{{$article->a_title}}" >



<p style="color:blue">{{$errors->first('title')}}</p>
											</li>
											<li>
<label>المقال</label>
											<input name="article" type="text" value="{{$article->a_article}}" >

<p style="color:blue">{{$errors->first('article')}}</p>
											</li>	


											<li>
<label>تاريخ النشر</label>
											<input name="date" type="text" value="{{$article->created_at}}" >


<p style="color:blue">{{$errors->first('date')}}</p>
											</li>																			 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop