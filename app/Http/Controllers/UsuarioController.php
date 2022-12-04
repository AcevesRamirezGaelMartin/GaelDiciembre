<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Console\View\Components\Alert;

class UsuarioController extends Controller
{
 
    public function index()
    {
        $usuarios = Usuario::get();
        return view('Usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $usuario = new Usuario();
        return view('usuarios.create', compact('usuario'));
    }

    public function store(StoreUsuarioRequest $request)
    {
        // dd($request->all());

        $customer = Usuario::create($request->all());

        return redirect()->route('usuarios.index');
            
    }

    public function show(Usuario $usuario)
    {
        $usuarios = Usuario::find($usuario);
        return view('Usuarios.show', compact('usuarios'));
        
    }

    public function edit(Usuario $usuario)

    {

        
        return view('usuarios.edit', compact('usuario'));
        
    }
    
    public function update(UpdateUsuarioRequest $request,  $usuario)
    {
        $usuario = Usuario::find($usuario);
        // return $request->all();
        $usuario->update($request->all());

        return redirect()->route('usuarios.index');

    }

    public function destroy(Usuario $usuario)
    {
        $usuario = Usuario::find($usuario)->each->delete();
        // $usuario->each->delete();
         return redirect()->route('usuarios.index');
        
    }
}
