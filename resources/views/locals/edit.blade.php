@extends('home')  
    @section('content')
   

    <h1 class="text-center">Nuevo local</h1>

    <form action="{{ route('locals.update' ,$local->id) }}" method="POST">
    @csrf @method('PUT')

        <div class="form-group">
          <label for="nombre_local">Nombre</label>
          <input type="text"
            class="form-control" name="nombre_local" required  id="nombre_local" aria-describedby="nombre" placeholder="Escribe el nombre del local" value="{{$local->nombre_local }}">
        </div>     
        <div class="form-group">
          <label for="ubicacion">Ubicacion</label>
          <input type="text" class="form-control" required name="ubicacion" id="ubicacion" aria-describedby="helpId" placeholder="Escribe el ubicacion" value="{{$local->ubicacion }}">
        </div> 
         
        
        <div class="form-group">
          <label for="precio">Telefono</label>
          <input type="number" class="form-control"required  name="telefono" id="telefono" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{$local->telefono }}">
          @if ($errors->has('telefono'))
          <span class="text-danger">{{$errors->first('telefono')}}</span>

          {{-- <span class="text-danger">{{$errors->first('name')}}</span> --}}
          @endif
        </div> 
        
        
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="number" class="form-control"required  name="precio" id="precio" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{$local->precio }}">
          @if ($errors->has('precio'))
          <span class="text-danger">{{$errors->first('precio')}}</span>

          {{-- <span class="text-danger">{{$errors->first('name')}}</span> --}}
          @endif
        </div> 
        <div class="form-group">
          <label for="capacidad">Capacidad</label>
          <input type="number" class="form-control"required  name="capacidad" id="capacidad" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{$local->capacidad }}">
          @if ($errors->has('capacidad'))
          <span class="text-danger">{{$errors->first('capacidad')}}</span>

          {{-- <span class="text-danger">{{$errors->first('name')}}</span> --}}
          @endif
        </div> 
        <div class="form-group">
          <label for="tamano">Tamano</label>
          <input type="number" class="form-control"required  name="tamano" id="tamano" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{$local->tamano }}">
          @if ($errors->has('tamano'))
          <span class="text-danger">{{$errors->first('tamano')}}</span>

          {{-- <span class="text-danger">{{$errors->first('name')}}</span> --}}
          @endif
        </div>
        <button type="submit" href="#" class="btn btn-primary">Actualizar local</button> 
    </form>
    @endsection

@section('footer')