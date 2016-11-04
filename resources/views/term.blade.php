@extends('app')
@section('content')

<div class="container">
  <div class="term1 text-center">
    <p>
      ဤwebsite သည္ <a class="offical" target="_blank" href="ucsy.edu.mm/ucsy/">UCSY</a>
       ရွိေက်ာင္းသူေက်ာင္းသားမ်ားစာေမးပြဲရလဒ္အတြက္ၾကည့္ရႈရအဆင္ေျပေစရန္တည္ေဆာက္ထားျခင္းျဖစ္ပါသည္။
    </p>
    <p>
      Website သည္ opensource ျဖစ္ပါသည္။ေလ့လာလိုပါက <a class="offical" target="_blank" href="#">UCSY Exam Github Repo</a> တြင္ အခမဲ့ ရယူ ပါ၀င္ ျဖန္႔ေ၀ႏိုင္ပါသည္။
    </p>
    <p>
      Application ေရးနိုင္ရန္အတြက္လဲ api ထုတ္ၿပီးသားျဖစ္ေသာေၾကာင့္ App မ်ားေရးသားကာျပန္လည္မွ်ေဝနိုင္ပါသည္။
    </p>
    <a href="{{ url('apidocs') }}"><button type="button" class="btn btn-default">Read the Api docs</button></a>

    <div class="row term2">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <p class="title">Design and Backend</p>
          <p>Original Creator - <a class="offical" target="_blank" href="http://johnthelinux.com">Htet Wai Yan Soe</a></p>
          <p>Rebuild by <a class="offical" target="_blank" href="http://ucsy.edu.mm/ucsy/Gophotogallery.do">UCSY Students</a></p>
          <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
  </div>
</div>

@stop
