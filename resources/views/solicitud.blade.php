@extends('layouts.layout')
@section('content')
<div class="maincontent-container white-dark-bg">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10">
            <div class="verification-wrapper">
                <h1 class="heading-primary-2 text-center mb50">estado de la Solictud</h1>
                @if(isset($solicitud))
                <ul>
                    <li>Descripcion: {{ $solicitud->descripcion}}</li>
                    <li>Tipo repuesta: {{ $solicitud->tipo_repuesta}}</li>
                    <li>Archivo: {{ $solicitud->file_path}}</li>
                </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb300">
        <div class="col-md-9 text-center">
            <a href="{{ route('home')}}" class="button">Regresar al Inicio</a>
        </div>
    </div>
</div>

@endsection
