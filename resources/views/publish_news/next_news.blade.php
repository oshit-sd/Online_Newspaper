@extends('layouts.admin.master')
@section('news', 'active')
@section('ListNews', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/News/create" style="font-weight: bold; border-bottom: 1px solid">Add News</a> |
                <a href="/News"  style="font-weight: bold; border-bottom: 1px solid">Back News Info</a>
                <br><br>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                        <tr>
                            <th> Heading </th>
                            <th  style="width: 100px;"> Main Menu </th>
                            <th  style="width: 90px;"> Sub Menu </th>
                            <th style="width: 70px;"> Home </th>
                            <th style="width: 70px;"> Slide </th>
                            {{--<th style="width: 55px;"> Slide </th>--}}
                            {{--<th style="width: 40px;"> Last Heading </th>--}}
                            <th style="width: 80px;"> Popular </th>
                            {{--<th style="width: 55px;"> Vertical </th>--}}
                            <th style="width: 120px;"> Repoter Name </th>
                            <th style="width: 75px;"> Designation </th>
                            <th style="width: 55px;"> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allData as $data)
                            <tbody>
                            <tr class="odd gradeX">
                                <td style="font-size: 12px;"> {{ $data->heading }} </td>
                                <td style="font-size: 12px;"> {{ $data->mmenu }} </td>
                                <td style="font-size: 12px;"> {{ $data->subMenu }} </td>
                                <td style="font-size: 12px;">
                                    {{ $data->home }}
                                    <a href="{{ url('/DHome/'.$data->id) }}" style="color:#e16b85;"><i class="fa fa-times"></i></a>
                                </td>

                                <td style="font-size: 12px;">
                                    {{ $data->slide }}
                                    <a href="{{ url('/DSlide/'.$data->id) }}" style="color:#e16b85;"><i class="fa fa-times"></i></a>
                                </td>
                                {{--<td style="font-size: 12px;"> {{ $data->slide }} </td>--}}
                                {{--<td style="width: 120px;"> {{ $data->lhead }} </td>--}}
                                <td style="font-size: 12px;">
                                    {{ $data->popular }}
                                    <a href="{{ url('/DPopu/'.$data->id) }}" style="color:#e16b85;"><i class="fa fa-times"></i></a>
                                </td>
                                {{--<td style="font-size: 12px;"> {{ $data->verti }} </td>--}}
                                <td style="font-size: 12px;"> {{ $data->rname }} </td>
                                <td style="font-size: 12px;"> {{ $data->desi }} </td>
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
