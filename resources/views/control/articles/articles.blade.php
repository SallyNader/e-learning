@extends('control.master')
@section('content')

<br/><br/><br/><br/>
    <div class="wm-section-title-two" style="margin-left: 70px;text-align: center;;margin-top: 50px"> <h2>بيانات <span>المقالات</span></h2> </div>
    
                            <div class="wm-event-register-list" style="width:1100px;margin-left: 70px">
                                <div class="wm-register-title">
                                    <h6 style="text-align: center;"></h6><a href="{{route('articlecontrol.create')}}" class="btn btn-info">أضافة مقال</a>
                                   
                                </div>
                                <div class="event-register-wrap">
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                        
                                            <li>تعديل البيانات</li>
                                               <li>مسح البيانات</li>


                                           
                                            <li>تاريخ النشر</li>

                                            <li>عنوان المقال</li>
                                            <li>صاحب المقال</li>
                                        </ul>

                                        @unless(empty($articles))

                                        @foreach($articles as $u)
                                        <ul class="wm-simple-list">
                                        <li><a href="{{route('articlecontrol.edit',$u->a_id)}}" class="btn btn-warning">تعديل</a></li>
                                            <li>

                                            <form action="{{route('articlecontrol.destroy',$u->a_id)}}" method="POST">
                                            	
 {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                                                   <input type="submit" style="background-color: 	 #d2143a;color: white" name="delete" value="حذف" class="btn btn-danger">

                                            </form>
                                              
                                            </li>
                                            <li>{{ date('F d, Y', strtotime($u->created_at)) }}</li>
                                            <li>{{substr($u->a_title,0,30)}}</li>
                                            <li>{{$u->a_publisher}}</li>
                                              <br/><hr/>
                                        </ul>

@endforeach
                                        @endunless
                                    </div>
                                    
                                    
                              
                                </div>
                            </div>
<br/><br/><br/><br/><br/>


@stop