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
                                <h1 class="title_notmain">{{ trans("formation.formation") }}</h1>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage" src="/img/logos/onebranch.png" class="svgcolor" style="transform: rotate(180deg);" />
                            <h2>{{ trans("formation.formation") }}</h2>
                        </center>
                    </div>
                </div>
            </div>

            <div style="margin:auto; width:100%;">
                <div id="sub_elementscont">
                    <a href="{{route('formation.univ')}}">
                        <div class="cont_redirects">
                            <span class="padicons members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                            </span>
                            <h3 class="bold">{{ trans("formation.univ") }}</h3>
                        </div>
                    </a>
                    <a href="{{route('formation.instit')}}">
                        <div class="cont_redirects">
                            <span class="padicons members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-gavel fa-stack-1x fa-inverse"></i>
                            </span>
                            <h3 class="bold">{{ trans("formation.instit") }}</h3>
                        </div>
                    </a>
                    <a href="{{route('formation.tutor')}}">
                        <div class="cont_redirects">
                            <span class="padicons members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pagelines fa-stack-1x fa-inverse"></i>
                            </span>
                            <h3 class="bold">{{ trans("formation.tutor") }}</h3>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

@endsection