<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;




class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $reg = Artista::all();
        return view('site.artistas.index',compact('reg'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.artistas.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $messages = [
                'email.required' => 'O campo de e-mail é obrigatório.',
                'email.unique' => 'Este e-mail já está em uso.',
                'email.email' => 'Por favor, insira um endereço de e-mail válido.',
            ];
    
            $validated = $request->validate([
                'email' => 'required|unique:artistas|email',
            ], $messages);
    
            $dados = $request->all();
            Artista::create($dados);
            return redirect()->route('artistas');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Aqui você pode lidar com os erros de validação como quiser
            return redirect()->back()->withErrors($e->errors())->withInput();
            
        }
    }

    /**
     * Display the specified resource.
     */

    public function show (string $id)
    {
        $reg = Artista::find($id);
        return view('site.artistas.visualizar',compact('reg'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $reg = Artista::find($id);
        return view('site.artistas.editar',compact('reg'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        try {
            $messages = [
                'email.required' => 'O campo de e-mail é obrigatório.',
                'email.unique' => 'Este e-mail já está em uso.',
                'email.email' => 'Por favor, insira um endereço de e-mail válido.',
            ];
    
            $validated = $request->validate([
                'email' => [
                    'required',
                    Rule::unique('artistas')->ignore($id), 
                    'email',
                ],
            ], $messages);
    
            $dados = $request->all();
            Artista::find($id)->update($dados);
            return redirect()->route('artistas');
        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Artista::find($id)->delete();
        return redirect()->route('artistas');
    }
}


