@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">تعديل بيانات اللقب </h2>
									</div>
									<form  action="{{route('typecontrol.update',$type->t_id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>اللقب</label>
											<input type="text" name="name" value="{{$type->t_title}}" >
											<p style="color:blue">{{$errors->first('name')}}</p>

											</li>
																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop