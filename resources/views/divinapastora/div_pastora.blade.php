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
                                    <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                                </span>
                                <h1 class="title_notmain">{{ trans("divinapastora.div_pastora") }}</h1>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="home_container notmain" id="whitebg">
            <img src="/img/home/logo-overlay2.png" class="backg-ovrl2 bigscreen ol2-l">
            <div id='pastora_cont'>
                <div class="leftdivide" id="ddivina_info_cnt">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="rightdivide" id="ddivina_info_cntr">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img src="/img/home/Divinapastora.png" id="divimg" class="changecolorpngs">
                            <h2>{{ trans("divinapastora.div_pastora") }}</h2>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection