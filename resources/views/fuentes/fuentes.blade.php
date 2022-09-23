@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div class="submain_container">
                <table style="height: 15rem; width: 100%; text-align: center;">
                    <tr>
                        <td>
                            <div class='welcomescreen'>
                                <span class="members_index_icons fa-stack fa-2x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-search fa-stack-1x fa-inverse"></i>
                                </span>
                                <h1 class="title_notmain">Fuentes documentales y bibliográficas</h1>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="home_container notmain" id="whitebg">


            <div id='departments_cont'>
                <div class="leftdivide" id="dep_info_cnt">
                    
                    <p>
                    Las fuentes son las que nos ayudan a comprender los hechos históricos. Sin los documentos y los libros que interpretan los datos obtenidos de ellos, no hay Historia. Pretendemos compilar aquí todos los libros y documentos que hagan referencia a Juan del Rincón.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                        <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" />
                        <h2>Fuentes documentales y bibliográficas</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection