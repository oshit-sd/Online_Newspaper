@extends('layouts.public.master')

@section('section')
    <!--========================================Main Content Start==============================================================-->
    <div class="row mainContent">
        <div class="Details">
            @foreach($details as $det)
            <div class="col-md-9">
                <div class="news_Menu">
                    <span class="arrowM">»</span> <a href="{{ url('/') }}"> প্রচ্ছদ</a>
                    <span class="arrowM">»</span> <a href="{{ url('/MNews/'.$det->id.'/'.$det->mmenu) }}"> {{ $det->mmenu }}</a>
                </div>

                <div class="news_title">
                     {{ $det->heading }}
                </div>

                <span class="news_details_content">
                    <div class="news_image"><img src="{{ $det->img }}" class="dImg" ></div>

                    <p class="news_des"> {{ $det->details }}
                        <br>
                         <span style="font-size: 12px; color: #666;" >
                            <i aria-hidden="true" style="color: #666; margin-top: 10px;" class="fa fa-clock-o"></i>
                            {{ date('j-F-Y', strtotime($det->created_at)) }}
                            {{--{{ date('H: i', strtotime($det->created_at)) }}--}}
                         </span>
                        <br><br><br>
                    </p>
                    <div style="border-top: 1px solid #ddddbb; float: left; width: 100%; height: auto; padding-left: 10px;padding-top: 10px; padding-bottom: 10px; margin-top: -10px; background-color: #f8f8f8">
                        {{--<span style="color: #1c558f;">Reporter Name</span> : <span style="color: #09a674; font-weight: bold;">{{ $det->rname }}</span> <br>--}}
                        {{--<span style="color: #1c558f;">Designatin</span> : <span style="color: #09a674; font-weight: bold;">{{ $det->desi }}</span>--}}
                    </div>
                </span>



                <!--========================================Advertise Content Start==============================================================-->

                <div class="advertiseContent" style="margin-top: -0px; margin-bottom: 20px;">
                    <img src="{{ asset('assets/ad/16258459833714372429.gif') }}"class="Ad_img"  style="width: 102%;">
                </div>
            {{--Advertise Content--}}

                <!--========================================Similar News Content Start============================================-->
                <div class="sl_news_title">Related News</div>
                {{--<div class="similarContent">--}}
                        <div class="relativeDiv">
                            @foreach($relNews as $rn)
                            <div class="col-md-4">
                                <div class="sl_News" style="border-bottom: 2px solid #666;">
                                    <a href="{{ url('/details/'.$rn->id.'/'.$rn->mmenu.'/'.$rn->linkt) }}"  class="color">
                                        <div class="sl_Img_a">
                                            {{--<img src="{{ asset('assets/slider_img/images/9.jpg') }}" class="sl_img">--}}
                                            <img src="{{ $rn->img }}" class="sl_img">
                                        </div>
                                        <div class="sl_title">
                                            {{ $rn->heading }}
                                        </div>
                                        <div class="sl_txt">
                                            {{ \Illuminate\Support\Str::words($rn->details,13,'....') }}
                                            <a href="{{ url('/details/'.$rn->id.'/'.$rn->mmenu.'/'.$rn->linkt) }}" class="btn btn-danger btn-xs" style="font-size: 10px;">বিস্তারিত »</a>
                                        </div>
                                    </a>
                                    <span style="font-size: 11px; color: #666; " class="dateTime">
                                         <i aria-hidden="true" style="color: #666; margin-top: 8px;margin-left: 5px;" class="fa fa-clock-o"></i>
                                        {{ date('j-F-Y', strtotime($rn->created_at)) }}
                                        {{-- at {{ date('H: i', strtotime($rn->created_at)) }}--}}
                                        {{--<span style="margin-top: 8px; color: #000; margin-right: 5px; float: right;">{{ $rn->mmenu }} </span>--}}
                                     </span>

                                </div>
                            </div>
                        @endforeach
                        </div>
                {{--</div>--}}{{--End Popular News Content--}}

            </div>
            @endforeach

            {{--More News--}}
            <div class="col-md-3 col-sm-3" style="float: left;">
                <div class="biz_more_news">
                    <div class="biz_more_txt"><span class="biz_more_head">আরো খবর</span></div>
                    <div class="more_biz">
                        @foreach($moreNews as $mn)
                            <a href="{{ url('/details/'.$mn->id.'/'.$mn->mmenu.'/'.$mn->linkt) }}" style="text-decoration: none;">
                                <li class="biz_li"><span class="biztext"> {{ $mn->heading }}</span></li>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

                {{--Last News--}}
                <div class="col-md-3 col-sm-3" style="margin-top: 15px; float: left;">
                    <div class="biz_more_news">
                        <div class="biz_more_txt"><span class="biz_more_head">সর্বশেষ</span></div>
                        <div class="more_biz">
                            @foreach($LastNews as $ln)
                                <a href="{{ url('/details/'.$ln->id.'/'.$ln->mmenu.'/'.$ln->linkt) }}" style="text-decoration: none;">
                                    <li class="biz_li"><span class="biztext"> {{ $ln->heading }} </span></li>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{--Last News--}}
                <div class="col-md-3 col-sm-3" style="margin-top: 15px; float: left;">
                    <div class="biz_more_news">
                        <div class="">
                            <img src="{{ asset('assets/ad/17371109300133847010.gif') }}" class="pt_ad_img">
                        </div>
                    </div>
                </div>





        </div>
    </div>{{--End Main Content--}}
@endsection