@extends('home')
@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-bordered  table-hover dts">
            <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Ubicacion</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Capacidad</th>
                    <th class="text-center">Tamano</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($locals as $local )
                    
                
                <tr>
                
                    <td class="text-center"> {{ $local->id }} </td>
                    <td class="text-center"> {{ $local->nombre_local }} </td>
                    <td class="text-center"> {{ $local->ubicacion }} </td>
                    <td class="text-center"> {{ $local->telefono }} </td>
                    <td class="text-center"> {{ $local->precio }} </td>
                    <td class="text-center"> {{ $local->capacidad }} </td>
                    <td class="text-center"> {{ $local->tamano }} </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>  
      </div>
</div>
@endsection