@extends('control.master')
@section('content')

<div class="wm-student-dashboard-form" style="margin-left: 40px;width: 1000px">
									<div class="wm-full-title ">
										<h2 style="text-align: center;">أضافة لقب جديد </h2>
									</div>
									<form  action="{{route('typecontrol.store')}}" method="POST" style="margin-left:  280px;width: 1000px;text-align: right;">


									{!! method_field('POST') !!} 

                                                  {{ csrf_field() }}
										<ul>
											<li>
<label>اللقب</label>
											<input type="text" name="name" value="{{old('name')}}" >
											<p style="color:blue">{{$errors->first('name')}}</p>

											</li>
																													 
		                                </ul>
		                                <input class="btn btn-primary" type="submit" value="أضافة" name="">
									</form>
								</div>

								@stop