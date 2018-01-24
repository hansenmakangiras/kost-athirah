@extends('layouts.app')
@section('title','Detail Kamar')
@section('breadcrumb')
    <div class="kt-breadcrumb">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="/">Home</a>
            <a class="breadcrumb-item" href="{{ route('kamar.index') }}">Detail Kamar</a>
            <span class="breadcrumb-item active">Add</span>
        </nav>
    </div><!-- kt-breadcrumb -->
@endsection
@section('content')
    <div class="kt-mainpanel">
        <div class="kt-pagetitle">
            <h5>Tambah Detail Kamar</h5>
        </div><!-- kt-pagetitle -->
        <div class="kt-pagebody">
            @if(session('Berhasil'))
                @component('widget.alert-success')
                    @slot('judul')
                        Yeaayyy!
                    @endslot
                    {{ session('Berhasil') }}
                @endcomponent
            @endif
            @if(session('Gagal'))
                @component('widget.alert-danger')
                    @slot('judul')
                        Ooopppsss!
                    @endslot
                    {{ session('Gagal') }}
                @endcomponent
            @endif
                <div class="card pd-20 pd-sm-30 mg-t-10">
                    <h6 class="card-body-title">Basic Form Wizard with Validation</h6>
                    <p class="mg-b-20 mg-sm-b-30">A basic form wizard with form validation using Parsley js form validation plugin.</p>

                    <div id="wizard">
                        <h3>Personal Information</h3>
                        <section>
                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            <div class="form-group wd-xs-300">
                                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
                            </div><!-- form-group -->
                            <div class="form-group wd-xs-300">
                                <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                                <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
                            </div><!-- form-group -->
                        </section>
                        <h3>Billing Information</h3>
                        <section>
                            <p>Wonderful transition effects.</p>
                            <div class="form-group wd-xs-300">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
                            </div><!-- form-group -->
                        </section>
                        <h3>Payment Details</h3>
                        <section>
                            <p>The next and previous buttons help you to navigate through your content.</p>
                        </section>
                    </div>
                </div><!-- card -->
            <div class="row row-sm mg-t-10">
                <div class="col-xl-10">
                    <div class="col-xl-12 mg-t-30 mg-xl-t-0">

                        <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                            {{--{{ Form::open(array('url'=>'kamar.create','data-parsley-validate')) }}--}}
                            {{--<div class="row row-xs">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Rumpun ID:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{Form::text('rumpun_ID','',array('class'=>'form-control','placeholder'=>'Masukkan rumpun ID','required'))}}--}}
                                {{--</div>--}}
                            {{--</div><!-- row -->--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Nama:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{Form::text('nama','',array('class'=>'form-control','placeholder'=>'Masukkan nama','required'))}}--}}
                                {{--</div>--}}
                            {{--</div><!-- row -->--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Username:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{Form::text('username','',array('class'=>'form-control','placeholder'=>'Masukkan username'))}}--}}
                                {{--</div>--}}
                            {{--</div><!-- row -->--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Email:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{ Form::text('email','',array('class'=>'form-control','placeholder'=>'Masukkan email', 'required')) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Telepon:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{ Form::text('telepon','',array('class'=>'form-control','placeholder'=>'Masukkan telepon')) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Role:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--@foreach ($roles as $role)--}}
                                        {{--<label class="ckbox">--}}
                                            {{--{{ Form::checkbox('roles[]', $role->id, array('type'=>'checkbox','required')) }}--}}
                                            {{--<span>{{ ucfirst($role->name) }}</span>--}}
                                        {{--</label>--}}
                                    {{--@endforeach--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Password:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{ Form::password('password',array('class'=>'form-control','placeholder'=>'Masukkan password')) }}--}}
                                {{--</div>--}}
                            {{--</div><!-- row -->--}}
                            {{--<div class="row row-xs mg-t-20">--}}
                                {{--<label class="col-sm-3 form-control-label"><span class="tx-danger">*</span> Confirm Password:</label>--}}
                                {{--<div class="col-sm-8 mg-t-10 mg-sm-t-0">--}}
                                    {{--{{Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Masukkan Confirm Password','required'))}}--}}
                                {{--</div>--}}
                            {{--</div><!-- row -->--}}
                            {{--{{ Form::hidden('level','user') }}--}}
                            {{--{{ Form::hidden('is_admin',0) }}--}}
                            {{--<div class="row row-xs mg-t-30">--}}
                                {{--<div class="col-sm-8 mg-l-auto">--}}
                                    {{--<div class="form-layout-footer">--}}
                                        {{--<button type="submit" class="btn btn-default mg-r-5">Create Form</button>--}}
                                        {{--<button type="reset" class="btn btn-secondary">Cancel</button>--}}
                                    {{--</div><!-- form-layout-footer -->--}}
                                {{--</div><!-- col-8 -->--}}
                            {{--</div>--}}
                            {{--{{ Form::close() }}--}}
                        </div><!-- card -->
                    </div><!-- col-6 -->
                </div><!-- row -->
                <div class="col-xl-2">
                    <a href="{{ route('kamar.index') }}" class="btn btn-block btn-outline-info">
                        List Kamar
                    </a>
                </div>
            </div>

        </div><!-- kt-pagebody -->

        <div class="kt-footer">
            <span>Copyright &copy;. All Rights Reserved. Aset Pemerintah Kabupaten Soppeng.</span>
            <span>Created by: CV. Dianra.</span>
        </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->
@endsection
@push('createKamar')
    <script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('lib/jquery.steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('lib/parsleyjs/parsley.js') }}"></script>
    <script>
        $(document).ready(function(){
            'use strict';

            $('#wizard').steps({
                headerTag: 'h3',
                bodyTag: 'section',
                autoFocus: true,
                //cssClass: 'wizard step-equal-width',
                //stepsOrientation: 1,
                titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
                onStepChanging: function (event, currentIndex, newIndex) {
                    if(currentIndex < newIndex) {
                        // Step 1 form validation
                        if(currentIndex === 0) {
                            var fname = $('#firstname').parsley();
                            var lname = $('#lastname').parsley();

                            if(fname.isValid() && lname.isValid()) {
                                return true;
                            } else {
                                fname.validate();
                                lname.validate();
                            }
                        }

                        // Step 2 form validation
                        if(currentIndex === 1) {
                            var email = $('#email').parsley();
                            if(email.isValid()) {
                                return true;
                            } else { email.validate(); }
                        }
                        // Always allow step back to the previous step even if the current step is not valid.
                    } else { return true; }
                }
            });
        });
    </script>
@endpush