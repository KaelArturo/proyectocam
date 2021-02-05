@extends('layouts.app')

@section('botones')

    <a href=" {{ route('naves.naves') }}" class="btn btn-primary mr-2 text-white">REGRESAR</a>

@endsection

@section('content')

<h2 class="text-center mb-5">Editar Empresa</h2>

<div class="row justify-content-center mb-5">
    <div class="col-md-8">
   
    <form method="POST" action="{{ route('empresas.update', ['empresa'=>$empresa->id]) }}" enctype="multipart/form-data" novalidate>
   
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="representante_legal">Nombre Empresa</label>
            <input type="text" 
                   name="nombre_empresa"
                    class="form-control"
                    id="nombre_empresa"
                    placeholder="Nombre Empresa"
                    value="{{$empresa->nombre_empresa}}">
                    
                    
            @error('nombre_empresa')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror


            <label for="representante_legal">Representate Legal</label>
            <input type="text" 
                   name="representante_legal"
                    class="form-control"
                    id="representante_legal"
                    placeholder="Nombre de Representante"
                    value="{{$empresa->representante_legal}}">
                    
                    
            @error('representante_legal')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Editar">

            </div>
            </form>
</div>
</div>
   
@endsection