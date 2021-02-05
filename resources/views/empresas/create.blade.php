@extends('layouts.app')

@section('content')
<a href=" {{ route('naves.naves') }}" class="btn btn-primary mr-2 text-white">REGRESAR</a>

    <h2 class="text-center mb-5">Crear nueva nave</h2>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
           
            <form method="POST" action="{{ route('empresas.store')}}" novalidate>

                @csrf
                <div class="form-group">

                    <label for="nombre_empresa">Nombre empresa</label>
                        <input
                            type="text" 
                            name="nombre_empresa"
                            class="form-control"
                            id="nombre_empresa"
                            placeholder="Nombre Empresa" 
                            value="{{ old('nombre_empresa') }}">
                            
                    @error('nombre_empresa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                    <label for="representante_legal">Representante Legal</label>
                    <input type="text"  
                           name="representante_legal"
                            class="form-control"
                            id="representante"
                            placeholder="Representante Legal" 
                            value="{{ old('representante_legal') }}">

                     @error('representante')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror


                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar Empresa">

                </div>
            </form>
        </div>
    </div>


@endsection