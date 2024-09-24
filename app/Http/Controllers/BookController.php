<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelPost;
use App\Models\User;
use App\Models\ModelRequestComentario;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class BookController extends Controller
{

    private $User;
    private $Post;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objPost = new ModelPost();

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Seleciona os dois últimos posts com a coluna 'aprovado' nula, ordenados por 'id' ou data de criação
        $posts = ModelPost::where('aprovado',1)
                          ->get(); // Obtém os resultados
    
        // Retorna os posts em formato JSON
        return response()->json($posts);
    }
    public function Comentarios()
    {
        $requestPost = DB::table('requestcomentario')->orderBy("id","desc")->first();
        $post = DB::table('post')->where("id",11)->first();
        
        return view('Comentarios', compact("post"));
        ////Tentar renderizar a função em uma rota, para gerar o comentario especifico

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $postagem = new ModelPost();
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
    public function pesquisarPost($texto){
        $postagem = ModelPost::where('titulo', 'LIKE', "%{$texto}%")
                             ->orWhere('conteudo', 'LIKE', "%{$texto}%")
                             ->get();
        return response()->json($postagem);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function buscarAprovacao() {
        // Seleciona os dois últimos posts com a coluna 'aprovado' nula, ordenados por 'id' ou data de criação
        $posts = ModelPost::whereNull('aprovado')
                        
                          ->take(2) // Limita a 2 posts
                          ->get(); // Obtém os resultados
    
        // Retorna os posts em formato JSON
        return response()->json($posts);
    }
    public function aprovarPost(Request $request, $id)
    {
        // Validação: garante que o campo 'aprovado' é obrigatório e booleano
        $validatedData = $request->validate([
            'aprovado' => 'required|boolean'
        ]);
    
        // Encontrar o post pelo ID usando Eloquent
        $post = ModelPost::find($id);
    
        // Verifica se o post existe
        if (!$post) {
            return response()->json(['message' => 'Post não encontrado'], 404);
        }
    
        // Atualiza o campo 'aprovado' com o valor recebido
        $post->aprovado = $request->input('aprovado');
        $post->save(); // Salva a alteração no banco de dados
    
        // Retorna uma resposta indicando sucesso
        return response()->json(['message' => 'Post aprovado com sucesso', 'post' => $post], 200);
    }
    
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
