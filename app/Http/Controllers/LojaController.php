<?php

namespace App\Http\Controllers;

use App\Models\loja;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
     public function criarContaLoja(){
        return view('criarContaLoja');
    }


      public function index($slug){
     $lojas = loja::paginate(3);

 $sessao = session('sessao_');
    
return view('lojas', compact('sessao', 'lojas'));

      }


public function dadosLoja($slug){ 

    $sessao = session('sessao_');
    
    return view('minhaLoja', compact('sessao'));
}

 
    public function store(Request $request)
    {
        /*$request->validate([
            'imagemLoja' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nomeLoja' => 'required|string|max:255',
            'enderecoLoja' => 'required|string|max:255',
            'emailLoja' => 'required|email|unique:lojas,email',
            'telefoneLoja' => 'required|string',
            'whatsappLoja' => 'required|string',
            'senhaLoja' => 'required|string|min:8|confirmed',
            //Dados adicionais
            'segundaAbertura' => 'required|date_format:H:i',
            'segundaFechamento' => 'required|date_format:H:i',
            'tercaAbertura' => 'required|date_format:H:i',
            'tercaFechamento' => 'required|date_format:H:i',
            'quartaAbertura' => 'required|date_format:H:i',
            'quartaFechamento' => 'required|date_format:H:i',
            'quintaAbertura' => 'required|date_format:H:i',
            'quintaFechamento' => 'required|date_format:H:i',
            'sextaAbertura' => 'required|date_format:H:i',
            'sextaFechamento' => 'required|date_format:H:i',
            'sabadoAbertura' => 'required|date_format:H:i',
            'sabadoFechamento' => 'required|date_format:H:i',
            'domingoAbertura' => 'required|date_format:H:i',
            'domingoFechamento' => 'required|date_format:H:i',
            'disponivelEntregaLoja' => 'required|string',
            'produtosVendaLoja' => 'required|string',
            'descricaoLoja' => 'required|string',
        ]);*/

        $l = $request->all();

        if($request->imagemLoja){
            $l['imagemLoja'] = $request->imagemLoja->store('lojas');
        }
        $l['slug'] = Crypt::encrypt($request->emailLoja);
        $l['senhaLoja'] = Crypt::encrypt($request->senhaLoja);
        
        $loja = loja::create($l);

        session(['sessao_' => $loja]);

        return redirect()->route('LojaController.index',['slug'=>$loja->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(loja $loja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(loja $loja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, loja $loja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loja $loja)
    {
        //
    }
}
