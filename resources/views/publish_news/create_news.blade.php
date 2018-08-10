@extends('layouts.admin.master')
@section('news', 'active')
@section('add_news', 'active')

@section('content')
<div class="col-md-12">
    @if(Session::has('message'))
        <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
@endif
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-body"  style="background-color: #f7ffef;">
            <!-- BEGIN FORM-->
            {{--<form  id="registration_form" role="form" method="POST" action="{{ url('/News') }}">--}}
                {!! Form::open(['url' => '/News' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                {{ csrf_field() }}
            <div class="form-body">
                <a href="/News" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">View News</a>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Date' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="datepicker" type="text" class="form-control"placeholder="Enter Date"  name="date" required>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Link Title' ,  ['class' => 'col-md-2 control-label', ]) !!}
                    <div class="col-md-10">
                        <input id="linkt" type="text" class="form-control" name="linkt" placeholder="Enter Link Title" required >
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Link Title....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Heading' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="heading" type="text" class="form-control" name="heading" placeholder="Enter Heading" required>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Heading....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Details' ,  ['class' => 'col-md-2 control-label', ]) !!}
                    <div class="col-md-10">
                        <textarea name="details" rows="8" cols="112"  required></textarea>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Image' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10">
                        <input id="img" type="file" class="form-control" style="border-bottom: 0px solid;" name="img">
                    </div>
                </div><br><br>
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
                <div class="form-group form-md-line-input" ></div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Sub Menu' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10">
                        <select name="subMenu" class="form-control" >
                            <option value="">Select Sub Menu...</option>
                            @foreach($allSM as $sm)
                                <option value="{{ $sm->smenu }}">{{ $sm->smenu }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Show' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10" style="padding-top: 10px;">
                      <input type="checkbox" name="home" value="Home"> Home &nbsp;
                      {{--<input type="checkbox" name="head" value="Heading"> Heading &nbsp;--}}
                      <input type="checkbox" name="slide" value="Slide"> Slide &nbsp;
                      {{--<input type="checkbox" name="lhead" value="Last Heading"> Last Heading &nbsp;--}}
                      <input type="checkbox" name="popular" value="Popular"> Popular &nbsp;
                      {{--<input type="checkbox" name="verti" value="Vertical"> Vertical--}}
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Repoter Name' ,  ['class' => 'col-md-2 control-label',]) !!}
                    <div class="col-md-10">
                        <input id="rname" type="text" class="form-control" name="rname" placeholder="Repoter Name" >
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Designation' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10">
                        <input id="desi" type="text" class="form-control" name="desi" placeholder="Designation" >
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-2">
                        {!! Form::reset('Reset', ['class' => 'btn btn-danger']) !!}
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
            {{--</form>--}}
        {!! Form::close() !!}
            <!-- END FORM-->
        </div>
    </div>
    <!-- END VALIDATION STATES-->
</div>
@endsection
