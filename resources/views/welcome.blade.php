@extends('layouts.layout')
@section('content')

<main class="maincontent-area">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="maincontent-container white-bg">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-11">
                            <h2 class="heading-secondary text-center mb45">Apreciado ciudadano tenga en cuenta</h2>
                            <p class="paragraph text-justify mb45">Por medio del sistema de PQRS, usted podrá
                                presentar peticiones, quejas, reclamos, denuncias o felicitaciones por motivos de
                                interés general o particular. Como usuario registrado o usuario anónimo, la
                                Alcaldía&nbsp;de&nbsp;Caldas - Antioquia a través de las Oficinas de Atención al
                                Ciudadano atenderá su solicitud, por lo que requerimos tenga en cuenta los
                                siguientes puntos antes de registrar su solicitud:</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-11">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="heading_1">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_1"
                                            aria-expanded="true" aria-controls="collapse_1">
                                            Denuncia:
                                        </a>
                                    </div>

                                    <div id="collapse_1" class="collapse show" aria-labelledby="heading_1"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es la puesta en conocimiento de una conducta posiblemente irregular,
                                                para que se adelante la correspondiente investigación penal,
                                                disciplinaria, fiscal, administrativa - sancionatoria o
                                                ético-profesional. </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">15</label>
                                                <p>Quince días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_2">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_2"
                                            aria-expanded="true" aria-controls="collapse_2">
                                            Felicitación:
                                        </a>
                                    </div>

                                    <div id="collapse_2" class="collapse show" aria-labelledby="heading_2"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es la manifestación que expresa el agrado o satisfacción con un
                                                funcionario o con el proceso que genera el servicio. </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">15</label>
                                                <p>Quince días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_3">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_3"
                                            aria-expanded="true" aria-controls="collapse_3">
                                            Petición de Consulta (T):
                                        </a>
                                    </div>

                                    <div id="collapse_3" class="collapse show" aria-labelledby="heading_3"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es el requerimiento que hace una persona natural, jurídica, pública
                                                o privada, a la entidad relacionada con los temas a cargo de la
                                                misma y dentro del marco de su competencia, cuya respuesta es un
                                                concepto que no es de obligatorio cumplimiento o ejecución. Términos
                                                definidos por la emergencia sanitaria según Decreto 491 28 marzo
                                                2020 del ministerio de justicia y del derecho </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">35</label>
                                                <p>Treinta Y Cinco días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_4">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_4"
                                            aria-expanded="true" aria-controls="collapse_4">
                                            Petición de Documentación (T):
                                        </a>
                                    </div>

                                    <div id="collapse_4" class="collapse show" aria-labelledby="heading_4"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es el requerimiento que hace una persona natural o jurídica a la
                                                entidad, con el fin de obtener copias o fotocopias de documentos que
                                                reposen en la Entidad. Términos definidos por la emergencia
                                                sanitaria según Decreto 491 28 marzo 2020 del ministerio de justicia
                                                y del derecho </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">20</label>
                                                <p>Veinte días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_5">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_5"
                                            aria-expanded="true" aria-controls="collapse_5">
                                            Petición de Información (T):
                                        </a>
                                    </div>

                                    <div id="collapse_5" class="collapse show" aria-labelledby="heading_5"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es el requerimiento que hace una persona natural, jurídica, pública
                                                o privada, al Municipio de Caldas, con el fin de que se le brinde
                                                información y orientación relacionada con los servicios propios de
                                                la entidad.Términos definidos por la emergencia sanitaria según
                                                Decreto 491 28 marzo 2020 del ministerio de justicia y del derecho
                                            </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">20</label>
                                                <p>Veinte días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_6">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_6"
                                            aria-expanded="true" aria-controls="collapse_6">
                                            Petición Ordinaria:
                                        </a>
                                    </div>

                                    <div id="collapse_6" class="collapse show" aria-labelledby="heading_6"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es el requerimiento que hace una persona natural, jurídica, pública
                                                o privada, a la entidad relacionada con cualquier tema referente a
                                                la administración pública, cuya respuesta es un concepto de fondo
                                                acerca de las pretensiones planteadas </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">15</label>
                                                <p>Quince días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_7">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_7"
                                            aria-expanded="true" aria-controls="collapse_7">
                                            Queja:
                                        </a>
                                    </div>

                                    <div id="collapse_7" class="collapse show" aria-labelledby="heading_7"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es el medio a través del cual una persona o usuario, pone de
                                                manifiesto su incomodidad con la actuación de una entidad o de un
                                                funcionario, con la forma y condiciones en que se preste o no un
                                                servicio. </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">15</label>
                                                <p>Quince días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_8">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_8"
                                            aria-expanded="true" aria-controls="collapse_8">
                                            Reclamo:
                                        </a>
                                    </div>

                                    <div id="collapse_8" class="collapse show" aria-labelledby="heading_8"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es la solicitud presentada por una persona natural o jurídica, con
                                                el objeto de que se revise una actuación administrativa con la cual
                                                no está conforme y pretende, a través de la misma, que la actuación
                                                o decisión sea mejorada o cambiada. </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">15</label>
                                                <p>Quince días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_9">
                                        <a class="card-link" data-toggle="collapse" data-target="#collapse_9"
                                            aria-expanded="true" aria-controls="collapse_9">
                                            Sugerencia:
                                        </a>
                                    </div>

                                    <div id="collapse_9" class="collapse show" aria-labelledby="heading_9"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="card-body-left">
                                                Es una insinuación a través de la cual se pretende que la entidad
                                                pública, adopte mecanismos de mejoramiento de un servicio o de la
                                                misma entidad, o por el contrario elogiar una actuación o mecanismo
                                                de la entidad. </div>
                                            <div class="card-body-right">
                                                <label class="calendar_number">15</label>
                                                <p>Quince días hábiles para dar respuesta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  justify-content-center mt10 mb60 hidden-xs">
                        <div class="col-lg-11 col-md-12">
                            <h1 class="heading-primary text-center mb60">Estados por los que debe pasar su solicitud
                            </h1>
                            <ul class="step-list">
                                <li class="step-list-item">
                                    <img src="http://pqrs.caldasantioquia.gov.co/img/pqrs/icon-1.png" alt="icon"
                                        class="step-list-img">
                                    <p class="step-list-text">Recibo y radicación en el sistema</p>
                                </li>
                                <li class="step-list-item">
                                    <img src="http://pqrs.caldasantioquia.gov.co/img/pqrs/icon-2.png" alt="icon"
                                        class="step-list-img">
                                    <p class="step-list-text">Verificación de la solicitud</p>
                                </li>
                                <li class="step-list-item">
                                    <img src="http://pqrs.caldasantioquia.gov.co/img/pqrs/icon-3.png" alt="icon"
                                        class="step-list-img">
                                    <p class="step-list-text">Asignación de dependencia y/o funcionario</p>
                                </li>
                                <li class="step-list-item">
                                    <img src="http://pqrs.caldasantioquia.gov.co/img/pqrs/icon-4.png" alt="icon"
                                        class="step-list-img">
                                    <p class="step-list-text">Evaluación de la solicitud</p>
                                </li>
                                <li class="step-list-item">
                                    <img src="http://pqrs.caldasantioquia.gov.co/img/pqrs/icon-5.png" alt="icon"
                                        class="step-list-img">
                                    <p class="step-list-text">Envío de respuesta</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 col-md-12">
                            <div class="button-group d-flex justify-content-around text-center">
                                <a href="{{ route('register.index')}}"
                                    class="button ">Registrar Solicitud</a>
                                <a href=""
                                    class="button">Consultar Solicitud</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

@endsection
