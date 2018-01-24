@extends('layouts.singlepage')

@section('content')
    <div class="signbox">
        <div class="signbox-header" style="padding: inherit">
            <img src="{{ asset('img/pd-logo2.png') }}" class="wd-250" alt="Image">
            {{--<h4>LOGIN</h4>--}}
            {{--<p class="mg-b-0">Silahkan Login</p>--}}
        </div><!-- signbox-header -->
        <div class="signbox-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}" data-parsley-validate="">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-control-label">E-Mail Address <span class="tx-danger">*</span></label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           placeholder="Enter your email" class="form-control" required autofocus>
                    @if ($errors->has('email'))
                        <p class="mg-b-20 mg-sm-b-30">{{ $errors->first('email') }}</p>
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                        {{--</span>--}}
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-control-label">Password <span class="tx-danger">*</span></label>
                    <input id="password" type="password" class="form-control" name="password"
                           placeholder="Enter your password" required>
                    @if ($errors->has('password'))
                        <p class="mg-b-20 mg-sm-b-30">{{ $errors->first('password') }}</p>
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label class="form-control-label">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                            Me
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
                <button class="btn btn-dark btn-block">Sign In</button>
                <div class="tx-center bd pd-10 mg-t-40">Not yet a member? <a href="{{ route('register') }}">Create an account</a></div>
            </form>
        </div><!-- signbox-body -->
    </div><!-- signbox -->
@endsection
