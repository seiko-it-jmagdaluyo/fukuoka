<div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    
    <div class="menu-list">
        <div  id="menu-content" class="menu-content collapse out">
            <div class="menu-items">
                <ul>
                    {{--  Introduction Links  --}}
                    <li  data-toggle="collapse" data-target="#introduction" class="{{ strpos(url()->current(), 'ft-introduction') ? 'active' : 'collapsed'}}" {{ strpos(url()->current(), 'ft-introduction') ? 'aria-expanded=true' : 'aria-expanded=false'}}>
                        <img src="images/s_menu01.jpg" alt="貿易会の紹介と入会案内" />
                    </li>
                    <ul class="sub-menu collapse {{ strpos(url()->current(), 'ft-introduction') ? 'show' : ''}}" id="introduction">
                        <li class="{{ strpos(url()->current(), 'fuokuka-trading-council') ? 'active' : ''}}"><a href="ft-introduction-fuokuka-trading-council"><i class="fas fa-angle-right"></i>福岡貿易会とは</a></li>
                        <li class="{{ strpos(url()->current(), 'council-main-activities') ? 'active' : ''}}"><a href="ft-introduction-council-main-activities"><i class="fas fa-angle-right"></i>主な活動内容</a></li>
                        <li class="{{ strpos(url()->current(), 'admission-guidance') ? 'active' : ''}}"><a href="ft-introduction-admission-guidance"><i class="fas fa-angle-right"></i>入会案内</a></li>
                    </ul>
                            
                    {{--  Trade Consulting Links  --}}
                    <li data-toggle="collapse" data-target="#consulting" class="{{ strpos(url()->current(), 'trade-consulting') ? 'active' : 'collapsed'}}" {{ strpos(url()->current(), 'trade-consulting') ? 'aria-expanded=true' : 'aria-expanded=false'}}>
                        <img src="images/s_menu02.jpg" alt="Trade Consulting">
                    </li>
                    <ul class="sub-menu collapse {{ strpos(url()->current(), 'trade-consulting') ? 'show' : ''}}" id="consulting">
                        <li class="{{ strpos(url()->current(), 'international-busines') ? 'active' : ''}}"><a href="trade-consulting-international-busines"><i class="fas fa-angle-right"></i>国際ビジネス相談</a></li>
                        <li class="{{ strpos(url()->current(), 'adviser-list') ? 'active' : ''}}"><a href="trade-consulting-adviser-list"><i class="fas fa-angle-right"></i>アドバイザー一覧</a></li>
                    </ul>
                    
                    {{--  Seminar Link  --}}
                    <li data-toggle="collapse" data-target="#seminar" class="{{ strpos(url()->current(), 'seminar') ? 'active' : 'collapsed'}}" {{ strpos(url()->current(), 'seminar') ? 'aria-expanded=true' : 'aria-expanded=false'}}>
                        <img src="images/s_menu03.jpg" alt="Seminar Information">
                    </li>
                    <ul class="sub-menu collapse {{ strpos(url()->current(), 'seminar') ? 'show' : ''}}" id="seminar">
                        <li class="{{ strpos(url()->current(), 'info') ? 'active' : ''}}"><a href="seminar-info"><i class="fas fa-angle-right"></i>セミナー案内</a></li>
                    </ul>
                            
                    {{--  <li data-toggle="collapse" data-target="#membership" class="collapsed">
                        <img src="images/s_menu04.jpg" alt="Membership page">
                    </li>
                    <ul class="sub-menu collapse" id="membership">
                        <li><a href="kaiin_kdetail1.php"><i class="fas fa-angle-right"></i>お知らせ</a></li>
                        <li><a href="kaiin_kdetail1.php#soukai"><i class="fas fa-angle-right"></i>総会等</a></li>
                    </ul>  --}}
                            
                    <li data-toggle="collapse" data-target="#companies" class="{{ strpos(url()->current(), 'member-companies') ? 'active' : 'collapsed'}}" {{ strpos(url()->current(), 'member-companies') ? 'aria-expanded=true' : 'aria-expanded=false'}}>
                        <img src="images/s_menu05.jpg" alt="Introduction of member companies">
                    </li>
                    <ul class="sub-menu collapse {{ strpos(url()->current(), 'member-companies') ? 'show' : ''}}" id="companies">
                        <li class="{{ strpos(url()->current(), 'member-introduction') ? 'active' : ''}}"><a href="member-companies-member-introduction"><i class="fas fa-angle-right"></i>会員企業紹介</a></li>
                        <li class="{{ strpos(url()->current(), 'commercial-operation') ? 'active' : ''}}"><a href="member-companies-commercial-operation"><i class="fas fa-angle-right"></i>商事</a></li>
                        <li class="{{ strpos(url()->current(), 'manufacturing-and-processing') ? 'active' : ''}}"><a href="member-companies-manufacturing-and-processing"><i class="fas fa-angle-right"></i>製造・加工</a></li>
                        <li class="{{ strpos(url()->current(), 'bank-and-insurance') ? 'active' : ''}}"><a href="member-companies-bank-and-insurance"><i class="fas fa-angle-right"></i>銀行・保険</a></li>
                        <li class="{{ strpos(url()->current(), 'transport-and-communications') ? 'active' : ''}}"><a href="member-companies-transport-and-communications"><i class="fas fa-angle-right"></i>運輸・通信</a></li>
                        <li class="{{ strpos(url()->current(), 'all-interprises') ? 'active' : ''}}"><a href="member-companies-all-interprises"><i class="fas fa-angle-right"></i>諸企業</a></li>
                        <li class="{{ strpos(url()->current(), 'special-members') ? 'active' : ''}}"><a href="member-companies-special-members"><i class="fas fa-angle-right"></i>特別会員</a></li>
                        <li class="{{ strpos(url()->current(), 'alphabetical-order') ? 'active' : ''}}"><a href="member-companies-alphabetical-order"><i class="fas fa-angle-right"></i>五十音順</a></li>
                    </ul>
    
                    <li class="{{ strpos(url()->current(), 'fuokuka-news') ? 'active' : 'collapsed'}}" {{ strpos(url()->current(), 'fuokuka-news') ? 'aria-expanded=true' : 'aria-expanded=false'}}>
                        <a href="fuokuka-news"><img src="images/s_menu06.jpg" alt="福貿ニュース（広報誌）" /></a>
                    </li>
                </ul>
            </div>

            <p class="blog-lnk"><a href="/blog/"><img src="images/banner_blog_off.jpg" alt="スタッフブログ" /></a></p>
            @if(Request::is("/"))
        
                <div class="external-links">
                    <a href="http://www.city.fukuoka.lg.jp/" target="_blank" rel="noopener"><img src="images/banner01.jpg" alt="福岡市" /></a>
                    <a href="http://asiabiz.city.fukuoka.lg.jp/" target="_blank" rel="noopener"><img src="images/banner06.jpg" alt="Asia-biz Fukuoka" /></a>
                    <a href="http://island-city.city.fukuoka.lg.jp/" target="_blank" rel="noopener"><img src="images/banner02.jpg" alt="FUKUOKAアイランドシティ" /></a>
                    <a href="http://port-of-hakata.city.fukuoka.lg.jp/index.php" target="_blank" rel="noopener"><img src="images/banner03.jpg" alt="博多港" /></a>
                    <a href="http://www.jetro.go.jp/indexj.html" target="_blank" rel="noopener"><img src="images/banner04.jpg" alt="日本貿易振興機構（ジェトロ）" /></a>
                    <a href="http://www.fukunet.or.jp/index.shtml" target="_blank" rel="noopener"><img src="images/banner05.jpg" alt="福岡商工会議所" /></a>
                </div>
            @endif
        </div>
    </div>
</div>