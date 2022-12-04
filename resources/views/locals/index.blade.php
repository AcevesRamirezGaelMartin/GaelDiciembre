@extends('home')  
    @section('content')
   <div class="card">

       <div class="card-body">
        <h1 class="bg-blue -rotate-180">locals</h1>

  
            <a class="btn btn-circle " href="{{ route('locals.create') }}">
            <i class="fas fa-plus"></i>
            </a>
      
        <table class="table table-bordered  table-hover dts">
                <thead>
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">Nombre_local</th>
                        <th class="text-center">Ubicacion</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Capacidad</th>
                        <th class="text-center">Tamano</th>
                        <th class="text-center ">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($locals as $local)
                    <tr>
                    
                        <td class="text-center"> {{ $local->id }} </td>
                        <td class="text-center"> {{ $local->nombre_local }} </td>
                        <td class="text-center"> {{ $local->ubicacion }} </td>
                        <td class="text-center"> {{ $local->telefono }} </td>
                        <td class="text-center"> {{ $local->precio }} </td>
                        <td class="text-center"> {{ $local->capacidad }} </td>
                        <td class="text-center"> {{ $local->tamano }} </td>
                        <td class="text-center">
                            <a class="btn btn-circle " href="{{ route('locals.edit', $local->id ) }}">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-circle " href="{{ route('locals.show', $local->id ) }}">
                                    <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-circle" data-toggle="modal" data-target="#deleteMdl{{ $local->id }}" >
                                        
                                        <i class="fas fa-trash-alt"></i>
                                        </a>

                                        <div class="modal animated zoomIn " id="deleteMdl{{$local->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content"> 
                                                <div class="modal-header">
                                                  <h5 class="modal-title text-inspina text-primary text-center" id="exampleModalLabel">Realmente desea borrar a el local :{{$local->nombre_local}}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="{{route('locals.destroy', $local->id)}}" role="form" method="POST" id="deleteProductFrm">
                                                @csrf @method('DELETE')
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" href="#" class="btn btn-primary">Borrar Local</button>
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