@extends('layouts.app')

@section('botones')
<a href="{{ route('naves.naves')}}" class="btn btn-primary mr-2 text-white">Regresar</a>
    
@endsection

@section('content')

<h2 class="text-center mb-5">Crear Mantenimiento</h2>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
           
            <form method="POST" action="{{ route('mantenimientos.store')}}" novalidate>

                @csrf
                <div class="form-group">

                    <label for="description">Describir mantenimiento</label>
                        <input
                            type="text" 
                            name="description"
                            class="form-control"
                            id="description"
                            placeholder="Describe el mantenimiento" 
                            value="{{ old('description') }}">
                            
                    @error('description')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                    <label for="fecha_inicio">Fecha de inicio</label>
                    <input type="date"
                            name="fecha_inicio"
                            class="form-control"
                            id="fecha_inicio"
                    >
                     @error('fecha_inicio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <label for="fecha_termino">Fecha de termino</label>   
                <div class="form-group">
                    <input type="date"
                            name="fecha_termino"
                            class="form-control"
                            id="fecha_termino"
                                            >
               @error('fecha_termino')
                   <span class="invalid-feedback d-block" role="alert">
                       <strong>{{$message}}</strong>
                    </span>
                @enderror
                    
                </div>

                
                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                   <textarea  name="observaciones" id="observaciones" cols="106" rows="10"></textarea>
                </div>
              
                <div class="form-group">
                    <label for="id_nave">Empresa</label>

                    <select
                        name="id_nave"
                        class="form-control"
                        id="id_nave">
                        <option value="">--- Seleccione la nave ---</option>
                        @foreach ($naves as $nave) 
                        <option value="{{ $nave->id }}" 
                                {{ old('id_nave') == $nave->id ? 'selected' : '' }}
                                >{{$nave->num_nave}} </option>
                        @endforeach
                    </select> @error('id_nave')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                </div>
                <label for="proximo_mante">Proximo Mantenimiento</label>   
                <div class="form-group">
                    <input type="date"
                            name="proximo_mante"
                            class="form-control"
                            id="proximo_mante"
                                            >
               @error('proximo_mante')
                   <span class="invalid-feedback d-block" role="alert">
                       <strong>{{$message}}</strong>
                    </span>
                @enderror
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Crear Mantenimiento">
                   
                </div>
            </form>
        </div>
    </div>

    <script>
        data() {
            return {
              date: new Date(),
            }
          }
    </script>
@endsection