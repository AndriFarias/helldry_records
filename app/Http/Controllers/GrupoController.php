<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Grupo;
use Illuminate\Http\Request;


class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reg = Grupo::all();
        return view('site.grupos.index',compact('reg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artista::all();
        return view('site.grupos.novo', compact('artistas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosGrupo = $request->except('artistas');
        $artistasSelecionados = $request->input('artistas');

        $novoGrupo = Grupo::create($dadosGrupo);
        $novoGrupo->artistas()->attach($artistasSelecionados);
        
        return redirect()->route('grupos')->with('success', 'Grupo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grupo = Grupo::find($id);

        if ($grupo) {
       
        $membros = $grupo->artistas;

        return view('site.grupos.mostrar', compact('membros', 'grupo'));
    } else {
        
        return redirect()->route('grupos.index')->with('error', 'Grupo não encontrado');
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grupo = Grupo::find($id);
        $artistas = Artista::all();
        $artistasAssociados= $grupo->artistas->pluck('id')->toArray();

        return view('site.grupos.editar', compact('artistasAssociados', 'grupo', 'artistas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    
    {
        $dados = $request->except('artistas');
        $artistasSelecionados = $request->input('artistas', []);
        
      
        Grupo::find($id)->update($dados);
        
        
        $grupo = Grupo::findOrFail($id);
        $grupo->artistas()->sync($artistasSelecionados);
        
        return redirect()->route('grupos')->with('success', 'Grupo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grupo $grupo)
    {
        //
    }
}
