<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
use App\Http\Requests\StoreConsumibleRequest;
use App\Http\Requests\UpdateConsumibleRequest;

class ConsumibleController extends Controller
{
    public function index()
    {
        $consumibles = consumible::get();
        return view('consumibles.index', compact('consumibles'));
    }

    public function create()
    {
        $consumible = new consumible();
        return view('consumibles.create', compact('consumible'));
    }

    public function store(StoreconsumibleRequest $request)
    {
        // dd($request->all());

        $customer = consumible::create($request->all());

        return redirect()->route('consumibles.index');
            
    }

    public function show(consumible $consumible)
    {
        $consumibles = consumible::find($consumible);
        return view('consumibles.show', compact('consumibles'));
        
    }

    public function edit(consumible $consumible)

    {

        
        return view('consumibles.edit', compact('consumible'));
        
    }
    
    public function update(UpdateconsumibleRequest $request,  $consumible)
    {
        $consumible = consumible::find($consumible);
        // return $request->all();
        $consumible->update($request->all());

        return redirect()->route('consumibles.index');

    }

    public function destroy(consumible $consumible)
    {
        $consumible = consumible::find($consumible)->each->delete();
        // $consumible->each->delete();
         return redirect()->route('consumibles.index');
        
    }
}
