@extends('layouts.singlepage')

@section('content')
    <div class="signbox">
        <div class="signbox-header" style="padding: inherit">
            <img src="{{ asset('img/pd-logo2.png') }}" class="wd-250" alt="Image">
            {{--<h4>LOGIN</h4>--}}
            {{--<p class="mg-b-0">Silahkan Login</p>--}}
        </div><!-- signbox-header -->
        <div class="signbox-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}" data-parsley-validate>
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-control-label">E-Mail Address <span class="tx-danger">*</span></label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                    @if ($errors->has('email'))
                        <p class="mg-b-20 mg-sm-b-30">{{ $errors->first('email') }}</p>
                        {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                    @endif
                </div>
                <button class="btn btn-dark btn-block">Send Password Reset Link</button>
                <div class="form-group">

                    {{--<div class="col-md-6 col-md-offset-4">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                            {{--Send Password Reset Link--}}
                        {{--</button>--}}
                    {{--</div>--}}
                </div>
            </form>
        </div><!-- signbox-body -->
    </div><!-- signbox -->
@endsection
