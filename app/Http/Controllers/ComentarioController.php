<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelComentario;
use Illuminate\Support\Facades\DB;
class ComentarioController extends Controller
{
    
    private $Comentario;

    public function __construct()
    {
        
        $this->objPost = new ModelComentario();

    }
    public function index()
    {
        $comentario = DB::table('comentario')->where("id_post",1)->get('*');
        
        return view('comentarioRequest',compact('comentario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $postagem = new ModelComentario();
         $postagem->conteudo =  $request->input('conteudo');
         $postagem->id_post = $request->input("id_post");
         $postagem->id_user = $request->input('id_user');
        $postagem->save();
          
        return response()->json(
            [
'status'=> 200,
'message'=>"Post criado"
            ]
        ) ;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
