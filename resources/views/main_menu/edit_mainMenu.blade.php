@extends('layouts.admin.master')
@section('main_menu', 'active')
@section('add_menu', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                @if ($errors->has('password') or $errors->has('email'))
                    <span class="help-block">
                    <div class="alert alert-danger">{{ $errors->first('email') }} <br> {{ $errors->first('password') }}</div>
                </span>
                @endif
                <form  id="registration_form" role="form" method="POST" action="{{ url('/MainMenu/'.$mmenu->id) }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/MainMenu" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Main Menu</a>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Main Menu' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="mmenu" type="text" value="{{ $mmenu->mmenu }}" class="form-control" name="mmenu" placeholder="Main Menu" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                <a href="{{ url('/MainMenu') }}" class="btn btn-success">Back</a>
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
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
