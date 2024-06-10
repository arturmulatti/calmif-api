<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->objUser = new User();


    }

    public function index($email)
    { 
        $user = DB::table('users')->orderBy("id","desc")->first();
        return view('login',compact('user'));

    }
    public function getEmail($email){
        
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
        $user = new User();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

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
    public function show( Request $request)
    {
       $email = $request->input("email");
        $user = DB::table('users')->where('email',$email)->first();
        return view  ("LoginEmail",compact($email));
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
