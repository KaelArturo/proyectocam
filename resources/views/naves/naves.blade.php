@extends('layouts.app')

@section('botones')

<ul class="main2">
    <li><a  href="{{ route('empresas.create')}}" >Crear Empresa</a></li>
    <li><a href="{{ route('naves.create')}}" >Crear Nave</a></li>
    <li><a href="{{ route('mantenimientos.create')}}" >Crear Mantenimiento</a></li>
    <li><a href="#" >Crear propiedades</a></li>
    
</ul>
    
    
   
    
   
    


@endsection

@section('content')

    <h2 class="text-center mb-5">Bienvenido: {{ Auth::user()->name }} </h2>
    <div class="col-md-10 mx-auto bg-white p-2">
        <table class="table table-striped table-bordered table-responsive-*" >
            <thead class="bg-secondary text-white">
                <tr>
                    <th scole="col" class="text-center">Número Nave</th>
                    <th scole="col" class="text-center">Sección</th>
                    <th scole="col" class="text-center">Superficie m<sup>2</sup></th>
                    <th scole="col" class="text-center">Precio m<sup>2</sup></th>
                    <th scole="col" class="text-center">Renta mensual</th>
                    <th scole="col" class="text-center">IVA</th> 
                    <th scole="col" class="text-center">Renta Total</th>
                    <th scole="col" class="text-center">Empresa</th>
                    <th scole="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    @for($i=0;$i<sizeof($naves);$i++)
                    <tr>
                     <td class="text-center">{{$naves[$i]->num_nave}} </td>
                     <td class="text-center">{{$naves[$i]->seccion}} </td>
                     <td class="text-center">${{number_format($naves[$i]->superficie,2)}} </td>
                     <td class="text-center">${{number_format($naves[$i]->precio, 2 )}} </td>
                     <td class="text-center">${{number_format($naves[$i]->renta_mensual, 2 )}} </td>
                     <td class="text-center">${{number_format($naves[$i]->iva, 2 )}} </td>
                     <td class="text-center">${{number_format($naves[$i]->renta_total, 2 )}} </td>
                     @for($j=0;$j<sizeof($empresas);$j++)
                        @if($naves[$i]->empresa_id==$empresas[$j]->id)
                        <td class="text-center"> <a href="{{ route('empresas.edit', ['empresa'=>$empresas[$j]->id]) }} ">{{$empresas[$j]->nombre_empresa}}</a> </td>
                        @endif
                     @endfor
                     <td class="text-center"> 
                         
                        <eliminar-nave
                            nave-id = {{$naves[$i]->id}}>
                        </eliminar-nave>
                            <a href="{{route('naves.edit', ['nave'=>$naves[$i]->id]) }}" class="btn btn-dark mr-1 btn-block mb-2">Editar</a>
                        </td>
                     </td>
                    </tr>
                    @endfor
               </tbody>
        </table>
    </div>

@endsection