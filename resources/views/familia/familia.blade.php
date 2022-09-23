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
                                <h1 class="title_notmain">La Familia</h1>
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
                    Analizaremos los diferentes lazos familiares que se van urdiendo a través del tiempo en sus dos vertientes, la ascendente y la descendente. De esta manera podremos avanzar en la búsqueda y el descubrimiento del antepasado sefardí de Juan del Rincón y poner en comunicación a las distintas ramas de sus descendientes en territorio americano.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                        <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/logos/jdr.png') }}" />
                        <h2>La Familia</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection