
<!--========================================Sort News Content Start==============================================================-->
<div class="SortContent">

    <div style="height: auto; width: 100%; float: left;" >
        {{--Biz--}}
        <div class="col-md-3 col-sm-3" style="float: left; clear: right;">
            <div class="biz_more_news" >
                <div class="biz_more_txt"><span class="biz_more_head">অর্থনীতি</span></div>
                <div class="more_biz">
                    @foreach($BizMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Business--}}
        <div class="col-md-3 col-sm-3" style="float: left; clear: right;">
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">বাণিজ্য</span></div>
                <div class="more_biz">
                    @foreach($BusMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Information Technology--}}
        <div class="col-md-3 col-sm-3" style="float: left; clear: right;">
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">তথ্যপ্রযুক্তি</span></div>
                <div class="more_biz">
                    @foreach($infoMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{--All World--}}
        <div class="col-md-3 col-sm-3" style="float: left; clear: right;" >
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">সারাদেশ</span></div>
                <div class="more_biz">
                    @foreach($allMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!--========================================Advertise Content Start==============================================================-->

    {{--<div class="advertiseContent">--}}
        {{--<img src="{{ asset('assets/ad/7819428585264475854.jpg') }}" class="Ad_img">--}}
    {{--</div>--}}
    {{--Advertise Content--}}


    <div style="height: auto; width: 100%; float: left;" >
        {{--Life Style--}}
        <div class="col-md-3 col-sm-3" style="margin-top: 15px; float: left;">
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">লাইফস্টাইল</span></div>
                <div class="more_biz">
                    @foreach($lypMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Literature--}}
        <div class="col-md-3 col-sm-3"style="margin-top: 15px; float: left;" >
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">সাহিত্য</span></div>
                <div class="more_biz">
                    @foreach($letMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Taught--}}
        <div class="col-md-3 col-sm-3"style="margin-top: 15px;   float: left;">
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">শিক্ষা</span></div>
                <div class="more_biz">
                    @foreach($techMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Health--}}
        <div class="col-md-3 col-sm-3"style="margin-top: 15px;  float: left;" >
            <div class="biz_more_news">
                <div class="biz_more_txt"><span class="biz_more_head">স্বাস্থ</span></div>
                <div class="more_biz">
                    @foreach($helMore as $rnm)
                        <a href="{{ url('/details/'.$rnm->id.'/'.$rnm->mmenu.'/'.$rnm->linkt) }}" style="text-decoration: none;">
                            <li class="biz_li"><span class="biztext">{{ $rnm->heading }}</span></li>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>{{--End Politics News Content--}}

