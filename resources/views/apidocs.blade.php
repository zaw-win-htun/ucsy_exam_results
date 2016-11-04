@extends('app2')
@section('content')

  <div class="container-fluid apidocs">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
      <h1>OverView</h1>
      <h3>All Results</h3>
      <div class="panel panel-default">
        <div class="panel-heading">http://localhost:8000/api</div>
        <div class="panel-body">
          <pre>
            [
              {
              "id": 1,
              "roll_no": 9,
              "name": "​ေမာင္ဥာဏ္သာျမင့္",
              "year": 1,
              "major": null,
              "external": 0
              },
              .
              .
              .
              .
              .

              {
                "id": 1886,
                "roll_no": 32,
                "name": "မ၀တ္ရည္ကိုကို",
                "year": 3,
                "major": "ct",
                "external": 0
              }
            ]
          </pre>
        </div>
      </div>

      <h3>Filter by number</h3>
      <div class="panel panel-default">
        <div class="panel-heading">http://localhost:8000/api/v1/q?filter=2</div>
        <div class="panel-body">
          <pre>
            [
              {
              "id": 1,
              "roll_no": 9,
              "name": "​ေမာင္ဥာဏ္သာျမင့္",
              "year": 1,
              "major": null,
              "external": 0
              },
              {
              "id": 8,
              "roll_no": 25,
              "name": "မဆုနႏၵာထက္",
              "year": 1,
              "major": null,
              "external": 0
              }
            ]
          </pre>
        </div>
      </div>

      <h3>Filter by Year</h3>
      <div class="panel panel-default">
        <div class="panel-heading">http://localhost:8000/api/v1/q?year=1</div>
        <div class="panel-body">
          <pre>
            [
              {
                "id": 1,
                "roll_no": 9,
                "name": "​ေမာင္ဥာဏ္သာျမင့္",
                "year": 1,
                "major": null,
                "external": 0
              },
              .
              .
              .
              .

              {
              "id": 8,
              "roll_no": 25,
              "name": "မဆုနႏၵာထက္",
              "year": 1,
              "major": null,
              "external": 0
              }
            ]
          </pre>
        </div>
      </div>

      <h3>Filter by Roll Number & Year</h3>
      <div class="panel panel-default">
        <div class="panel-heading">http://localhost:8000/api/v1/q?roll_no=71&&year=1</div>
        <div class="panel-body">
          <pre>
            [
              {
              "id": 7,
              "roll_no": 71,
              "name": "မ​ေစာ​စႏၵီတင္",
              "year": 1,
              "major": null,
              "external": 0
              }
            ]
          </pre>
        </div>
      </div>

    </div>
    <div class="col-md-3">

    </div>
  </div>

@stop
