<div class="container-fluid topnav">
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if(Request::is("en-fta") or Request::is("en-about-us"))
                    <li class="nav-item {{ Request::is('en-fta') ? 'active' : '' }}">
                        <a class="" href="en-fta"><img src="/images/en_menu01_off.jpg" alt="Home"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('en-about-us') ? 'active' : '' }}">
                        <a class="" href="en-about-us"><img src="/images/en_menu02_off.jpg" alt="Abofut Us"/></a>
                    </li>
                @elseif(Request::is("cn-fta") or Request::is("cn-about-us"))
                    <li class="nav-item {{ Request::is('cn-fta') ? 'active' : '' }}">
                        <a class="" href="cn-fta"><img src="/images/cn_menu01_off.jpg" alt="Home"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('cn-about-us') ? 'active' : '' }}">
                        <a class="" href="cn-about-us"><img src="/images/cn_menu02_off.jpg" alt="Abofut Us"/></a>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="" href="/"><img src="/images/menu01_off.jpg" alt="ホーム"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('members-page') ? 'active' : '' }}">
                        <a class="" href="members-page"><img src="/images/menu02_off.jpg" alt="会員ページ"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                        <a class="" href="contact-us"><img src="/images/menu03_off.jpg" alt="お問い合わせ"/></a>
                    </li>
                @endif
            </ul>
            <form action="http://custom.search.yahoo.co.jp/search" method="get" id="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        {{--  <span class="input-group-text bg-danger button" id="basic-addon2"><i class="fa fa-search" id="fa-search"></i></span>  --}}
                        <button type="submit" class="input-group-text bg-danger button" id="basic-addon2"><i class="fa fa-search" id="fa-search"></i></button>
                    </div>
                </div>
                <input type="hidden" id="fr" name="fr" value="cse">
                <input type="hidden" id="ei" name="ei" value="UTF-8">
                <input type="hidden" id="csid" name="csid" value="VLJBC8dyJINAmffWCCAFgXmajsYa4iNUYol1">
                <input type="hidden" name="vs" value="fukuoka-fta.or.jp" id="yjInsite">
            </form>
        </div>
    </nav>
</div>    