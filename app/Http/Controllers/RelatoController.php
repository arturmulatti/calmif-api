<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\relato;
use Illuminate\Http\Request;

class RelatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
            // Seleciona os dois últimos posts com a coluna 'aprovado' nula, ordenados por 'id' ou data de criação
            $relatos = relato::get();
                            
        
            // Retorna os posts em formato JSON
            return response()->json($relatos);
        
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
        $postagem = new relato();
        $postagem->titulo = $request->input('titulo');
        $postagem->conteudo = $request->input('conteudo');
        $postagem->aprovado = $request->input('aprovado');
       
        $postagem->save();

        return response()->json(
            [
                'status' => 200,
                'message' => "Post criado"
            ]
        );

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
