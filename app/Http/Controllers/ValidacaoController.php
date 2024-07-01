<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\ModelValidacao;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Stmt\Catch_;
class ValidacaoController extends Controller
{
    private $validacao;
    private $user;
    public function __construct()
    {
        $this->objValidacao = new ModelValidacao();
        $this->objUser = new User();

    }
    public function index()
    {
        try{
        $validacao = DB::table('validacao')->orderBy("id", "desc")->first();

        $user = DB::table('users')->where('email', $validacao->email)->first();
         
        
       
     

        if (password_verify($validacao->password,$user->password) ==1) {
            DB::table('validacao')->where("id", $validacao->id)->update(["resultado" => "1"]);
            echo(1);
            $validacao = DB::table('validacao')->orderBy("id", "desc")->first();
            
            
            return view('login');
        } else {

            DB::table('validacao')->where("id", $validacao->id)->update(["resultado" => "0"]);
            $validacao = DB::table('validacao')->orderBy("id", "desc")->first();
            echo(0);
            return view('login');
        }
    }catch(Exception $e){
        echo(0);
    }
      
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
        $postagem = new ModelValidacao();
        $postagem->email = $request->input('email');
        $postagem->password = $request->input('password');
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
