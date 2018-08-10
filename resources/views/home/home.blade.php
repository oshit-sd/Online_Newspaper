@extends('layouts.public.master')

@section('section')
        <!--========================================Main Content Start==============================================================-->
        <div class="row">
            {{--Slider--}}
            @include('layouts.public.partials.slider')


            {{--Popular News--}}
            @include('layouts.public.partials.popular_news')


            {{--National News--}}
            @include('layouts.public.partials.national')


            {{--International News--}}
            @include('layouts.public.partials.international')


            {{--Politics News--}}
            @include('layouts.public.partials.politics')


            {{--Sports News--}}
            @include('layouts.public.partials.sports')


            {{--Entertainment News--}}
            @include('layouts.public.partials.entertainment')

            {{--Sortly News Heading--}}
            @include('layouts.public.partials.sortly_news')

        </div>{{--End Main Content--}}

@endsection