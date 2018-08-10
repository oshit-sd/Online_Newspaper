@extends('layouts.admin.master')
@section('sub_menu', 'active')
@section('add_sub', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{'/SubMenu'}}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/SubMenu" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Sub Menu</a>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Main Menu' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <select name="mmenu" class="form-control">
                                    <option>Select Main Menu</option>
                                    @foreach($allMm as $mm)
                                        <option>{{ $mm->mmenu }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Sub Menu' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" class="form-control" name="smenu" placeholder="Sub Menu" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                {!! Form::reset('Cancel', ['class' => 'btn btn-danger']) !!}
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
