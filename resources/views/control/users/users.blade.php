@extends('control.master')
@section('content')

<br/><br/><br/><br/>
    <div class="wm-section-title-two" style="margin-left: 70px;text-align: center;;margin-top: 50px"> <h2>بيانات <span>الطلاب</span></h2> </div>
    
                            <div class="wm-event-register-list" style="width:1100px;margin-left: 70px">
                                <div class="wm-register-title">
                                    <h6 style="text-align: center;"></h6>
                                   
                                </div>
                                <div class="event-register-wrap">
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                        
                                            <li>تعديل البيانات</li>
                                               <li>مسح البيانات</li>


                                           
                                            <li>مقبول /غير مقبول</li>

                                            <li>البريد الألكتروني</li>
                                            <li>الأسم</li>
                                        </ul>

                                        @unless(empty($users))

                                        @foreach($users as $u)
                                        <ul class="wm-simple-list">
                                        <li><a href="{{route('user.edit',$u->id)}}" class="btn btn-warning">تعديل</a></li>
                                            <li>

                                            <form action="{{route('user.destroy',$u->id)}}" method="POST">
                                            	
 {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                                                   <input type="submit" style="background-color: 	 #d2143a;color: white" name="delete" value="حذف" class="btn btn-danger">

                                            </form>
                                              
                                            </li>
                                            <li>@if($u->accepted == 1)
                                                مقبول
                                                @elseif($u->accepted == 0)
                                                غير مقبول
                                                @endif



                                            </li>
                                            <li>{{$u->email}}</li>
                                            <li>{{$u->name}}</li>
                                              <br/><hr/>
                                        </ul>

@endforeach
                                        @endunless
                                    </div>
                                    
                                    
                              
                                </div>
                            </div>
<br/><br/><br/><br/><br/>


@stop