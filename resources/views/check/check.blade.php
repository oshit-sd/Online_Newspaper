
<link rel="stylesheet" href=" {{  asset('assets/myCss/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link  rel="stylesheet" type="text/css" href="{{ asset('assets/myCss/check.css') }}">

<div class="form">
    <div class="title"> Secret Pin </div>
    <form name="kicuna" method="post" action="{{ url('/regForm') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <div class="inputDiv"><input type="password" required name="pin" class="form-control input" autofocus></div>

        <div class="button"><input type="submit" class="btn btn-default " value="Confirm"></div>
    </form>
</div>
<div class="col-md-12">
    @if(Session::has('unsucess'))
        <div class="alert alert-danger" style="text-align: center;"> {{Session::get('unsucess')}} </div>

    @elseif($errors->has('password') or $errors->has('email'))
        <span class="help-block">
        {{--<div class="alert alert-danger"> <strong>  Opps!! </strong>  {{'Wrong email or password' }}</div>--}}
            <div class="alert alert-danger" style="text-align: center;">
                {{ $errors->first('email') }} <br> {{ $errors->first('password') }} <br>
                <span>Please again put your secret pin to regester</span>
            </div>

    </span>
    @endif
</div>

