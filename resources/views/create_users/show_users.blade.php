@extends('layouts.admin.master')
@section('users_menu', 'active')
@section('list_users', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                {{--<a href="/CreateUsers" style="font-weight: bold; border-bottom: 1px solid">Add User</a> |--}}
                {{--<a href="/departments/trush"  style="font-weight: bold; border-bottom: 1px solid">Trush</a>--}}
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
                            <th> Sl. </th>
                            <th> Full Name </th>
                            <th> Email </th>
                            {{--<th> Gender </th>--}}
                            <th> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allU as $Key => $data)
                            <tbody>
                            <tr class="odd gradeX">
                                <td> {{ $Key+1  }} </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                {{--<a href="{{ '/departments/'.$data->id.'/edit' }}">--}}
                                                    {{--<i class="btn btn-primary btn-sm">Edit</i>  </a>--}}
                                            </li>
                                            @if($data->id == Auth::user()->id )
                                            <li><a href="">
                                                    {!! Form::open(['url' => '/Users/'.$data->id , 'method' => 'DELETE']) !!}
                                                    <i> {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'] )!!}</i>
                                                    {!! Form::close() !!}</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>

                    {{ $allU->links() }}
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
