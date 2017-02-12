@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="text-center"><h2>Login</h2></div>
                <div class="">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
<div class="row control-group">
 <div class="form-group col-xs-12 floating-label-form-group controls">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>E-Mail Address</label>

                            <div class="col-md-6 ">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" style="width:768px;">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
</div>
<div class="row control-group">
 <div class="form-group col-xs-12 floating-label-form-group controls">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Password</label>

                            <div class="col-md-6 ">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" style="width:768px;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</div>
</div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                    <a class="btn btn-link col-md-2 pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <!-- <a class="btn btn-link col-md-2 pull-r" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
