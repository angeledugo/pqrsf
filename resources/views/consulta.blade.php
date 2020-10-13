@extends('layouts.layout')
@section('content')
<div class="maincontent-container white-dark-bg">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10">
            <div class="verification-wrapper">
                <h1 class="heading-primary-2 text-center mb50">Verificación y Seguimiento de Solicitudes</h1>
                <p class="paragraph-2 text-center mb120">Ingrese el código de identificación de la solicitud realizada,
                    para verificar el estado en que esta se encuentra.</p>
                <div class="request-code-search-form ">
                    <form action="{{route('solicitud.show')}}" method="POST">
                    @csrf
                        <label for="request-code" class="request-code-label">Código de solicitud: </label>
                        <input type="text" name="codigo" id="request-code"
                            class="request-code-input">
                        <button type="submit" id="submit" class="request-code-submit">Busrecar</button>
                    </form>

                </div>
                <div id="resulados">
                </div>
                <div class="mb160">
                </div>
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
