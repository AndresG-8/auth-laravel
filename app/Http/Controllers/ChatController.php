<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Chat;
use Redirect;

class ChatController extends Controller
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
        return view('chat.index');
    }

    public function listing()
    {
        $chats = Chat::Chats();
        return response()->json(
            $chats
        );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            Chat::create($request->all());
            return response()->json([
                "mensaje" => "enviado"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conexion = mysqli_connect("localhost","root","andres");
        $bd = mysqli_select_db($conexion, "base1");

        //EXTRAEMOS EL CONTENIDO DEL CHAT
        $sql= "SELECT `chat`.`id_message`, `chat`.`id_usuario`, `chat`.`fecha`, `chat`.`mensaje`, `login`.`usuario`, `login`.`foto`  
                FROM `chat` INNER JOIN `login` ON `chat`.`id_usuario` = `login`.`id_usuario` ORDER BY `chat`.`id_message`";
        $rec=mysqli_query($conexion, $sql);

        while($row = mysqli_fetch_array($rec) ){
            echo "<strong><span id=\"linea-texto\">".$row['usuario'].":</strong> ".$row['mensaje']."</span><br>";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
