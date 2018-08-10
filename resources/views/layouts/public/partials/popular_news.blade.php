
    <div class="col-md-12 line-drive"></div>

<!--========================================Popular News Content Start==============================================================-->
<div class="popularContent">
    @foreach($popular as $pp)
        <div class="col-md-3 col-sm-3" >
            <div class="p_News">
                <a href="{{ url('/details/'.$pp->id.'/'.$pp->mmenu.'/'.$pp->linkt) }}" class="color">
                    <div class="p_Img_a">
                        <img src="{{ $pp->img }}" class="p_img">
                    </div>
                    <div class="p_title">
                        {{ $pp->heading }}
                    </div>
                    <div class="p_txt">
                        {{ \Illuminate\Support\Str::words($pp->details,26,'....') }}
                        <a href="{{ url('/details/'.$pp->id.'/'.$pp->mmenu.'/'.$pp->linkt) }}" class="btn btn-danger btn-xs" style="font-size: 10px;">বিস্তারিত »</a>
                    </div>
                </a>
                <span style="font-size: 11px; color: #666; " class="dateTime">
                    <i aria-hidden="true" style="color: #666; margin-top: 10px;margin-left: 5px;" class="fa fa-clock-o"></i>
                    {{ date('j-F-Y', strtotime($pp->created_at)) }}
                    {{--at {{ date('H: i', strtotime($pp->created_at)) }}--}}
                </span>
            </div>
        </div>
    @endforeach
</div>{{--End Popular News Content--}}
    {{--<div class="col-md-12 line-drive"></div>--}}

<!--========================================Advertise Content Start==============================================================-->

    <div class="advertiseContent">
        <img src="{{ asset('assets/ad/14540729689086772930.jpg') }}" class="Ad_img">
    </div>
{{--Advertise Content--}}
