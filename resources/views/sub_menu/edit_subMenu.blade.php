@extends('layouts.admin.master')
@section('sub_menu', 'active')
@section('add_sub', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{'/SubMenu/'.$smenu->id}}">
                    {{ csrf_field() }}
                    <div class="form-body">

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Main Menu' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <select name="mmenu" class="form-control">
                                    <option>{{ $smenu->mmenu }}</option>
                                    @foreach($allMm as $mm)
                                        <option>{{ $mm->mmenu }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Sub Menu' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" value="{{ $smenu->smenu }}" class="form-control" name="smenu" placeholder="Sub Menu" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                <a href="{{ url('/SubMenu') }}" class="btn btn-success">Back</a>
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
