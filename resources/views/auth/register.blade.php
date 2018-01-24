@extends('layouts.singlepage')

@section('content')
    <div class="signbox signup">
        <div class="signbox-header" style="padding: inherit">
            <img src="{{ asset('img/pd-logo2.png') }}" class="wd-250" alt="Image">
            {{--<h4>katniss</h4>--}}
            {{--<p class="mg-b-0">Responsive Bootstrap 4 Admin Template</p>--}}
        </div><!-- signbox-header -->
        <div class="signbox-body">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="form-control-label">Name</label>
                    <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Type your name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-control-label">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Type your email address" required>

                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-control-label">Password</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Type your password" required>

                    @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="form-control-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Type your confirmation password" required>
                </div>
                <div class="form-group mg-b-20 tx-12">By clicking Sign Up button below you agree to our <a href="">Terms of Use</a> and our <a href="">Privacy Policy</a></div>

                <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
            </form>
                <div class="tx-center bd pd-10 mg-t-40">Already a member? <a href="{{ route('login') }}">Sign In</a></div>

        </div><!-- signbox-body -->
    </div><!-- signbox -->

@endsection
