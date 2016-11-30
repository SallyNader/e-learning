@extends('master')

@section('content')
<div class="container" style="text-align: right;width: 1000px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">لتسجيل الدخول</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-4 control-label">البريد الألكتروني</label>
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
                            <div class="col-md-6 col-md-offset-4">
                               <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                                -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4" style="text-align: left;">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل الدخول
                                </button>

                            <!--    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br/><br/>
@endsection
