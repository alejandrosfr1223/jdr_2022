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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="whitebg" style="position: relative;">
            <div id="containermv">
                <div class="mv_cont textinfofisidoro">
                    <p class="textisidoro">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="mv_cont">
                    <img src="{{ asset('/img/bgdivinapastora1.png') }}" >
                </div>
            </div>
        </div>

        <div class="bluebg" style="position: relative;">
            <div id="containermv2">
                <div id="photo_bg_dp2">
                    <img src="{{ asset('/img/fisidorobg.png') }}" >
                </div>
                <div class="textinfofisidoro tex">
                    <p class="textisidoro textpresente">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>

        <div class="home_container notmain">
            <div class="row gx-0">
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/IMG_3691.JPG') }}" class="img-fluid imgsdivpast">
                </div>
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/20220513_105735.jpg') }}" class="img-fluid imgsdivpast">
                </div>
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/20220513_100126.jpg') }}" class="img-fluid imgsdivpast">
                </div>
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/20220513_102017.jpg') }}" class="img-fluid imgsdivpast">
                </div>
            </div>
        </div>

        <div class="yellowbg">
            <img src="{{ asset('/img/home/logo-overlay2.png') }}" class="backg-ovrl3 bigscreen ol2-l">
            <img src="{{ asset('/img/logos/vector-logo.svg') }}" class="backg-ovrl3 smallscreen">
            <div id="div_past_pestanas2">
                <a href="{{ route('materiales.home') }}" class="dp_cont">
                    <h2>Materiales Compilados</h2>
                </a>
                <a href="{{ route('agenealogico.home') }}" class="dp_cont">
                    <h2>Árbol Genealógico</h2>
                </a>
                <a href="{{ route('descendencia.home') }}" class="dp_cont">
                    <h2>Descendencia en América</h2>
                </a>
            </div>
        </div>

        <div class="home_container" id="whitebg">
            <div style="position: relative;">
                <img src="{{ asset('/img/home/logo-overlay2r.png') }}" class="backg-ovrl2 bigscreen ol2-r">
                <div id='departments_cont'>
                    
                    <div class="leftdivide" id="dep_info_cnt">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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