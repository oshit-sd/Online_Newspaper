<!--========================================Politics News Content Start==============================================================-->
<div class="popularContent">
    <div class="politics"  style="width: 101.9%;"> <span class="pt_head"> রাজধানী </span></div>
    @foreach($national as $rn)
        <div class="col-md-3 col-sm-3" >
            <div class="p_News"style="padding-bottom: 5px;">
                <a href="{{ url('/details/'.$rn->id.'/'.$rn->mmenu.'/'.$rn->linkt) }}"  class="color">
                    <div class="p_Img_a">
                        <img src="{{ $rn->img }}" class="p_img">
                    </div>
                    <div class="p_title">
                        {{ $rn->heading }}
                    </div>
                    <div class="p_txt">
                        {{ \Illuminate\Support\Str::words($rn->details,28,'....') }}
                        <a href="{{ url('/details/'.$rn->id.'/'.$rn->mmenu.'/'.$rn->linkt) }}" class="btn btn-danger btn-xs" style="font-size: 10px;">বিস্তারিত »</a>
                    </div>
                </a>
                <span style="font-size: 11px; color: #666; " class="dateTime">
                    <i aria-hidden="true" style="color: #666; margin-top: 5px;margin-left: 5px;" class="fa fa-clock-o"></i>
                    {{ date('j-F-Y', strtotime($rn->created_at)) }}
                    {{--at {{ date('H: i', strtotime($rn->created_at)) }}--}}
                </span>
            </div>
        </div>
    @endforeach

    <div class="col-md-3 col-sm-3" >
        <div class="pt_more_news" >
            <div class="more_news_txt"><span class="more_head">আরো খবর</span></div>
            <div class="more_pt">
                @foreach($natMore as $rnm)
                    <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                        <li class="pt_li"><span class="text">{{ $rnm->heading }}</span></li>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>{{--End Politics News Content--}}






{{--<!--========================================Politics News Content Start==============================================================-->--}}
{{--<div class="politicsContent">--}}
    {{--<div class="politics"> <span class="pt_head"> জাতীয় </span></div>--}}
    {{--@foreach($national as $rn)--}}
        {{--<div class="col-md-3 col-sm-3" >--}}
            {{--<div class="pt_News">--}}
                {{--<a href="{{ url('/details/'.$rn->id.'/'.$rn->mmenu.'/'.$rn->linkt) }}"  class="color">--}}
                    {{--<div class="pt_Img_a">--}}
                        {{--<img src="{{ asset('assets/images/pi.jpg') }}" class="pt_img">--}}
                    {{--</div>--}}
                    {{--<div class="pt_title">--}}
                        {{--{{ $rn->heading }}--}}
                    {{--</div>--}}
                    {{--<div class="pt_txt">--}}
                        {{--{{ \Illuminate\Support\Str::words($rn->details,13,'....') }}--}}
                        {{--<a href="{{ url('/details/'.$rn->id.'/'.$rn->mmenu.'/'.$rn->linkt) }}" class="btn btn-danger btn-xs" style="font-size: 10px;">বিস্তারিত »</a>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

    {{--<div class="col-md-3 col-sm-3" >--}}
        {{--<div class="pt_more_news">--}}
            {{--<div class="more_news_txt"><span class="more_head">আরো খবর</span></div>--}}
            {{--<div class="more_pt">--}}
                {{--@foreach($natMore as $rnm)--}}
                    {{--<a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">--}}
                        {{--<li class="pt_li"><span class="text">{{ $rnm->heading }}</span></li>--}}
                    {{--</a>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--Pt_Ad--}}
    {{--<div class="col-md-3 col-sm-3" >--}}
        {{--<div class="pt_ad">--}}
            {{--<img src="{{ asset('assets/images/gh.gif') }}" class="pt_ad_img">--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}{{--End Politics News Content--}}
