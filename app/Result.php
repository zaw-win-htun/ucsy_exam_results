<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ResultRequest;

class Result extends Model
{
    protected $table = "results";

    protected $fillable = [
      'roll_no',
      'year',
      'major',
      'subject',
      'credit',
      'external'
    ];

    public function scopeByYear( $query, $year)
    {
        return $query->where('year', $year); 
    }

    public function scopeSearch($query , ResultRequest $request)
    {
      if ($request->year == 1) {
        return $query->where('roll_no' , $request->roll_no)->where('year'  , $request->year);
      }else{
        return $query->where('roll_no' , $request->roll_no)->where('year'  , $request->year)->where('major' , $request->major);
      }
    }

    public function scopeExternal0($query)
    {
      return $query->where('external' , 0);
    }
    
    public function scopeExternal1($query)
    {
      return $query->where('external' , 1);
    }
}
