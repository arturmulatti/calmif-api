<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelValidacao;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        $validacao = DB::table('validacao')->orderBy("id", "desc")->first();

        $user = DB::table('users')->where('email', $validacao->email)->first();
         echo($validacao->email);
         echo($user->email);
        if (strcmp($user->password,$validacao->password) ==0) {
            DB::table('validacao')->where("id", $validacao->id)->update(["resultado" => "1"]);
            $validacao = DB::table('validacao')->orderBy("id", "desc")->first();
           
            echo($validacao->resultado);
            return view('login');
        } else {

            DB::table('validacao')->where("id", $validacao->id)->update(["resultado" => "0"]);
            $validacao = DB::table('validacao')->orderBy("id", "desc")->first();
            echo($validacao->resultado);
            return view('login');
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
