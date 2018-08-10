@extends('layouts.admin.master')
@section('main_menu', 'active')
@section('list_menu', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/MainMenu/create" style="font-weight: bold; border-bottom: 1px solid">Add Main Menu</a> |
                <a href="/departments/trush" style="font-weight: bold; border-bottom: 1px solid">Trush</a>
                <br><br>
                <div class="portlet-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
                    @elseif(Session::has('msg'))
                        <div class="alert alert-danger" style=" text-align: center;"> {{Session::get('msg')}} </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                        <tr>
                            <th> Select </th>
                            <th> Main Menu </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allData as $data)
                        <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td>{{ $data->mmenu }}</td>

                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{{ '/MainMenu/'.$data->id.'/edit' }}">
                                            <i class="btn btn-primary btn-sm">Edit</i>  </a>
                                        </li>
                                        <li><a href="">
                                            {!! Form::open(['url' => '/MainMenu/'.$data->id , 'method' => 'DELETE']) !!}
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
