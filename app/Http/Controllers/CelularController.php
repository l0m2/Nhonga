<?php

namespace App\Http\Controllers;

use App\Models\celular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($opcao, $slug,)
    {
        $sessao = session('sessao_');
     

    switch ($opcao) {

        case 'Todos-Celulares':
        $celulares = celular::paginate(3);
        return view('celulares', compact('celulares' , 'sessao'));    
        break;
         
        
        case 'APPLE':
            
        
        break;   
                    
        case 'SAMSUNG':
            
        break;        

            }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function celularesMinhaLoja($slug)
    {
        $sessao = session('sessao_');
        $celulares = celular::where('idLoja', $sessao['id'])->get();
        
       return view('meusCelularesLoja', compact('celulares' , 'sessao'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $sessao = session('sessao_');
 if($slug === $sessao['slug']){

        $c = $request->all();

        if($request->imagemCelular){
            $c['imagemCelular'] = $request->imagemCelular->store('celulares');
        }

        $c['slug'] = Crypt::encrypt($request->modeloCelular);
        $c['idLoja'] = $sessao['id'];

        $celular = celular::create($c);

        return redirect()->route('CelularController.celularesMinhaLoja', ['slug'=>$sessao['slug']]); 
 }

return view('Entrar');

    }

    /**
     * Display the specified resource.
     */
    public function show(celular $celular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(celular $celular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, celular $celular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(celular $celular)
    {
        //
    }
}
