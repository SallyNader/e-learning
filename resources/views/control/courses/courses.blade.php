@extends('control.master')
@section('content')

<br/><br/><br/><br/>
    <div class="wm-section-title-two" style="margin-left: 70px;text-align: center;;margin-top: 50px"> <h2>بيانات <span>الدورات</span></h2> </div>
    
                            <div class="wm-event-register-list" style="width:1100px;margin-left: 70px">
                                <div class="wm-register-title">
                                    <h6 style="text-align: center;"></h6><a href="{{route('coursecontrol.create')}}" class="btn btn-info">أضافة دورة جديدة</a>
                                   
                                </div>
                                <div class="event-register-wrap">
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                                            

                                            <li>تعديل البيانات</li>
                                               <li>مسح البيانات</li>


                                           
                                            <li>القسم</li>

                                            <li>المدرب</li>
                                            <li>الأسم</li>
                                        </ul>

                                        @unless(empty($courses))

                                        @foreach($courses as $u)
                                        <ul class="wm-simple-list">
                                        <li><a href="{{route('coursecontrol.edit',$u->c_id)}}" class="btn btn-warning">تعديل</a></li>
                                            <li>

                                            <form action="{{route('coursecontrol.destroy',$u->c_id)}}" method="POST">
                                            	
                                             {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                                                   <input type="submit" style="background-color: 	 #d2143a;color: white" name="delete" value="حذف" class="btn btn-danger">

                                            </form>
                                              
                                            </li> 
                                           
                                            <li>{{$u->category->ca_name}}</li>
                                            <li>{{$u->teacher->t_name}}</li>
                                            <li>{{$u->c_name}}</li>
                                              <br/><hr/>
                                        </ul>

@endforeach
                                        @endunless
                                    </div>
                                    
                                    
                              
                                </div>
                            </div>
<br/><br/><br/><br/><br/>


@stop