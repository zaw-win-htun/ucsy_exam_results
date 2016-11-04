@extends('app')
@section('content')

  @if($result->isEmpty())

  <div class="container text-center">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="fail">
          <p>စိတ္ေအးေအးထားပါ။</p>
          <p>သူငယ္ခ်င္းရဲ့ Roll Number ကို Exam Database ထဲမွာ ရွာလုိ႔မေတြ႔ဘူး။</p>
          <p>သူငယ္ခ်င္း စာေမးပြဲ က်တာလဲ ျဖစ္ႏိုင္သလို</p>
          <p>ကြၽန္ေတာ္တို႔ Data Entry လုပ္တုန္းက ေမ့က်န္ခဲ့တာလဲ ျဖစ္ႏိုင္ပါတယ္။</p>
          <p>ပိုျပီးေသခ်ာေအာင္ UCSY ရဲ့ <a class="offical" href="http://www.ucsy.edu.mm/">Official Website</a> ကို သြားၾကည့္လုိက္ပါ။</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

  @else
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 pass text-center">
          @foreach($result as $r)
          <p class="text-center">ဂုဏ္ယူပါတယ္ {{$r->name}}။ စာေမးပြဲေအာင္ပါတယ္။</p>
          <p class="text-center">သူငယ္ခ်င္းရဲ့ Roll Number ကို Exam Database ထဲမွာ ရွာလို႔ေတြ ႔ပါတယ္</p>
          <p>Student Name : {{ $r->name }}</p>
          <p>Credit Subject : {{ $r->subject }}</p>
          <p>Note : အထူးေအာင္ </p>
          <p>Roll Number : {{ $r->roll_no }}
          @if($r->external)
            ( External )
          @endif
          </p>
          <p>Year :
            @if($r->year == 1)
              First Year
            @elseif($r->year == 2)
              Second Year
            @elseif($r->year == 3)
              Third Year
            @elseif($r->year == 4)
              Fourth Year
            @elseif($r->year == 5)
              Fifth Year
            @else
              Master Year
            @endif
          </p>
          <p>Major :
            @if($r->major == "cs")
              Computer Science
            @elseif($r->major == "ct")
              Computer Technology
            @else
              -
            @endif
          </p>
					@endforeach
          <hr>
          <p class="text-center">ပိုျပီးေသခ်ာေအာင္ UCSY ရဲ့ <a class="offical" href="http://www.ucsy.edu.mm/ucsy/NewsPage2.do">Official Website</a> ကို သြားၾကည့္လုိက္ပါ။</p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  @endif

@stop
