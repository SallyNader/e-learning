@extends('master')

@section('content')
 <br>
                                <br/>
                                <br/>  <br/>
                                <br/><br/>
                                <br/><br/>
                                <br/>
<div class="container" style="text-align: right;width: 1200px">
    <div class="row" style="margin-top: 60px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">لتسجيل الدخول</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6" style="margin-left: : 30px">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 control-label">الأسم</label>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-4 control-label">البريد الأليكتروني</label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password" class="col-md-4 control-label">كلمة السر</label>
                        </div>

                        <div class="form-group">
                            

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <label for="password-confirm" class="col-md-4 control-label">تأكيد كلمة السر</label>
                        </div>

                        <div class="form-group" style="text-align: left;">
                         <br>
                                <br/>
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل
                                </button>

                               
                                <br/>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <br>
                                <br/>
                                <br/> <br>
                                <br/>
                                <br/>
@stop