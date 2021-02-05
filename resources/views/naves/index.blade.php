@extends('layouts.app')



@section('content')

    <h2 class="text-center mb-5">Bienvenido:</h2>
    <div class=" text-center col-md-10 mx-auto bg-white p-3">
      <a href="{{ route('empresas.index') }}" class="btn btn-secondary btn-lg">Empresas</a>
      <a href="{{ route('naves.naves') }}" class="btn btn-secondary btn-lg">Naves</a>
      <a href="" class="btn btn-secondary btn-lg">Mis propiedades</a>
      <a href="" class="btn btn-secondary btn-lg">Contratos</a>

    </div>



@endsection