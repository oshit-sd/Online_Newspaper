<!--========================================Politics News Content Start==============================================================-->
<div class="popularContent">
    <div class="politics" style="width: 101.9%;"> <span class="pt_head"> রাজনীতি </span></div>
    @foreach($rajniti as $rn)
        @if(isset($rn->home) == $rn->home)
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
        @endif
    @endforeach

    <div class="col-md-3 col-sm-3" >
        <div class="pt_more_news">
            <div class="more_news_txt"><span class="more_head">আরো খবর</span></div>
            <div class="more_pt">
                @foreach($rnMore as $rnm)
                    <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                        <li class="pt_li"><span class="text">{{ $rnm->heading }}</span></li>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>{{--End Politics News Content--}}

<!--========================================Advertise Content Start==============================================================-->

<div class="advertiseContent">
    <img src="{{ asset('assets/ad/16966114380712960917.jpg') }}" class="Ad_img">
</div>
{{--Advertise Content--}}
