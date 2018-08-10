{{--Last News--}}
<div class="col-md-3 col-sm-3" >
    <div class="sld_more_news">
        <div class="sld_more_txt"><span class="sld_more_head">সর্বশেষ</span></div>
        <div class="more_sld">
            @foreach($LastNews as $ln)
                <a href="{{ url('/details/'.$ln->id.'/'.$ln->mmenu.'/'.$ln->linkt) }}" style="text-decoration: none;">
                    <li class="sld_li"><span class="sldtext"> {{ $ln->heading }} </span></li>
                </a>
            @endforeach
        </div>
    </div>
</div>

{{--Ad--}}
<div class="col-md-3 col-sm-3" >
    <div class="sl_ad">
        <img src="{{ asset('assets/ad/406453809183553472.gif') }}" class="sl_ad_img">
    </div>
</div>