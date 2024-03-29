@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div class="submain_container">
                <table style="height: 15rem; width: 100%; text-align: center;">
                    <tr>
                        <td>
                            <div class='welcomescreen'>
                                <h1 class="title_notmain">Aportar a esta investigación</h1>
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
                    Te invitamos a colaborar con esta investigación histórico-genealógica en torno al capitán Juan del Rincón, descubridor y poblador de las Sierras Nevadas del Nuevo Reino de Granada, cuyo objeto es demostrar, mediante documentación fidedigna, el origen sefardí de este tronco común de muchos apellidos hispanoamericanos.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" />
                            <h2>Aportar a esta investigación</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection