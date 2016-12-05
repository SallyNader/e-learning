@extends('control.master')
@section('content')

<br/><br/><br/><br/>
    <div class="wm-section-title-two" style="margin-left: 70px;text-align: center;;margin-top: 50px"> <h2>بيانات <span>الفيديوهات</span></h2> </div>
    
                            <div class="wm-event-register-list" style="width:1100px;margin-left: 70px">
                                <div class="wm-register-title">
                                    <h6 style="text-align: center;"></h6><a href="{{route('video.create')}}" class="btn btn-info">أضافة فيديو جديد</a>
                                   
                                </div>
                                <div class="event-register-wrap">
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                                            

                                            <li>تعديل البيانات</li>
                                               <li>مسح البيانات</li>


                                           
                                            <li>تاريخ البدء</li>

                                            <li>الدورة التابعة له</li>
                                            <li>أسم الفيديو</li>
                                        </ul>

                                        @unless(empty($videos))

                                        @foreach($videos as $u)
                                        <ul class="wm-simple-list">
                                        <li><a href="{{route('video.edit',$u->v_id)}}" class="btn btn-warning">تعديل</a></li>
                                            <li>

                                            <form action="{{route('video.destroy',$u->v_id)}}" method="POST">
                                            	
                                             {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                                                   <input type="submit" style="background-color: 	 #d2143a;color: white" name="delete" value="حذف" class="btn btn-danger">

                                            </form>
                                              
                                            </li> 
                                           
                                            <li>{{ date('F d, Y', strtotime($u->startDate)) }}
</li>
                                            <li>{{$u->course_id}}</li>
                                            <li>{{$u->v_name}}</li>
                                              <br/><hr/>
                                        </ul>

@endforeach
                                        @endunless
                                    </div>
                                    
                                    
                              
                                </div>
                            </div>
<br/><br/><br/><br/><br/>


@stop