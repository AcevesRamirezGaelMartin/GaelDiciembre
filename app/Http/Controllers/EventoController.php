<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::get();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        $eventos = new Evento();
        return view('eventos.create', compact('eventos'));
    }

    public function store(StoreeventoRequest $request)
    {
        // dd($request->all());

        $eventos = Evento::create($request->all());

        return redirect()->route('eventos.index');
            
    }

    public function show(Evento $id)
    {
        $eventos = Evento::find($id);
        return view('eventos.show', compact('eventos'));
        
    }

    public function edit(Evento $id)
    {

        
        return view('eventos.edit', compact('eventos'));
        
    }
    
    public function update(UpdateeventoRequest $request,  $eventos)
    {
        $eventos = Evento::find($rules);
        // return $request->all();
        $eventos->update($request->all());

        return redirect()->route('eventos.index');

    }

    public function destroy(Evento $id)
    {
        $eventos = Evento::find($id)->delete();
        // $consumible->each->delete();
         return redirect()->route('evento.index');
        
    }
}
