<div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    
    <div class="menu-list">
        <div  id="menu-content" class="menu-content collapse out">
            <div class="menu-items">
                <ul>
                    <li  data-toggle="collapse" data-target="#admission" class="collapsed active">
                        <!-- <a href="#"><i class="fas fa-plane"></i>貿易会の紹介と入会案内<i class="fas fa-angle-double-right"></i></a> -->
                        <img src="images/s_menu01.jpg" alt="貿易会の紹介と入会案内" />
                    </li>
                    <ul class="sub-menu collapse" id="admission">
                        <li><a href="fuokuka-trading-council"><i class="fas fa-angle-right"></i>福岡貿易会とは</a></li>
                        <li><a href="introduction_index02.html"><i class="fas fa-angle-right"></i>主な活動内容</a></li>
                        <li><a href="introduction_index03.html"><i class="fas fa-angle-right"></i>入会案内</a></li>
                    </ul>
                            
                    <li data-toggle="collapse" data-target="#consulting" class="collapsed">
                        <!-- <a href="#"><i class="fas fa-briefcase"></i>貿易コンサルティング<i class="fas fa-angle-double-right"></i></a> -->
                        <img src="images/s_menu02.jpg" alt="Trade Consulting">
                    </li>
                    <ul class="sub-menu collapse" id="consulting">
                        <li><a href="tradeconsulting_index.html"><i class="fas fa-angle-right"></i>国際ビジネス相談</a></li>
                        <li><a href="tradeconsulting_adviser.html"><i class="fas fa-angle-right"></i>アドバイザー一覧</a></li>
                    </ul>
                            
                    <li data-toggle="collapse" data-target="#seminar" class="collapsed">
                        <!-- <a href="#"><i class="fas fa-briefcase"></i>貿易コンサルティング<i class="fas fa-angle-double-right"></i></a> -->
                        <img src="images/s_menu03.jpg" alt="Seminar Information">
                    </li>
                    <ul class="sub-menu collapse" id="seminar">
                        <li><a href="seminar_index.php"><i class="fas fa-angle-right"></i>セミナー案内</a></li>
                    </ul>
                            
                    <li data-toggle="collapse" data-target="#membership" class="collapsed">
                        <!-- <a href="#"><i class="fas fa-briefcase"></i>貿易コンサルティング<i class="fas fa-angle-double-right"></i></a> -->
                        <img src="images/s_menu04.jpg" alt="Membership page">
                    </li>
                    <ul class="sub-menu collapse" id="membership">
                        <li><a href="kaiin_kdetail1.php"><i class="fas fa-angle-right"></i>お知らせ</a></li>
                        <li><a href="kaiin_kdetail1.php#soukai"><i class="fas fa-angle-right"></i>総会等</a></li>
                    </ul>
                            
                    <li data-toggle="collapse" data-target="#companies" class="collapsed">
                        <!-- <a href="#"><i class="fas fa-briefcase"></i>貿易コンサルティング<i class="fas fa-angle-double-right"></i></a> -->
                        <img src="images/s_menu05.jpg" alt="Introduction of member companies">
                    </li>
                    <ul class="sub-menu collapse" id="companies">
                        <li><a href="memberenterprise_index.html"><i class="fas fa-angle-right"></i>会員企業紹介</a></li>
                        <li><a href="memberenterprise_detail.php?cg_id=4"><i class="fas fa-angle-right"></i>商事</a></li>
                        <li><a href="memberenterprise_detail.php?cg_id=5"><i class="fas fa-angle-right"></i>製造・加工</a></li>
                        <li><a href="memberenterprise_detail.php?cg_id=6"><i class="fas fa-angle-right"></i>銀行・保険</a></li>
                        <li><a href="memberenterprise_detail.php?cg_id=7"><i class="fas fa-angle-right"></i>運輸・通信</a></li>
                        <li><a href="memberenterprise_detail.php?cg_id=8"><i class="fas fa-angle-right"></i>諸企業</a></li>
                        <li><a href="memberenterprise_detail.php?cg_id=9"><i class="fas fa-angle-right"></i>特別会員</a></li>
                        <li><a href="memberenterprise_detail.php"><i class="fas fa-angle-right"></i>五十音順</a></li>
                    </ul>
    
                    <li>
                        <a href="trade_index.php"><img src="images/s_menu06.jpg" alt="福貿ニュース（広報誌）" /></a>
                    </li>
                </ul>
            </div>

            <p class="blog-lnk"><a href="/blog/"><img src="images/banner_blog_off.jpg" alt="スタッフブログ" /></a></p>
            @if(Request::is("/"))
        
                <div class="external-links">
                    <a href="http://www.city.fukuoka.lg.jp/" target="_blank"><img src="images/banner01.jpg" alt="福岡市" /></a>
                    <a href="http://asiabiz.city.fukuoka.lg.jp/" target="_blank"><img src="images/banner06.jpg" alt="Asia-biz Fukuoka" /></a>
                    <a href="http://island-city.city.fukuoka.lg.jp/" target="_blank"><img src="images/banner02.jpg" alt="FUKUOKAアイランドシティ" /></a>
                    <a href="http://port-of-hakata.city.fukuoka.lg.jp/index.php" target="_blank"><img src="images/banner03.jpg" alt="博多港" /></a>
                    <a href="http://www.jetro.go.jp/indexj.html" target="_blank"><img src="images/banner04.jpg" alt="日本貿易振興機構（ジェトロ）" /></a>
                    <a href="http://www.fukunet.or.jp/index.shtml" target="_blank"><img src="images/banner05.jpg" alt="福岡商工会議所" /></a>
                </div>
            @endif
        </div>
    </div>
</div>