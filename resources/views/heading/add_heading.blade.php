@extends('layouts.admin.master')
@section('Heading', 'active')
@section('add_Heading', 'active')

@section('content')
    <div class="col-md-12" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{ url('/Heading') }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/Heading" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Heading</a>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Main Menu' ,  ['class' => 'col-md-2 control-label' ]) !!}
                            <div class="col-md-10">
                                <select name="mmenu" class="form-control" required >
                                    <option value="">Select Main Menu...</option>
                                    @foreach($allMm as $mm)
                                        <option value="{{ $mm->id }}">{{ $mm->mmenu }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Heading' ,  ['class' => 'col-md-2 control-labe', ]) !!}
                            <div class="col-md-10">
                                <input id="heading" type="text" class="form-control" name="heading" placeholder="Heading" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-2">
                                {!! Form::reset('Cancel', ['class' => 'btn btn-danger']) !!}
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
                @if(Session::has('message'))
                    <div class="alert alert-success" style="color:#4691c3;"> {{Session::get('message')}} </div>
                @endif
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
