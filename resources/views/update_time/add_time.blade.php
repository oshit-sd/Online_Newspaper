@extends('layouts.admin.master')
@section('time', 'active')
@section('add_time', 'active')
@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{'/Time'}}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/Time" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Time</a>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'English Date' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="datepicker" type="text" class="form-control" name="date" placeholder="English Date" required>
                                {{--<input type="text" id="datepicker">--}}
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Bangla Date' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="bdate" type="text" class="form-control" name="bdate" placeholder="Bangla Date" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                {!! Form::reset('Reset', ['class' => 'btn btn-danger']) !!}
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
                @if(Session::has('message'))
                    <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
                @endif
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
