@extends('home')
@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-bordered  table-hover dts">
            <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Contrasena</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                
                    <td class="text-center"> {{ $usuario->id }} </td>
                    <td class="text-center"> {{ $usuario->nombre }} </td>
                    <td class="text-center"> {{ $usuario->apellido }} </td>
                    <td class="text-center"> {{ $usuario->correo }} </td>
                    <td class="text-center"> {{ $usuario->contrasena }} </td>
                    
                </tr>
            </tbody>
            @endforeach
        </table>  
      </div>
</div>
@endsection