<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Result;

use App\Http\Controllers\Controller;

use App\Http\Requests\ResultRequest;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;


class ResultController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function results(ResultRequest $request)
  {
    if ($request->external) {
      $result = Result::search($request)->external1()->get();
    }else{
      $result = Result::search($request)->external0()->get();
    }
    return view('passorfail' , compact('result'));
  }

  public function getResultByYear($id)
  {
    $result = Result::ByYear($id)->get();

    return view('allresults.yearresults' , compact('result'));
  }

  public function filter(){
      // Input::only('registered_after', 'min_posts');

      $all = Input::all();
      $asc = "asc";
      if(array_key_exists("sort", $all)){
        $asc = $all["sort"];
      }

      if(array_key_exists("roll_no", $all)){
        $filter  = $all["roll_no"];
        if(array_key_exists("year", $all)){
          $year = $all["year"];
          return response()->json(Result::where('roll_no',$filter)->where('year',$year)->get());
        }
        return response()->json(Result::where('roll_no',$filter)->get());

      }elseif(array_key_exists("year", $all)){
       $year = $all["year"];
       if(array_key_exists("filter", $all)){
        $filter  = $all["filter"];
        if(array_key_exists("skip", $all)){
          $skip = $all["skip"];
          return  response()->json(Result::skip($skip)->orderBy("roll_no",$asc)->where('year',$year)->orderBy("year","asc")->take($filter)->get());
        }
        return  response()->json(Result::where('year',$year)->orderBy("year","asc")->orderBy("roll_no",$asc)->take($filter)->get());
      }
      return response()->json(Result::where('year',$year)->orderBy("roll_no",$asc)->get());

      }elseif(array_key_exists("filter", $all)){
       $filter  = $all["filter"];
       if(array_key_exists("skip", $all)){
        $skip = $all["skip"];
        return  response()->json(Result::skip($skip)->orderBy("year","asc")->orderBy("roll_no",$asc)->take($filter)->get());
      }
      return  response()->json(Result::orderBy("year","asc")->orderBy("roll_no",$asc)->take($filter)->get());

      }else{
        return response()->json(Result::orderBy("year","asc")->orderBy("roll_no",$asc)->get());
      }

  }

  public function term()
  {
    return view('term');
  }

  public function api() {
    return response()->json(Result::all());
  }

  public function apidocs()
  {
    return view('apidocs');
  }

}
