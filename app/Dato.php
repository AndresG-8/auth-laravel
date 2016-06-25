<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use DB;
use Auth;
class Dato extends Model
{
    protected $table = 'datos';

    protected $fillable = ['user_id','path'];
    
    public function setPathAttribute($path){
        if(! empty($path)){
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }

    public static function Ver(){
        return  DB::table('datos')
            ->join('users','datos.user_id','=','users.id')
            ->select('datos.path')
            ->where('datos.user_id',  Auth::user()->id )
            ->get();
    }

}
