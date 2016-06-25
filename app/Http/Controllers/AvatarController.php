<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Dato;
use Session;
use Redirect;
use Auth;

class AvatarController extends Controller
{
    public function __construct(){
       $this->middleware('auth'); 
       $this->middleware('admin', ['only' => 'index']); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avatar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*return $request->all();*/
        Dato::create($request->all());
        Session::flash('message','Avatar agregado');
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avatar = Dato::find($id);
        /*$avatar = Dato::find( Auth::user()->id );*/
        return view('avatar.edit', ['avatar'=>$avatar]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $avatar = Dato::find( Auth::user()->id );
        $avatar->fill($request->all());
        $avatar->save();
        Session::flash('message','Avatar agregado, reinicia sesion para ver los cambios');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
