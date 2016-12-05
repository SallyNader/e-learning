@extends('control.master')
@section('content')

<br/><br/><br/><br/>
    <div class="wm-section-title-two" style="margin-left: 90px;text-align: center;;margin-top: 50px"> <h2>بيانات <span>أقسام الدورات</span></h2> </div>
    
                            <div class="wm-event-register-list" style="width:900px;margin-left: 160px">
                                <div class="wm-register-title">
                                    <h6 ></h6><a href="{{route('category.create')}}" class="btn btn-info">أضافة قسم</a>
                                   
                                </div>
                                <div class="event-register-wrap" >
                                    <div class="event-register-inner">
                                        <ul class="wm-title-list">
                                        
                                            <li>تعديل البيانات</li>
                                               <li>مسح البيانات</li>



                                            <li>القسم</li>
                                            <li style="margin-left: 160px">الكود</li>
                                        </ul>

                                        @unless(empty($cats))

                                        @foreach($cats as $u)
                                        <ul class="wm-simple-list">
                                        <li><a href="{{route('category.edit',$u->ca_id)}}" class="btn btn-warning">تعديل</a></li>
                                            <li>

                                            <form action="{{route('category.destroy',$u->ca_id)}}" method="POST">
                                            	
 {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                                                   <input type="submit" style="background-color: 	 #d2143a;color: white" name="delete" value="حذف" class="btn btn-danger">

                                            </form>
                                              
                                            </li>
                                            
                                            <li>{{$u->ca_name}}</li>
                                            <li style="margin-left: 160px">{{$u->ca_id}}</li>
                                              <br/><hr/>
                                        </ul>

@endforeach
                                        @endunless
                                    </div>
                                    
                                    
                              
                                </div>
                            </div>
<br/><br/><br/><br/><br/>


@stop