@extends('layouts.admin.master')
@section('news', 'active')
@section('add_news', 'active')

@section('content')
<div class="col-md-12">
@foreach($pnews as $pnews)
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-body"  style="background-color: #f7ffef;">
            <!-- BEGIN FORM-->
            {{--<form  id="registration_form" role="form" method="POST" action="{{ url('/News/'.$pnews->id) }}">--}}
            {!! Form::open(['url' => '/News/'.$pnews->id , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Date' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="date" type="text" value="{{ $pnews->date }}" class="form-control" name="date" required>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Link Title' ,  ['class' => 'col-md-2 control-label', ]) !!}
                    <div class="col-md-10">
                        <input id="linkt" type="text" value="{{ $pnews->linkt }}"  class="form-control" name="linkt" placeholder="Enter Link Title" required>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Link Title....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Heading' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="heading" type="text" value="{{ $pnews->heading }}"  class="form-control" name="heading" placeholder="Enter Heading" required>
                        <div class="form-control-focus"> </div>
                        <span class="help-block">Plsase Specify Heading....</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Details' ,  ['class' => 'col-md-2 control-label', ]) !!}
                    <div class="col-md-10">
                        <textarea name="details" rows="6" cols="112"  required>{{ $pnews->details }}</textarea>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Image' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10">
                        <input id="img" type="file" class="form-control" style="border-bottom: 0px solid;" name="img">
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Main Menu' ,  ['class' => 'col-md-2 control-label' ]) !!}
                    <div class="col-md-3">
                        <input id="linkt" readonly style="text-align: center;" type="text" value="{{ $pnews->mmenu }}"  class="form-control">
                    </div>
                    <div class="col-md-7">
                        <select name="mmenu" class="form-control" required>
                            <option value="">....Select That Menu....</option>
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
                        <select name="subMenu" class="form-control">
                            <option>{{ $pnews->subMenu }}</option>
                            <option>Select one...</option>
                            @foreach($allSM as $sm)
                                <option value="{{ $sm->smenu }}">{{ $sm->smenu }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Show' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10" style="padding-top: 10px;">
                        @if(isset($pnews->home))
                            <input type="checkbox" checked name="home" value="Home"> Home &nbsp;
                        @else
                            <input type="checkbox" name="home" value="Home"> Home &nbsp;
                        @endif

                        {{--@if(isset($pnews->head))--}}
                            {{--<input type="checkbox" checked name="head" value="Heading"> Heading &nbsp;--}}
                        {{--@else--}}
                             {{--<input type="checkbox" name="head" value="Heading"> Heading &nbsp;--}}
                        {{--@endif--}}

                        @if(isset($pnews->slide))
                            <input type="checkbox" checked name="slide" value="Slide"> Slide &nbsp;
                        @else
                            <input type="checkbox" name="slide" value="Slide"> Slide &nbsp;
                        @endif

                        {{--@if(isset($pnews->lhead))--}}
                            {{--<input type="checkbox" checked name="lhead" value="Last Heading"> Last Heading &nbsp;--}}
                        {{--@else--}}
                            {{--<input type="checkbox" name="lhead" value="Last Heading"> Last Heading &nbsp;--}}
                        {{--@endif--}}

                        @if(isset($pnews->popular))
                            <input type="checkbox" checked name="popular" value="Popular"> Popular &nbsp;
                        @else
                            <input type="checkbox" name="popular" value="Popular"> Popular &nbsp;
                        @endif

                        {{--@if(isset($pnews->verti))--}}
                            {{--<input type="checkbox" checked name="verti" value="Vertical"> Vertical--}}
                        {{--@else--}}
                            {{--<input type="checkbox" name="verti" value="Vertical"> Vertical--}}
                        {{--@endif--}}

                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Repoter Name' ,  ['class' => 'col-md-2 control-label',]) !!}
                    <div class="col-md-10">
                        <input id="rname" type="text" value="{{ $pnews->rname }}"  class="form-control" name="rname" placeholder="Repoter Name"  autofocus>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Designation' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10">
                        <input id="desi" type="text" value="{{ $pnews->desi }}"  class="form-control" name="desi" placeholder="Designation"  autofocus>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-2">
                        <a href="{{ url('/News') }}" class="btn btn-success">Back</a>
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
            {{--</form>--}}
            {!! Form::close() !!}
            <!-- END FORM-->
        </div>
    </div>
    <!-- END VALIDATION STATES-->
@endforeach
</div>
@endsection
