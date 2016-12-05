@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">عديل بيانات الطالب</h2>
									</div>
									<form  action="{{route('user.update',$user->id)}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('PUT') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>الأسم</label>
											<input type="text" name="name" value="{{$user->name}}">
											<p style="color:blue">{{$errors->first('name')}}</p>

											</li>
											<li>
<label>البريد الألكتورني</label>
											<input name="email" type="text" value="{{$user->email}}">


											<p style="color:blue">{{$errors->first('email')}}</p>

											</li>
											<li>
<label>مقبول/غير مقبول</label>
											<input name="accepted" type="text" value="{{$user->accepted}}" >


											<p style="color:blue">{{$errors->first('accepted')}}</p>

											</li>																			 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="تعديل" name="">
									</form>
								</div>

								@stop