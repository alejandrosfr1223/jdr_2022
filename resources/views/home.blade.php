@extends('layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div id="containerbackground">
                <div class="post_home_container">
                    <div class="firstsquare leftdivide" style="text-align: center;">
                        <table id="main" style="text-align: center; align-content: center; margin: auto; ">
                            <tr>
                                <td>
                                    <img class="first_img changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="first_key">Juan del Rincón</h1>
                                </td>
                            </tr>
                        </table>

                        <table id="notmain" style="text-align: center; align-content: center; margin: auto;">
                            <tr>
                                <td>
                                    <img class="first_img changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}">
                                </td>
                                <td>
                                    <h1 class="first_key">Juan del Rincón</h1>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="rightdivide">
                        <p id="infomaintext">
                            Capitán Juan del Rincón Aguilar, Conquistador de las Sierras Nevadas del Nuevo Reino de Granada (S. XVI).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="whitebg" style="position: relative;">
            <div id="containermv">
                <div class="cont_welc_jdr textinfofisidoro">
                    <center>
                        <h1 class="first_key" style="color: #cca766;">Contexto histórico</h1>
                    </center>
                    <p class="textisidoro">
                        La situación en los reinos de España a partir de 1492 va a cambiar por dos aspectos fundamentales, la expulsión de los judíos y el descubrimiento del Nuevo Mundo. Muchos de los que optaron por la conversión van a ver que continúan siendo perseguidos, tanto por la Inquisición como por los cristianos viejos. Ello los mueve a embarcarse en grandes empresas, porque no tienen nada que perder.
                    </p>
                </div>
                <div class="mv_cont">
                    <img src="{{ asset('/img/tree.png') }}" >
                </div>
            </div>
        </div>

        <div class="bluebg" style="position: relative;">
            <div id="containermv2" class="textcontainers">
                <div id="photo_bg_dp2" style="margin: auto;">
                    <img class="changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" >
                </div>
                <div class="textinfofisidoro tex">
                    <center>
                        <h1 class="first_key" style="color: #cca766;">El territorio</h1>
                    </center>
                    <p class="textisidoro textpresente">
                        La vida de Juan del Rincón se desarrolla principalmente en un área por explorar entre los territorios pertenecientes a la Audiencia de Santa Fe y a los del Nuevo Reino de Granada. La fundación de Pamplona será el punto de partida de diferentes expediciones, con el fin de pacificar a los indios y fundar nuevas ciudades.
                    </p>
                </div>
            </div>
        </div>

        <div style="position: relative;">
            <div class="changedirection textcontainers">
                <div class="textinfofisidoro tex">
                    <center>
                        <h1 class="first_key" style="color: #12313a;">La familia</h1>
                    </center>
                    <p class="textisidoro textpresente" style="color: #12313a;">
                        Analizaremos los diferentes lazos familiares que se van urdiendo a través del tiempo en sus dos vertientes, la ascendente y la descendente. De esta manera podremos avanzar en la búsqueda y el descubrimiento del antepasado sefardí de Juan del Rincón y poner en comunicación a las distintas ramas de sus descendientes en territorio americano.
                    </p>
                </div>
                <div id="photo_bg_dp2" style="margin: auto;">
                    <img class="changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" >
                </div>
            </div>
        </div>

        <div class="bluebg" style="position: relative;">
            <div id="containermv2" class="textcontainers">
                <div class="textinfofisidoro tex">
                    <center>
                        <h1 class="first_key" style="color: #cca766;">Fuentes documentales y bibliográficas</h1>
                        <p class="textisidoro textpresente">
                            Las fuentes son las que nos ayudan a comprender los hechos históricos. Sin los documentos y los libros que interpretan los datos obtenidos de ellos, no hay Historia. Pretendemos compilar aquí todos los libros y documentos que hagan referencia a Juan del Rincón.
                        </p>
                    </center>
                </div>
            </div>
        </div>

        <div class="yellowbg">
            <img src="{{ asset('/img/home/logo-overlay2.png') }}" class="backg-ovrl3 bigscreen ol2-l">
            <img src="{{ asset('/img/logos/vector-logo.svg') }}" class="backg-ovrl3 smallscreen">
            <div id="div_past_pestanas2">
                <a href="{{ route('contexto.home') }}" style="margin: auto;" class="dp_cont">
                    <h2>Contexto histórico</h2>
                </a>
                <a href="{{ route('territorio.home') }}" style="margin: auto;" class="dp_cont">
                    <h2>El territorio</h2>
                </a>
                <a href="{{ route('familia.home') }}" style="margin: auto;" class="dp_cont">
                    <h2>La familia</h2>
                </a>
                <a href="{{ route('fuentes.home') }}" style="margin: auto;" class="dp_cont">
                    <h2>Fuentes documentales y bibliográficas</h2>
                </a>
            </div>
        </div>

        <div class="home_container" id="whitebg">
            <div style="position: relative;">
                <img src="{{ asset('/img/home/logo-overlay2r.png') }}" class="backg-ovrl2 bigscreen ol2-r">
                <div id='departments_cont'>
                    
                    <div class="leftdivide" id="dep_info_cnt">
                        <p>
                            Te invitamos a colaborar con esta investigación histórico-genealógica en torno al capitán Juan del Rincón, descubridor y poblador de las Sierras Nevadas del Nuevo Reino de Granada, cuyo objeto es demostrar, mediante documentación fidedigna, el origen sefardí de este tronco común de muchos apellidos hispanoamericanos.
                        </p>
                    </div>
                    <div class="rightdivide row" id="btns_cnt_dept">
                        <center>
                            <h2>¿Deseas aportar a esta investigación?</h2>
                            <a class="loginbtns" id="discov_more" href="{{route('perks.home')}}">Entra aquí</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection