@extends('app')
@section('content')

    <h1 class="text-center header">UNIVERSITY OF COMPUTER STUDIES <span>(YANGON)</span></h1>

    <div class="container">
      <h3 class="text-center sec_header">EXAM RESULT OF YEAR 2016</h3>
      <p class="text-center credit"><a href="{{ url('term') }}">Credits, Terms and Conditions</a></p>
    </div>

    <form action="{{ url('result') }}" method="POST" id="search">
		<input type="hidden" value="{{ csrf_token() }}" name="_token" id="csrf">
      <div class="container field">
        <div class="row">
          <div class="col-md-4 col-sm-3"></div>
          <div class="col-md-4 col-sm-6">
            <div class="form-group">
              <input type="number" min="1" name="roll_no" id="roll_no" class="form-control input-lg input_1" placeholder="Type Roll Number(eg.304)" required="required">
            </div>

            <select name="major" class="form-control input-lg input_2" required="required" id="major">
              <option value="cs" selected="selected">Computer Science</option>
              <option value="ct">Computer Technology</option>
            </select>

            <select name="year" class="form-control input-lg input_2" required="required" id="year">
              <option value="1" selected="selected">First Year</option>
              <option value="2">Second Year</option>
              <option value="3">Third Year</option>
              <option value="4">Fouth Year</option>
              <option value="5">Master</option>
            </select>
          </div>
          <div class="col-md-4 col-sm-3"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3"></div>

          <div class="col-md-4 col-sm-6 input_4 input_5">
            <div class="checkbox">
              <label class="checkbox">
                <input type="checkbox" name="external" id="external">
                  External?
              </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block input_4">Search</button>
            <div class="error">
              @include('errors.list')
            </div>
          </div>

          <div class="col-md-4 col-sm-3"></div>
        </div>
      </div>
    </form>

    <div class="container yearresults">
      <div class="row text-center">
        <div class="col-md-1"></div>
        <a href="{{url('result/year/1')}}"><div class="col-md-2 col-sm-3"> <button type="button" class="btn btn-default">First Year Results</button> </div></a>
        <a href="{{url('result/year/2')}}"><div class="col-md-2 col-sm-3"> <button type="button" class="btn btn-default">Second Year Results</button> </div></a>
        <a href="{{url('result/year/3')}}"><div class="col-md-2 col-sm-3"> <button type="button" class="btn btn-default">Third Year Results</button> </div></a>
        <a href="{{url('result/year/4')}}"><div class="col-md-2 col-sm-3"> <button type="button" class="btn btn-default">Fouth Year Results</button> </div></a>
        <a href="{{url('result/year/5')}}"><div class="col-md-2 col-sm-3"> <button type="button" class="btn btn-default">Master Year Results</button> </div></a>

        <div class="col-md-1"></div>
      </div>
    </div>

@stop
