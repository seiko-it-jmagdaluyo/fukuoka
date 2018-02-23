<div class="footer-top text-center">
    <div class="container">
        <div class="row">
            @if(Request::is("en-fta") or Request::is('en-about-us'))
                <div class="col-lg-4">
                    <p>
                        <img src="images/f_logo.png" class="img-fluid" alt="Fukuoka Forign Trade Association" />
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                        <h2>2-9-28 Hakataekimae, </h2>
                        <h2>Hakata-ku, </h2>
                        <h2>Fukuoka City </h2>
                        <h2>812-0011 Japan</h2>
                        <h1 class="font-weight-bold">TEL : +81 924520707　FAX : +81 094520700</h1>
                    </p>
                </div>
            
                @elseif(Request::is("cn-fta") or Request::is('cn-about-us'))
                    <div class="col-lg-4">
                        <p>
                            <img src="images/f_logo.png" class="img-fluid" alt="Fukuoka Foreign Trade Association" />
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <p>
                            <h2>邮编：812-0011</h2>
                            <h2>日本国（福冈县）福冈市博多区博多车站前2-9-28</h2>
                            <h1 class="font-weight-bold">电话: +81 924520707　传真: +81 094520700</h1>
                        </p>
                    </div>
            @else
                <div class="col-lg-4">
                    <p>
                        <h2>公益社団法人</h2>
                        <h2>福岡貿易会</h2>
                        <h1>Fukuoka Foreign Trade Association</h1>
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                        <h2>〒812-0011</h2>
                        <h2>福岡市博多区博多駅前2-9-28</h2>
                        <h2>福岡商工会議所ビル7Ｆ</h2>

                        <h1 class="font-weight-bold">TEL : (092)452-0707　FAX : (092)452-0700</h1>
                    </p>
                </div>
            @endif
            
            <div class="col-lg-4">
                <a href="images/map.jpg" data-toggle="lightbox">
                    <img src="images/map.jpg" alt="アクセスマップ" />
                </a>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="col-lg-12 text-center">
            <p><a href="/">ホーム</a>　｜　<a href="sitemap">サイトマップ</a>　｜　<a href="privacy-policy">個人情報の取扱い方針</a></p>
            <p>Copyright &copy;2013 Fukuoka Foreign Trade Association.</p>
        </div>
    </div>
</div>