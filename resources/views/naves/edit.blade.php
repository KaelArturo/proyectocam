@extends('layouts.app');

@section('content')
    
<h2 class="text-center mb-5">Editar nave</h2>

<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <form method="POST" action="{{ route('naves.update', ['nave' => $nave->id]) }}" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="num_nave">Número de nave</label>
                <input type="text" 
                       name="num_nave"
                        class="form-control"
                        id="num_nave"
                        placeholder="Número de nave"
                        value="{{$nave->num_nave}}">
                @error('num_nave')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

                <label for="seccion">Sección</label>
                <input type="text"  
                       name="seccion"
                        class="form-control"
                        id="seccion"
                        placeholder="Sección"
                        value={{$nave->seccion}}>
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
                        placeholder="Superficie"
                        value={{$nave->superficie}}>
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
                        placeholder="Precio"
                        value={{number_format($nave->precio,2)}}>

                 @error('precio')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

            <label for="renta_mensual">Renta Mensual</label>
                <input type="text"  
                        readonly="readonly"
                        name="renta_mensual"
                        class="form-control"
                        id="renta_mensual"
                        placeholder="Renta Mensual"
                        value= {{$nave->renta_mensual}}
                        >
             @error('renta_mensual')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

            <label for="iva">IVA</label>
                <input type="text"  
                        readonly="readonly"
                        name="iva"
                        class="form-control"
                        id="iva"
                        placeholder="IVA"
                        value={{$nave->iva}}>
             @error('iva')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

            <label for="renta_total">Renta Total</label>
                <input type="text"
                       readonly="readonly"
                       name="renta_total"
                        class="form-control"
                        id="renta_total"
                        placeholder= "Renta Total"
                        value={{$nave->renta_total}}>
             @error('renta_total')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

                @for($i=0;$i<sizeof($empresas);$i++)
                    @if($nave->empresa_id == $empresas[$i]->id)
                    <label for="nombre_empresa">Empresa</label>
                    <input type="text"  
                           name="nombre_empresa"
                            class="form-control"
                            id="nombre_empresa"
                            placeholder= ""
                            value="{{$empresas[$i]->nombre_empresa}}">

                         @error('nombre_empresa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    @endif
                @endfor
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Editar">
            </div>
        </form>
    </div>
</div>

@endsection