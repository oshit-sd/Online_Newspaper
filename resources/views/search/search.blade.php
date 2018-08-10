@extends('layouts.public.master')

@section('section')
    <!--========================================Search News Content Start==============================================================-->
    <div class="row">
        <div class="popularContent" >
            <div style="width: 100%; text-align: center;">
                @if(isset($message))
                    <div  class="alert alert-danger">{{ $message }}</div>
                @endif
            </div>
            @if(isset($details))
                <div style="width: 101.9%; text-align: center; margin-bottom: -20px;">
                    @if(isset($query))
                        <div  class="alert alert-success">
                            <p>
                                The search results for your query <b style="color: #e85a8c;">{{ $query }}</b> are:
                            </p>
                        </div>
                    @endif
                </div>
                @foreach($details as $pp)
                <div class="col-md-3 col-sm-3">
                    <div class="sl_News" style="border-bottom: 2px solid #666;">
                        <a href="{{ url('/details/'.$pp->id.'/'.$pp->mmenu.'/'.$pp->linkt) }}" class="color">
                            <div class="p_Img_a">
                                <img src="{{ $pp->img}}" class="p_img">
                            </div>
                            <div class="p_title">
                                {{ $pp->heading }}
                            </div>
                            <div class="p_txt">
                                {{ \Illuminate\Support\Str::words($pp->details,13,'....') }}
                                <a href="{{ url('/details/'.$pp->id.'/'.$pp->mmenu.'/'.$pp->linkt) }}" class="btn btn-danger btn-xs" style="font-size: 10px;">বিস্তারিত »</a>
                            </div>
                        </a>
                    </div><br><br>
                </div>
                @endforeach
            @endif
        </div>{{--End Popular News Content--}}
    </div>
@endsection