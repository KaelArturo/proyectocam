@extends('layouts.app')

@section('content')
    <a href="{{ route('naves.naves')}}" class="btn btn-primary mr-2 text-white">Regresar</a>

    <h2 class="text-center mb-5">Crear nueva nave</h2>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('naves.store') }}" novalidate>
                @csrf
                <div class="form-group">

                    <label for="numero_nave">Número de nave</label>
                    <input type="text" 
                           name="numero_nave"
                            class="form-control"
                            id="numero_nave"
                            placeholder="Número de nave" 
                            value="{{ old('numero_nave') }}">
                            
                            
                    @error('numero_nave')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                    <label for="seccion">Sección</label>
                    <input type="text"  
                           name="seccion"
                            class="form-control"
                            id="seccion"
                            placeholder="Sección nave" 
                            value="{{ old('seccion') }}">

                     @error('seccion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                     <label for="superficie">Superfice</label>
                    <input type="text"  
                           name="superficie"
                            class="form-control"
                            id="superficie"
                            placeholder="Superfice" 
                            value="{{ old('superficie') }}">

                     @error('superficie')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                     <label for="precio">Precio por m<sup>2</sup></label>
                    <input type="text"  
                           name="precio"
                            class="form-control"
                            id="precio"
                            placeholder="Precio por metro" 
                            value="{{ old('precio') }}">

                     @error('precio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror


                <label for="renta_mensual">Renta Mensual</label>
                    <input type="text"  
                           
                            name="renta_mensual"
                            class="form-control"
                            id="renta_mensual"
                            placeholder="Renta mensual" 
                            value="{{ old('renta_mensual') }}">
                 @error('renta_mensual')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                <label for="iva">IVA</label>
                    <input type="text"  
                            name="iva"
                            class="form-control"
                            id="iva"
                            placeholder="IVA" 
                            value="{{ old('iva') }}">
                     @error('iva')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                <label for="renta_total">Renta Total</label>
                    <input type="text"  
                           
                            name="renta_total"
                            class="form-control"
                            id="renta_total"
                            placeholder="Renta Total" 
                            value="{{ old('renta_total') }}">

                 @error('renta_total')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror

                    
                    <label for="nombre_empresa">Empresa</label>

                        <select
                            name="empresa"
                            class="form-control"
                            id="empresa">
                            <option value="">--- Seleccione Empresa ---</option>
                            @foreach ($empresas as $empresa) 
                            <option value="{{ $empresa->id }}" 
                                    {{ old('empresa') == $empresa->id ? 'selected' : '' }}
                                    >{{$empresa->nombre_empresa}} </option>
                            @endforeach
                        </select> @error('empresa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                       

                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar">

                </div>
                
            </form>
        </div>
    </div>


@endsection