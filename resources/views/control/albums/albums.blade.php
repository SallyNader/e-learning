@extends('control.master')
@section('content')

<br/><br/><br/><br/>
    <div class="wm-section-title-two" style="margin-left: 70px;text-align: center;;margin-top: 50px"> <h2>بيانات <span>الألبومات</span></h2> </div>
    
                            <div class="wm-event-register-list" style="width:900px;margin-left: 90px">
                                <div class="wm-register-title"  style="margin-left: 90px">
                                    <h6 style="text-align: center;"></h6><a href="{{route('albumcontrol.create')}}" class="btn btn-info">أضافة ألبوم</a>
                                   
                                </div>
                                <div class="event-register-wrap"  style="margin-left: 90px">
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                        
                                            <li>تعديل البيانات</li>
                                               <li>مسح البيانات</li>


                                     

                                            
                                            <li  style="margin-left: 260px">الأسم</li>
                                        </ul>

                                        @unless(empty($albums))

                                        @foreach($albums as $u)
                                        <ul class="wm-simple-list">
                                        <li><a href="{{route('albumcontrol.edit',$u->b_id)}}" class="btn btn-warning">تعديل</a></li>
                                            <li>

                                            <form action="{{route('albumcontrol.destroy',$u->b_id)}}" method="POST">
                                            	
 {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                                                   <input type="submit" style="background-color: 	 #d2143a;color: white" name="delete" value="حذف" class="btn btn-danger">

                                            </form>
                                              
                                            </li>
                                            
                                            
                                            <li  style="margin-left: 260px">{{$u->b_name}}</li>
                                              <br/><hr/>
                                        </ul>

@endforeach
                                        @endunless
                                    </div>
                                    
                                    
                              
                                </div>
                            </div>
<br/><br/><br/><br/><br/>


@stop