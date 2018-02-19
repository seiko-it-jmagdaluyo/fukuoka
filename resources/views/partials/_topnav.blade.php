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
                        <a class="" href="en-fta"><img src="/images/en_menu01_off.JPG" alt="Home"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('en-about-us') ? 'active' : '' }}">
                        <a class="" href="en-about-us"><img src="/images/en_menu02_off.JPG" alt="Abofut Us"/></a>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="" href="/"><img src="/images/menu01_off.JPG" alt="ホーム"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('members-page') ? 'active' : '' }}">
                        <a class="" href="members-page"><img src="/images/menu02_off.JPG" alt="会員ページ"/></a>
                    </li>
                    <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                        <a class="" href="contact-us"><img src="/images/menu03_off.JPG" alt="お問い合わせ"/></a>
                    </li>
                @endif
            </ul>
            <form id="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-danger button" id="basic-addon2"><i class="fa fa-search" id="fa-search"></i></span>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>    