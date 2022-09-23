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
                                <h1 class="title_notmain">El Territorio</h1>
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
                    La vida de Juan del Rincón se desarrolla principalmente en un área por explorar entre los territorios pertenecientes a la Audiencia de Santa Fe y a los del Nuevo Reino de Granada. La fundación de Pamplona será el punto de partida de diferentes expediciones, con el fin de pacificar a los indios y fundar nuevas ciudades.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                        <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" />
                        <h2>El Territorio</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection