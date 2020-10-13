<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('plugins/plugins.bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>

<body id="page-top" style="position: relative; min-height: 100%; top: 0px;">
    <div id="stickyHeader-sticky-wrapper" class="sticky-wrapper" style="height: 63px;">
        <section class="top-area" id="stickyHeader" style="">
            <header class="header">
                <div class="container">
                    <div class="row head_titulos">
                        <div class="col-xl-7 col-lg-6 col-md-7 text-center text-md-left">
                            <div class="header-left">
                                <p class="header-tags">
                                    Recepción de Peticiones, Quejas, Reclamos y Sugerencias
                                </p>
                                <h2 class="header-title">Titulo</h2>
                            </div>
                        </div>
                        <!--div class="col-xl-5 col-lg-6 col-md-5 text-center text-md-right d-none d-md-block">
                            <a href="#" class="logo-box">
                                <img src="http://pqrs.caldasantioquia.gov.co/uploads/images/01386-8a705-escudocaldas-01.jpg"
                                    alt="Logo" class="logo">
                            </a>
                            <a href="#" class="badge-box">
                                <img src="http://pqrs.caldasantioquia.gov.co/img/pqrs/badge.png" alt="Badge"
                                    class="badge-img">
                            </a>
                        </div-->
                    </div>
                </div>
            </header>
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-list-item">
                                    <a href="" data-toggle="tooltip"
                                        data-placement="bottom" title="" data-html="true"
                                        class="breadcrumb-list-link breadcrumb-list-link-home"
                                        data-original-title="Regresar al Inicio"><img
                                            src=""
                                            alt="icon"></a>
                                </li>
                                <li class="breadcrumb-list-item">
                                    <a href="{{ route('home')}}"
                                        class="breadcrumb-list-link">Inicio</a>
                                </li>
                            </ul>
                        </div>
                        <!--div class="col-md-7 text-md-right text-center  d-md-block">
                            <ul class="utilities-list">
                                <li class="utilities-list-item"><a href="http://pqrs.caldasantioquia.gov.co/login"
                                        class="utilities-list-link" data-toggle="tooltip" data-placement="bottom"
                                        title="" data-html="true"
                                        data-original-title="Ingresar al panel administrativo"><i
                                            class="fa fa-cog"></i></a></li>
                                <li class="utilities-list-item">
                                    <a href="" id="font-resize-control" class="utilities-list-link"
                                        data-toggle="tooltip" data-placement="bottom" title="" data-html="true"
                                        data-original-title="Cambiar tamaño de letra">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    <div class="font-resize">
                                        <i data-toggle="tooltip" data-placement="bottom" title="" id="plustext"
                                            class="fa fa-plus" data-original-title="A+"></i>
                                        <i data-toggle="tooltip" data-placement="bottom" title="" id="minustext"
                                            class="fa fa-minus" data-original-title="A-"></i>
                                    </div>
                                </li>
                                <li class="utilities-list-item"><a href="#" data-toggle="modal" data-target="#myModal"
                                        onclick="return false;" id="opener" class="utilities-list-link"
                                        data-placement="bottom" title="Ver Ayuda" data-html="true"><i
                                            class="fa fa-question"></i></a></li>
                                <li class="utilities-list-item"><a href="#" class="utilities-list-link "
                                        data-toggle="tooltip" onclick="changeFilter();" data-placement="bottom" title=""
                                        data-original-title="Cambiar Contraste"><i class="fas fa-chevron-right"></i></a></li>
                                <li class="utilities-list-item">
                                    <a id="translate" href="" class="utilities-list-link" data-toggle="tooltip"
                                        data-placement="bottom" title="" data-html="true"
                                        data-original-title="Cambiar idioma">
                                        <i class="fa fa-language"></i>
                                    </a>
                                    <div id="google_translate_element" class="google_translate_element">
                                        <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                                            <div id=":0.targetLanguage"><select class="goog-te-combo"
                                                    aria-label="Widget de idiomas del Traductor">
                                                    <option value="">Seleccionar idioma</option>
                                                    <option value="af">afrikáans</option>
                                                    <option value="sq">albanés</option>
                                                    <option value="de">alemán</option>
                                                    <option value="am">amhárico</option>
                                                    <option value="ar">árabe</option>
                                                    <option value="hy">armenio</option>
                                                    <option value="az">azerí</option>
                                                    <option value="bn">bengalí</option>
                                                    <option value="be">bielorruso</option>
                                                    <option value="my">birmano</option>
                                                    <option value="bs">bosnio</option>
                                                    <option value="bg">búlgaro</option>
                                                    <option value="km">camboyano</option>
                                                    <option value="kn">canarés</option>
                                                    <option value="ca">catalán</option>
                                                    <option value="ceb">cebuano</option>
                                                    <option value="cs">checo</option>
                                                    <option value="ny">chichewa</option>
                                                    <option value="zh-CN">chino (simplificado)</option>
                                                    <option value="zh-TW">chino (tradicional)</option>
                                                    <option value="si">cingalés</option>
                                                    <option value="ko">coreano</option>
                                                    <option value="co">corso</option>
                                                    <option value="ht">criollo haitiano</option>
                                                    <option value="hr">croata</option>
                                                    <option value="da">danés</option>
                                                    <option value="sk">eslovaco</option>
                                                    <option value="sl">esloveno</option>
                                                    <option value="eo">esperanto</option>
                                                    <option value="et">estonio</option>
                                                    <option value="eu">euskera</option>
                                                    <option value="fi">finlandés</option>
                                                    <option value="fr">francés</option>
                                                    <option value="fy">frisio</option>
                                                    <option value="gd">gaélico escocés</option>
                                                    <option value="cy">galés</option>
                                                    <option value="gl">gallego</option>
                                                    <option value="ka">georgiano</option>
                                                    <option value="el">griego</option>
                                                    <option value="gu">gujarati</option>
                                                    <option value="ha">hausa</option>
                                                    <option value="haw">hawaiano</option>
                                                    <option value="iw">hebreo</option>
                                                    <option value="hi">hindi</option>
                                                    <option value="hmn">hmong</option>
                                                    <option value="hu">húngaro</option>
                                                    <option value="ig">igbo</option>
                                                    <option value="id">indonesio</option>
                                                    <option value="en">inglés</option>
                                                    <option value="ga">irlandés</option>
                                                    <option value="is">islandés</option>
                                                    <option value="it">italiano</option>
                                                    <option value="ja">japonés</option>
                                                    <option value="jw">javanés</option>
                                                    <option value="kk">kazajo</option>
                                                    <option value="rw">kinyarwanda</option>
                                                    <option value="ky">kirguís</option>
                                                    <option value="ku">kurdo</option>
                                                    <option value="lo">lao</option>
                                                    <option value="la">latín</option>
                                                    <option value="lv">letón</option>
                                                    <option value="lt">lituano</option>
                                                    <option value="lb">luxemburgués</option>
                                                    <option value="mk">macedonio</option>
                                                    <option value="ml">malayalam</option>
                                                    <option value="ms">malayo</option>
                                                    <option value="mg">malgache</option>
                                                    <option value="mt">maltés</option>
                                                    <option value="mi">maorí</option>
                                                    <option value="mr">maratí</option>
                                                    <option value="mn">mongol</option>
                                                    <option value="nl">neerlandés</option>
                                                    <option value="ne">nepalí</option>
                                                    <option value="no">noruego</option>
                                                    <option value="or">oriya</option>
                                                    <option value="pa">panyabí</option>
                                                    <option value="ps">pastún</option>
                                                    <option value="fa">persa</option>
                                                    <option value="pl">polaco</option>
                                                    <option value="pt">portugués</option>
                                                    <option value="ro">rumano</option>
                                                    <option value="ru">ruso</option>
                                                    <option value="sm">samoano</option>
                                                    <option value="sr">serbio</option>
                                                    <option value="st">sesoto</option>
                                                    <option value="sn">shona</option>
                                                    <option value="sd">sindhi</option>
                                                    <option value="so">somalí</option>
                                                    <option value="sw">suajili</option>
                                                    <option value="sv">sueco</option>
                                                    <option value="su">sundanés</option>
                                                    <option value="tl">tagalo</option>
                                                    <option value="th">tailandés</option>
                                                    <option value="ta">tamil</option>
                                                    <option value="tt">tártaro</option>
                                                    <option value="tg">tayiko</option>
                                                    <option value="te">telugu</option>
                                                    <option value="tr">turco</option>
                                                    <option value="tk">turkmeno</option>
                                                    <option value="uk">ucraniano</option>
                                                    <option value="ug">uigur</option>
                                                    <option value="ur">urdu</option>
                                                    <option value="uz">uzbeco</option>
                                                    <option value="vi">vietnamita</option>
                                                    <option value="xh">xhosa</option>
                                                    <option value="yi">yidis</option>
                                                    <option value="yo">yoruba</option>
                                                    <option value="zu">zulú</option>
                                                </select></div>Con la tecnología de <span style="white-space:nowrap"><a
                                                    class="goog-logo-link" href="https://translate.google.com"
                                                    target="_blank"><img
                                                        src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png"
                                                        width="37px" height="14px" style="padding-right: 3px"
                                                        alt="Google Traductor de Google">Traductor de Google</a></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div-->
                    </div>
                </div>
            </section>
        </section>
    </div>
    @yield('content')

</body>

</html>
