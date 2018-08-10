@extends('layouts.admin.master')
@section('users_menu', 'active')
@section('add_user', 'active')

@section('content')
<div class="col-md-12">

    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-body"  style="background-color: #f7ffef;">
            <!-- BEGIN FORM-->
            @if ($errors->has('password') or $errors->has('email'))
                <span class="help-block">
                    <div class="alert alert-danger">{{ $errors->first('email') }} <br> {{ $errors->first('password') }}</div>
                </span>
            @endif
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
            <div class="form-body">
                <a href="/ShowUsers" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Users</a>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Full Name' ,  ['class' => 'col-md-3 control-labe', ]) !!}
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Full name" required autofocus>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Your Full Name....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Email' ,  ['class' => 'col-md-3 control-labe',  ]) !!}
                    <div class="col-md-9">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" required>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Your Valid Email....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Password' ,  ['class' => 'col-md-3 control-labe', ]) !!}
                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Enter password" required>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Your Password....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Confirm Password' ,  ['class' => 'col-md-3 control-labe',  ]) !!}
                    <div class="col-md-9">
                        <input id="password-confirm" type="password" class="form-control"placeholder="Confirm password" name="password_confirmation" required>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Your Confirm Password....</span>
                    </div>
                </div>
                {{--<div class="form-group form-md-line-input">--}}
                    {{--{!! Form::label('form_control_1', 'Gender' ,  ['class' => 'col-md-3 control-labe',  ]) !!}--}}
                    {{--<div class="col-md-9">--}}
                      {{--<input type="radio" name="gender"> Male--}}
                      {{--<input type="radio" name="gender"> Female--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-3">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        {!! Form::reset('Cancel', ['class' => 'btn btn-danger']) !!}
                    </div>
                </div>
            </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    <!-- END VALIDATION STATES-->
</div>
@endsection
