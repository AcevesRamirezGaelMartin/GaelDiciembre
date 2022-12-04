@extends('home')  
    @section('content')
   <div class="card">

       <div class="card-body">
        <h1 class="bg-blue -rotate-180">eventos</h1>

  
            <a class="btn btn-circle " href="{{ route('eventos.create') }}">
            <i class="fas fa-plus"></i>
            </a>
      
        <table class="table table-bordered  table-hover dts">
                <thead>
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">Nombre_evento</th>
                        <th class="text-center">Usuaroio</th>
                        <th class="text-center">Local</th>
                        <th class="text-center">Inivtaciones</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Horario</th>
                        <th class="text-center">Ubicacion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($eventos as $evento)
                    <tr>
                  
                        <td class="text-center"> {{ $evento->id }} </td>
                        <td class="text-center"> {{ $evento->Nombre_evento }} </td>
                        <td class="text-center"> {{ $evento->Usuarios }} </td>
                        <td class="text-center"> {{ $evento->Locales }} </td>
                        <td class="text-center"> {{ $evento->Inivtaciones }} </td>
                        <td class="text-center"> {{ $evento->Fecha }} </td>
                        <td class="text-center"> {{ $evento->Horario }} </td>
                        <td class="text-center"> {{ $evento->Fecha }} </td>
                        <td class="text-center">
                            <a class="btn btn-circle " href="{{ route('eventos.edit', $eventos->id ) }}">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-circle " href="{{ route('eventos.show', $eventos->id ) }}">
                                    <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-circle" data-toggle="modal" data-target="#deleteMdl{{ $eventos->id }}" >
                                        
                                        <i class="fas fa-trash-alt"></i>
                                        </a>

                                        <div class="modal animated zoomIn " id="deleteMdl{{$eventos->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content"> 
                                                <div class="modal-header">
                                                  <h5 class="modal-title text-inspina text-primary text-center" id="exampleModalLabel">Realmente desea borrar a el consumible :{{$eventos->nombre}}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="{{route('eventos.destroy', $eventos->id)}}" role="form" method="POST" id="deleteProductFrm">
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