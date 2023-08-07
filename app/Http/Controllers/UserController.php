<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function criarContaCliente(){
        return view('criarContaCliente');
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
        $u = $request->all();

       
        $u['slug'] = Crypt::encrypt($request->emailUser);
        $u['senhaUser'] = Crypt::encrypt($request->senhaUser);
        
        $user = user::create($u);

        session(['sessao_' => $user]);

        return redirect()->route('LojaController.index',['slug'=>$user->slug]);    
    }

    /**
     * Display the specified resource.
     */
    public function dadosUser($slug)
    {
     
        $sessao = session('sessao_');  
       return view('minhaContaCliente', compact('sessao'));
       
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
