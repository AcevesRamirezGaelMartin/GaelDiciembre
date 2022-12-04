@extends('home')  
    @section('content')
   

    <h1 class="text-center">Nuevo Producto</h1>
<a class="btn align-items-center" href="{{ route('usuarios.index') }}">Regresar</a>
    <form action="{{ route('usuarios.store') }}" method="POST">
    @csrf

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" required  id="nombre" aria-describedby="nombre" placeholder="Escribe el nombre" value="{{ old('nombre') }}">
        </div>     
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" required name="apellido" id="apellido" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{ old('apellido') }}">
        </div> 
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="email" class="form-control" required name="correo" id="correo" aria-describedby="helpId" placeholder="Escribe el correo electronico" value="{{ old('correo') }}@">
        </div> 
        <div class="form-group">
          <label for="text">Contrsaeña</label>
          <input type="text" class="form-control" required name="contrasena" id="contrasena" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{ old('contrasena') }}"">
        </div> 
        <div class="form-group">
          <label for="number">Telefono</label>
          <input type="text" class="form-control"required  name="telefono" id="telefono" aria-describedby="helpId" placeholder="Escribe el apellido" value="{{ old('telefono') }}">
          @if ($errors->has('telefono'))
          <span class="text-danger">{{$errors->first('telefono')}}</span>

          {{-- <span class="text-danger">{{$errors->first('name')}}</span> --}}
          @endif
        </div> 
        <button type="submit" href="#" class="btn btn-primary">Finalizar</button>
    
    </form>
    @endsection

@section('footer')