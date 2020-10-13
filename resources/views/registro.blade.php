@extends('layouts.layout')
@section('content')
<main class="maincontent-area">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="maincontent-container white-bg">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="registration-heading">
                                <h1 class="heading-primary-2 text-center mb50">
                                    Formulario de Registro
                                </h1>
                                <p>Por favor tenga en cuenta que los campos con <span>(*)</span> son obligatorios.
                                    Recuerde que si brinda mayor información facilitara la labor para el proceso de su
                                    solicitud.</p>
                            </div>
                            @if(Session::has('status'))
                            <div class="alert alert-success"> {{ Session::get('status') }}</div>
                            @endif
                            <form action="{{ route('solicitud.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--/*TIPO Y IDENTIFICACION*/-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Número de
                                                identificación</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-id-card"></i></div>
                                                </div>
                                                <input name="identificacion" type="text" value=""
                                                    class="form-control registration-input"
                                                    placeholder="Digite su número de identificación">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group registration-select-group">
                                            <label class="registration-label" for="seleccioneid">Tipo de
                                                Identificación</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icofont icofont-card"></i>
                                                    </div>
                                                </div>
                                                <select name="tipo_identificacion"
                                                    class="form-control registration-input registration-select">
                                                    <option value="" selected="selected">Seleccione el tipo de
                                                        identificación</option>
                                                    <option value="cc">C.C</option>
                                                    <option value="ce">C.E</option>
                                                    <option value="nit">NIT</option>
                                                    <option value="pass">Pasaporte</option>
                                                    <option value="rc">Registro Civil</option>
                                                    <option value="ti">T.I</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/*TIPO ID Y NOMBRE*/-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Nombres / Razón
                                                Social</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icofont icofont-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="nombres"
                                                    class="form-control registration-input" value=""
                                                    placeholder="Digite su nombre ó razón social">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Apellidos /
                                                Representante Legal</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-ui-v-card"></i></div>
                                                </div>
                                                <input type="text" name="apellidos"
                                                    class="form-control registration-input" value=""
                                                    placeholder="Digite sus apellidos o nobre del representante legal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="siteURL">(*) Correo
                                                Electrónico</label>
                                            <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-ui-email"></i></div>
                                                </div>
                                                <input name="email" type="email" class="form-control registration-input"
                                                    value="" placeholder="Digite su correo electrónico" required=""
                                                    aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Teléfono
                                                Fijo</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                                </div>
                                                <input type="text" name="telefono"
                                                    class="form-control registration-input" value=""
                                                    placeholder="Digite su número de teléfono">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Teléfono
                                                Celular</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-smart-phone"></i></div>
                                                </div>
                                                <input type="text" name="celular"
                                                    class="form-control registration-input" value=""
                                                    placeholder="Digite su número de celular">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label"
                                                for="inlineFormInputGroup">Dirección</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-social-google-map"></i></div>
                                                </div>
                                                <input type="text" name="direccion"
                                                    class="form-control registration-input" value=""
                                                    placeholder="Digite su dirección">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="registration-form-group registration-select-group">
                                            <label class="registration-label" for="pais">País</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icofont icofont-world"></i>
                                                    </div>
                                                </div>
                                                <select name="pais"
                                                    class="form-control registration-input registration-select">
                                                    <option value="" selected="selected">seleccione el País</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Alemania">Alemania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Algeria">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguila">Anguila</option>
                                                    <option value="8">Antártida</option>
                                                    <option value="9">Antigua y Barbuda</option>
                                                    <option value="10">Antillas Neerlandesas</option>
                                                    <option value="11">Arabia Saudita</option>
                                                    <option value="12">Argentina</option>
                                                    <option value="13">Armenia</option>
                                                    <option value="14">Aruba</option>
                                                    <option value="15">Australia</option>
                                                    <option value="16">Austria</option>
                                                    <option value="17">Azerbayán</option>
                                                    <option value="18">Bélgica</option>
                                                    <option value="19">Bahamas</option>
                                                    <option value="20">Bahrein</option>
                                                    <option value="21">Bangladesh</option>
                                                    <option value="22">Barbados</option>
                                                    <option value="23">Belice</option>
                                                    <option value="24">Benín</option>
                                                    <option value="25">Bhután</option>
                                                    <option value="26">Bielorrusia</option>
                                                    <option value="27">Birmania</option>
                                                    <option value="28">Bolivia</option>
                                                    <option value="29">Bosnia y Herzegovina</option>
                                                    <option value="30">Botsuana</option>
                                                    <option value="31">Brasil</option>
                                                    <option value="32">Brunéi</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cabo Verde</option>
                                                    <option value="37">Camboya</option>
                                                    <option value="38">Camerún</option>
                                                    <option value="39">Canadá</option>
                                                    <option value="40">Chad</option>
                                                    <option value="41">Chile</option>
                                                    <option value="42">China</option>
                                                    <option value="43">Chipre</option>
                                                    <option value="44">Ciudad del Vaticano</option>
                                                    <option value="46">Comoras</option>
                                                    <option value="47">Congo</option>
                                                    <option value="48">Congo</option>
                                                    <option value="49">Corea del Norte</option>
                                                    <option value="50">Corea del Sur</option>
                                                    <option value="51">Costa de Marfil</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Croacia</option>
                                                    <option value="54">Cuba</option>
                                                    <option value="55">Dinamarca</option>
                                                    <option value="56">Dominica</option>
                                                    <option value="57">Ecuador</option>
                                                    <option value="58">Egipto</option>
                                                    <option value="59">El Salvador</option>
                                                    <option value="60">Emiratos Árabes Unidos</option>
                                                    <option value="61">Eritrea</option>
                                                    <option value="62">Eslovaquia</option>
                                                    <option value="63">Eslovenia</option>
                                                    <option value="64">España</option>
                                                    <option value="65">Estados Unidos de América</option>
                                                    <option value="66">Estonia</option>
                                                    <option value="67">Etiopía</option>
                                                    <option value="68">Filipinas</option>
                                                    <option value="69">Finlandia</option>
                                                    <option value="70">Fiyi</option>
                                                    <option value="71">Francia</option>
                                                    <option value="72">Gabón</option>
                                                    <option value="73">Gambia</option>
                                                    <option value="74">Georgia</option>
                                                    <option value="75">Ghana</option>
                                                    <option value="76">Gibraltar</option>
                                                    <option value="77">Granada</option>
                                                    <option value="78">Grecia</option>
                                                    <option value="79">Groenlandia</option>
                                                    <option value="80">Guadalupe</option>
                                                    <option value="81">Guam</option>
                                                    <option value="82">Guatemala</option>
                                                    <option value="83">Guayana Francesa</option>
                                                    <option value="84">Guernsey</option>
                                                    <option value="85">Guinea</option>
                                                    <option value="86">Guinea Ecuatorial</option>
                                                    <option value="87">Guinea-Bissau</option>
                                                    <option value="88">Guyana</option>
                                                    <option value="89">Haití</option>
                                                    <option value="90">Honduras</option>
                                                    <option value="91">Hong kong</option>
                                                    <option value="92">Hungría</option>
                                                    <option value="93">India</option>
                                                    <option value="94">Indonesia</option>
                                                    <option value="95">Irán</option>
                                                    <option value="96">Irak</option>
                                                    <option value="97">Irlanda</option>
                                                    <option value="98">Isla Bouvet</option>
                                                    <option value="99">Isla de Man</option>
                                                    <option value="100">Isla de Navidad</option>
                                                    <option value="101">Isla Norfolk</option>
                                                    <option value="102">Islandia</option>
                                                    <option value="103">Islas Bermudas</option>
                                                    <option value="104">Islas Caimán</option>
                                                    <option value="105">Islas Cocos (Keeling)</option>
                                                    <option value="106">Islas Cook</option>
                                                    <option value="107">Islas de Åland</option>
                                                    <option value="108">Islas Feroe</option>
                                                    <option value="109">Islas Georgias del Sur y Sandwich del Sur
                                                    </option>
                                                    <option value="110">Islas Heard y McDonald</option>
                                                    <option value="111">Islas Maldivas</option>
                                                    <option value="112">Islas Malvinas</option>
                                                    <option value="113">Islas Marianas del Norte</option>
                                                    <option value="114">Islas Marshall</option>
                                                    <option value="115">Islas Pitcairn</option>
                                                    <option value="116">Islas Salomón</option>
                                                    <option value="117">Islas Turcas y Caicos</option>
                                                    <option value="118">Islas Ultramarinas Menores de Estados Unidos
                                                    </option>
                                                    <option value="119">Islas Vírgenes Británicas</option>
                                                    <option value="120">Islas Vírgenes de los Estados Unidos</option>
                                                    <option value="121">Israel</option>
                                                    <option value="122">Italia</option>
                                                    <option value="123">Jamaica</option>
                                                    <option value="124">Japón</option>
                                                    <option value="125">Jersey</option>
                                                    <option value="126">Jordania</option>
                                                    <option value="127">Kazajistán</option>
                                                    <option value="128">Kenia</option>
                                                    <option value="129">Kirgizstán</option>
                                                    <option value="130">Kiribati</option>
                                                    <option value="131">Kuwait</option>
                                                    <option value="132">Líbano</option>
                                                    <option value="133">Laos</option>
                                                    <option value="134">Lesoto</option>
                                                    <option value="135">Letonia</option>
                                                    <option value="136">Liberia</option>
                                                    <option value="137">Libia</option>
                                                    <option value="138">Liechtenstein</option>
                                                    <option value="139">Lituania</option>
                                                    <option value="140">Luxemburgo</option>
                                                    <option value="141">México</option>
                                                    <option value="142">Mónaco</option>
                                                    <option value="143">Macao</option>
                                                    <option value="144">Macedônia</option>
                                                    <option value="145">Madagascar</option>
                                                    <option value="146">Malasia</option>
                                                    <option value="147">Malawi</option>
                                                    <option value="148">Mali</option>
                                                    <option value="149">Malta</option>
                                                    <option value="150">Marruecos</option>
                                                    <option value="151">Martinica</option>
                                                    <option value="152">Mauricio</option>
                                                    <option value="153">Mauritania</option>
                                                    <option value="154">Mayotte</option>
                                                    <option value="155">Micronesia</option>
                                                    <option value="156">Moldavia</option>
                                                    <option value="157">Mongolia</option>
                                                    <option value="158">Montenegro</option>
                                                    <option value="159">Montserrat</option>
                                                    <option value="160">Mozambique</option>
                                                    <option value="161">Namibia</option>
                                                    <option value="162">Nauru</option>
                                                    <option value="163">Nepal</option>
                                                    <option value="164">Nicaragua</option>
                                                    <option value="165">Niger</option>
                                                    <option value="166">Nigeria</option>
                                                    <option value="167">Niue</option>
                                                    <option value="168">Noruega</option>
                                                    <option value="169">Nueva Caledonia</option>
                                                    <option value="170">Nueva Zelanda</option>
                                                    <option value="171">Omán</option>
                                                    <option value="172">Países Bajos</option>
                                                    <option value="173">Pakistán</option>
                                                    <option value="174">Palau</option>
                                                    <option value="175">Palestina</option>
                                                    <option value="176">Panamá</option>
                                                    <option value="177">Papúa Nueva Guinea</option>
                                                    <option value="178">Paraguay</option>
                                                    <option value="179">Perú</option>
                                                    <option value="180">Polinesia Francesa</option>
                                                    <option value="181">Polonia</option>
                                                    <option value="182">Portugal</option>
                                                    <option value="183">Puerto Rico</option>
                                                    <option value="184">Qatar</option>
                                                    <option value="185">Reino Unido</option>
                                                    <option value="186">República Centroafricana</option>
                                                    <option value="187">República Checa</option>
                                                    <option value="188">República Dominicana</option>
                                                    <option value="189">Reunión</option>
                                                    <option value="190">Ruanda</option>
                                                    <option value="191">Rumanía</option>
                                                    <option value="192">Rusia</option>
                                                    <option value="193">Sahara Occidental</option>
                                                    <option value="194">Samoa</option>
                                                    <option value="195">Samoa Americana</option>
                                                    <option value="196">San Bartolomé</option>
                                                    <option value="197">San Cristóbal y Nieves</option>
                                                    <option value="198">San Marino</option>
                                                    <option value="199">San Martín (Francia)</option>
                                                    <option value="200">San Pedro y Miquelón</option>
                                                    <option value="201">San Vicente y las Granadinas</option>
                                                    <option value="202">Santa Elena</option>
                                                    <option value="203">Santa Lucía</option>
                                                    <option value="204">Santo Tomé y Príncipe</option>
                                                    <option value="205">Senegal</option>
                                                    <option value="206">Serbia</option>
                                                    <option value="207">Seychelles</option>
                                                    <option value="208">Sierra Leona</option>
                                                    <option value="209">Singapur</option>
                                                    <option value="210">Siria</option>
                                                    <option value="211">Somalia</option>
                                                    <option value="212">Sri lanka</option>
                                                    <option value="213">Sudáfrica</option>
                                                    <option value="214">Sudán</option>
                                                    <option value="215">Suecia</option>
                                                    <option value="216">Suiza</option>
                                                    <option value="217">Surinám</option>
                                                    <option value="218">Svalbard y Jan Mayen</option>
                                                    <option value="219">Swazilandia</option>
                                                    <option value="220">Tadjikistán</option>
                                                    <option value="221">Tailandia</option>
                                                    <option value="222">Taiwán</option>
                                                    <option value="223">Tanzania</option>
                                                    <option value="224">Territorio Británico del Océano Índico</option>
                                                    <option value="225">Territorios Australes y Antárticas Franceses
                                                    </option>
                                                    <option value="226">Timor Oriental</option>
                                                    <option value="227">Togo</option>
                                                    <option value="228">Tokelau</option>
                                                    <option value="229">Tonga</option>
                                                    <option value="230">Trinidad y Tobago</option>
                                                    <option value="231">Tunez</option>
                                                    <option value="232">Turkmenistán</option>
                                                    <option value="233">Turquía</option>
                                                    <option value="234">Tuvalu</option>
                                                    <option value="235">Ucrania</option>
                                                    <option value="236">Uganda</option>
                                                    <option value="237">Uruguay</option>
                                                    <option value="238">Uzbekistán</option>
                                                    <option value="239">Vanuatu</option>
                                                    <option value="240">Venezuela</option>
                                                    <option value="241">Vietnam</option>
                                                    <option value="242">Wallis y Futuna</option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yibuti</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabue</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group registration-select-group">
                                            <label class="registration-label" for="seleccionedept">Departamento</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icofont icofont-map"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control registration-input"
                                                    name="departamento" placeholder="Departamento">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="registration-form-group registration-select-group">
                                            <label class="registration-label" for="seleccioneci">Ciudad</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-building-alt"></i></div>
                                                </div>
                                                <input type="text" name="ciudad" class="form-control registration-input"
                                                    placeholder="Ciudad">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Barrio o
                                                Vereda</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-map-pins"></i></div>
                                                </div>
                                                <input type="text" name="barrio" class="form-control registration-input"
                                                    value="" placeholder="Digite su barrio o vereda">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup">Código
                                                Postal</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icofont icofont-ui-map"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="zip" class="form-control registration-input"
                                                    value="" placeholder="Digite su código postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="registration-form-group registration-select-group">
                                            <label class="registration-label" for="tipo_solicitud">(*) Tipo de
                                                Solicitud</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-clip-board"></i></div>
                                                </div>
                                                <select name="tipo_solicitud"
                                                    class="form-control registration-input registration-select"
                                                    id="tipo_solicitud">
                                                    <option value="" selected="selected">Seleccione el tipo de solicitud
                                                    </option>
                                                    <option value="8">Denuncia</option>
                                                    <option value="7">Felicitación</option>
                                                    <option value="14">Petición de Consulta (T)</option>
                                                    <option value="15">Petición de Documentación (T)</option>
                                                    <option value="13">Petición de Información (T)</option>
                                                    <option value="12">Petición Ordinaria</option>
                                                    <option value="2">Queja</option>
                                                    <option value="3">Reclamo</option>
                                                    <option value="5">Sugerencia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="registration-form-group registration-select-group">
                                            <label class="registration-label" for="respuesta"> (*) Medio de
                                                Respuesta</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="icofont icofont-fast-delivery"></i></div>
                                                </div>
                                                <select name="respuesta"
                                                    class="form-control registration-input registration-select">
                                                    <option value="" selected="selected">Seleccione el medio de
                                                        respuesta</option>
                                                    <option value="email">Correo electrónico </option>
                                                    <option value="email_certificado">Correo certificado </option>
                                                    <option value="telefonico">Telefónicamente</option>
                                                    <option value="personal">Entrega física (Personalmente) </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup"><i
                                                    class="fa fa-pencil"></i>(*) Descripción</label>
                                            <textarea name="descripcion"
                                                placeholder="Digite aquí todo el contenido de su solicitud"
                                                id="description" class="registration-input registration-textarea"
                                                required="" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="inlineFormInputGroup"><i
                                                    class="fa fa-download"></i> Adjuntar Archivos</label>
                                            <div class="form-group ">
                                                <input type="file" name="file" />
                                                <span class="help-block m-b-none"><small>Ingrese aquí todos los archivos
                                                        anexos que contenga su solicitud, aquí podrá cargar hasta 20
                                                        archivos anexos en los formatos
                                                        "docx,doc,pdf,xls,xlsx,png,jpg,jpeg,zip,rar,odt,7zip,txt,gif" y
                                                        con un peso máximo de "2048" KB. </small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="registration-form-group">
                                            <label class="registration-label" for="terms">(*) Autorización de datos
                                                personales</label>
                                            <div class="registrtion-checkbox-group">
                                                <input type="checkbox" name="terms" id="terms"
                                                    class="registration-checkbox" required="" aria-required="true">
                                                <label for="terms" class="terms-text"> <span
                                                        class="checkbox-btn"></span> Autorizo a la
                                                    Alcaldía&nbsp;de&nbsp;Caldas - Antioquia para tratar mis datos
                                                    personales con el fin de comunicarme cualquier situación o evento
                                                    relacionado con mi solicitud; en cumplimiento de la Ley 1581 de 2012
                                                    y el Decreto 1377 de 2013 de la República de Colombia.</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <input type="submit" class="button registration-submit"
                                            value="Enviar Solicitud">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
