<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\loja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    //
    public function index(){
        return view('entrar');
    }

    
    public function login(Request $request){

    $entrar = $request->all();
    
    $loja = loja::where('whatsappLoja', $entrar['usuario'])->first();

    if($loja){
        $decrypted = Crypt::decrypt($loja->senhaLoja);
      
        if($entrar['senha'] === $decrypted){
            session(['sessao_' => $loja]);
            return redirect()->route('LojaController.index',['slug'=>$loja->slug]);
        }

        return view('entrar');
    }

    else {
        $user = user::where('whatsappUser', $entrar['usuario'])->first();
           if($user){
            $decrypted = Crypt::decrypt($user->senhaUser);
            
            if($entrar['senha'] === $decrypted){
                session(['sessao_' => $user]);
                return redirect()->route('LojaController.index',['slug'=>$user->slug]);
              }
           }

           return view('entrar');
    }   



    }
}
