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
                                <h1 class="title_notmain">Contexto</h1>
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
                    La situación en los reinos de España a partir de 1492 va a cambiar por dos aspectos fundamentales, la expulsión de los judíos y el descubrimiento del Nuevo Mundo. Muchos de los que optaron por la conversión van a ver que continúan siendo perseguidos, tanto por la Inquisición como por los cristianos viejos. Ello los mueve a embarcarse en grandes empresas, porque no tienen nada que perder.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" />
                            <h2>Contexto</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection