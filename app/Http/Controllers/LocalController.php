<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = local::get();
        return view('locals.index', compact('locals'));
    }

    public function create()
    {
        $local = new local();
        return view('locals.create', compact('local'));
    }

    public function store(StorelocalRequest $request)
    {
        // dd($request->all());

        $customer = local::create($request->all());

        return redirect()->route('locals.index');
            
    }

    public function show(local $local)
    {
        $locals = local::find($local);
        return view('locals.show', compact('locals'));
        
    }

    public function edit(local $local)

    {

        
        return view('locals.edit', compact('local'));
        
    }
    
    public function update(UpdatelocalRequest $request,  $local)
    {
        $local = local::find($local);
        // return $request->all();
        $local->update($request->all());

        return redirect()->route('locals.index');

    }

    public function destroy(local $local)
    {
        $local = local::find($local)->each->delete();
        // $local->each->delete();
         return redirect()->route('locals.index');
        
    }
}
