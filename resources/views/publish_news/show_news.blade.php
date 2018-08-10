@extends('layouts.admin.master')
@section('news', 'active')
@section('ListNews', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/News/create" style="font-weight: bold; border-bottom: 1px solid">Add News</a> |
                <a href="/Next"  style="font-weight: bold; border-bottom: 1px solid">Next News Info</a>
                <br><br>
                <div class="portlet-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" style="color:#4691c3;  text-align: center;"> {{Session::get('message')}} </div>
                    @elseif(Session::has('msg'))
                        <div class="alert alert-danger" style="text-align: center;"> {{Session::get('msg')}} </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">

                        <div class="searchBack">
                            <form action="{{ url('/SearchNews') }}" method="post" role="search">
                                {{ csrf_field() }}
                                <div style="float: right;"> <input type="text" size="50" name="q" class="form-control" placeholder="Search Here"> </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-default btnhead"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                              </form>
                        </div><br>


                        <thead>
                        <tr>
                            <th style="width: 80px;"> Date </th>
                            <th> Link Title </th>
                            <th> Heading </th>
                            <th> Details </th>
                            <th> Image </th>
                            <th> Main Menu </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allData as $data)
                            <tbody>
                            <tr class="odd gradeX">
                                <td> {{ $data->date }} </td>
                                <td style="font-size: 12px;"> {{ $data->linkt }} </td>
                                <td style="font-size: 12px;"> {{ $data->heading }} </td>
                                <td style="font-size: 12px;"> {{ $data->details }} </td>
                                <td style="width: 120px;">
                                    <img src="{{ $data->img }}"height="100" width="105"class="" />
                                </td>
                                <td style="font-size: 12px;"> {{ $data->mmenu }} </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="{{ '/News/'.$data->id.'/edit' }}">
                                                    <i class="btn btn-primary btn-sm">Edit</i>  </a>
                                            </li>
                                            <li><a href="">
                                                    {!! Form::open(['url' => '/News/'.$data->id , 'method' => 'DELETE']) !!}
                                                    <i> {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'] )!!}</i>
                                                    {!! Form::close() !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>

                    {{ $allData->links() }}
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
