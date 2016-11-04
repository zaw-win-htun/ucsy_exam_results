@extends('app2')
@section('content')

    <div class="container">
      <div class="row">
      <h3>
      
        ပထမႏွစ္ကြန္ပ်ဴတာသိပၸံဘြဲ႕သင္တန္းေအာင္စာရင္း
      </h3>

        <div class="panel panel-default">
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ခုံအမွတ္</th>
                    <th>အမည္</th>
                    <th>ဂုဏ္ထူးရဘာသာမ်ား</th>
                    <th>year</th>
                    <th>မွတ္ခ်က္</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($result as $results)
                  <tr>
                    <td>{{ $results->roll_no }}</td>
                    <td>{{ $results->name }}</td>
                    <td>{{ $results->major }}</td>
                    <td>{{ $results->year }}</td>
                    <td>{{ $results->external }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@stop
