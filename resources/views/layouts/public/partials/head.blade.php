<html>
<head>
    <title>World-Wide-News</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/ad/N_Judah_logo.png')}}"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{  asset('assets/myCss/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{  asset('assets/myCss/details.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/myCss/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/myCss/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/myCss/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/myCss/slider.css')}}" media="screen" />
    <style type="text/css">a#vlb{display:none}</style>
</head>
<body>
<div class="container">
    {{--Header start--}}
    <div class="row">
        <header class="header">
            <div class="title">
                <div class="col-md-6" >
                    <div class="contactMenu">
                        <a href="" class="txtConMenu"> Contact us</a> |
                        <a href="" class="txtConMenu"> About us</a>
                    </div>
                    <div class="titletxt">
                        <span>World-Wide-News</span>
                        <div class="date">
                            Date :{{ date('j-F-Y') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="search">
                <div class="col-md-6" >
                    <div class="search_Ad_div">
                        <div class="head_ad">
                            <img src="{{ asset('assets/ad/595c9a6b70bb0.gif') }}" class="ad_img_head">
                        </div>
                        <div class="searchBack">
                            <form action="{{ url('/Search') }}" method="post" role="search">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control searchColor"  name="q" placeholder="search here">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
{{--End Header--}}

<!--========================================Navbabr Start==============================================================-->
    <div class="row">
        {{--<div class="mobile"><img src="{{ asset('assets/images/menu-icon.png') }}"></div>--}}

        <nav class="navbar navbar-default" >

            <div class="navbar-header mobile" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{--<a class="navbar-brand" href="#">Brand</a>--}}
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}

                <ul class="nav navbar-nav" >
                    @foreach($menu as $m)
                        @if($m->id == 1)
                            <li class="navli"><a href="{{ url('/')}}"  style="color: #f4f4f4;" class="navli">{{ $m->mmenu }}</a></li>
                        @elseif($m->mmenu == '...')
                            <li class="navli"><a href="{{ url('/')}}"  style="color: #f4f4f4;" class="navli">{{ $m->mmenu }}</a></li>
                        @else
                            <li><a href="{{ url('/MNews/'.$m->id.'/'.$m->mmenu) }}"  class="navli" style="color: #f4f4f4;">{{ $m->mmenu }}</a></li>
                        @endif
                    @endforeach
                </ul>

            {{--</div>--}}
        </nav>

    </div> {{--End Navbar--}}



<!--========================================Headline Start==============================================================-->

    <div class="recentDivision">
        <div class="col-md-12" >
            <div class="update">
                <div class="updateIMG">শিরোনাম</div>
                <div class="textRec">
                    <marquee behavior="scroll"  scrollamount="2"  onmouseover="this.stop()" onmouseout="this.start()">
                        @foreach($Heading as $head)
                            <span style=" padding-left: 20px;">
                                <img src="{{ asset('assets/ad/N_Judah_logo.png') }}" height="18" width="18" style="margin-top: -5px;">
                            </span>
                            <span>
                                <a href="{{ url('/MNews/'.$head->id.'/'.$head->mmenu) }}" style="color: #FF0066;">
                                    {{ $head->heading }}
                                </a>
                            </span>
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>

        {{--<div class="col-md-6 col-sm-6" >--}}
            {{--<div class="update">--}}
                {{--<img src="images/" class="updateIMG">--}}
                {{--<div class="textRec">--}}
                    {{--<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">--}}
                        {{--দেলপাড়া উচ্চ বিদ্যালয়টি নারায়ণগঞ্জ জেলার ফতুল্লা থানাধীন কুতুবপুর ইউনিয়নের দেলপাড়া গ্রামে অবস্থিত । ইহা পাগলা – জালকুড়ি রাস্তার ডান পার্শে অবস্থিত। বর্তমানে বিদ্যালয়টিতে সাধারন শাখায় এবং কারিগরী শাখায় সর্বমোট ২১৩৭ জন ছাত্র ছাত্রী অধ্যয়নরত। বিদ্যালয়টিতে মোট শিক্ষক শিক্ষিকা ৪২ জন। তন্মধ্যে সাধারন শাখায় ৩৪ জন এবং কারিগরী শাখায় ০৮ জন কর্মরত আছেন।</marquee>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
        {{--<div class="recentDivision">--}}
            {{--<div class="col-md-6">--}}
            {{--<img src="images/" class="updateIMG">--}}
            {{--<div class="textRec">--}}
                {{--<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">--}}
                    {{--দেলপাড়া উচ্চ বিদ্যালয়টি নারায়ণগঞ্জ জেলার ফতুল্লা থানাধীন কুতুবপুর ইউনিয়নের দেলপাড়া গ্রামে অবস্থিত । ইহা পাগলা – জালকুড়ি রাস্তার ডান পার্শে অবস্থিত। বর্তমানে বিদ্যালয়টিতে সাধারন শাখায় এবং কারিগরী শাখায় সর্বমোট ২১৩৭ জন ছাত্র ছাত্রী অধ্যয়নরত। বিদ্যালয়টিতে মোট শিক্ষক শিক্ষিকা ৪২ জন। তন্মধ্যে সাধারন শাখায় ৩৪ জন এবং কারিগরী শাখায় ০৮ জন কর্মরত আছেন।</marquee>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}{{--End Navbar--}}


