@extends('home')  
    @section('content')
   <div class="card">

       <div class="card-body">
        <h1 class="bg-blue -rotate-180">Usuarios</h1>

  
            <a class="btn btn-circle " href="{{ route('usuarios.create') }}">
            <i class="fas fa-plus"></i>
            </a>
      
        <table class="table table-bordered  table-hover dts">
                <thead>
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Contrasena</th>
                        <th class="text-center">Opciones</th>
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
                        <td class="text-center">
                            <a class="btn btn-circle " href="{{ route('usuarios.edit', $usuario->id ) }}">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-circle " href="{{ route('usuarios.show', $usuario->id ) }}">
                                    <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-circle" data-toggle="modal" data-target="#deleteMdl{{ $usuario->id }}" >
                                        
                                        <i class="fas fa-trash-alt"></i>
                                        </a>

                                        <div class="modal animated zoomIn " id="deleteMdl{{$usuario->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content"> 
                                                <div class="modal-header">
                                                  <h5 class="modal-title text-inspina text-primary text-center" id="exampleModalLabel">Realmente desea borrar a el usuario :{{$usuario->nombre}}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="{{route('usuarios.destroy', $usuario->id)}}" role="form" method="POST" id="deleteProductFrm">
                                                @csrf @method('DELETE')
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" href="#" class="btn btn-primary">Borrar usuaario</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                                
                                                </form>
                                                </div>


                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            
        </div>
    </div>
    
    @endsection

@section('footer')