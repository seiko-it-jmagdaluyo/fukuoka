@extends('main')    
@section('title', 'Sitemap')
@section('titlebar')
    <div class="container">
        <img class='title-bar' src="images/h2_sitemap.jpg" alt="Sitemap">
    </div>
@endsection

@section('content')
     <div class="row">
        <div class="col-lg-3">
            @include('partials._sidebar')
        </div>
        
        <div class="col-lg-9">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        サイトマップ
                    </div>
                    <div class="card-body">
                        <h1 class="h1-hdr">トップナビゲーション</h1>
                        <ul class="sitemap">
                            <li><a href="/">ホーム</a></li>
                            <li><a href="members-page">会員ページ</a></li>
                            <li><a href="contact-us">お問い合わせ</a></li>
                        </ul>

                        <h1 class="h1-hdr">貿易会の紹介と入会案内</h1>
                        <ul class="sitemap">
                            <li><a href="ft-introduction-fuokuka-trading-council">福岡貿易会とは</a></li>
                            <li><a href="ft-introduction-council-main-activities">主な活動内容</a></li>
                            <li><a href="ft-introduction-admission-guidance">入会案内</a></li>
                        </ul>

                        <h1 class="h1-hdr">貿易コンサルティング</h1>
                        <ul class="sitemap">
                            <li><a href="trade-consulting-international-busines">国際ビジネス相談</a></li>
                            <li><a href="trade-consulting-adviser-list">アドバイザー一覧</a></li>
                        </ul>

                        <h1 class="h1-hdr">セミナー案内</h1>
                        <ul class="sitemap">
                            <li><a href="seminar-info">セミナー案内</a></li>
                        </ul>

                        <h1 class="h1-hdr">会員企業紹介</h1>
                        <ul class="sitemap">
                            <li><a href="member-companies-member-introduction">会員企業紹介</a></li>
                            <li><a href="member-companies-commercial-operation">商事</a></li>
                            <li><a href="member-companies-manufacturing-and-processing">製造・加工</a></li>
                            <li><a href="member-companies-bank-and-insurance">銀行・保険</a></li>
                            <li><a href="member-companies-transport-and-communications">運輸・通信</a></li>
                            <li><a href="member-companies-all-interprises">諸企業</a></li>
                            <li><a href="member-companies-special-members">特別会員</a></li>
                            <li><a href="member-companies-alphabetical-order">五十音順</a></li>
                        </ul>

                        <h1 class="h1-hdr">福貿ニュース（広報誌）</h1>                                                
                        <ul class="sitemap">
                            <li><a href="trade_index.php">福貿ニュース（広報誌）</a></li>
                        </ul>
                        
                        <h1 class="h1-hdr">フッターのナビゲーション</h1>                                                
                        <ul class="sitemap">
                            <li><a href="sitemap.html">サイトマップ</a></li>
                            <li><a href="privacy.html">個人情報の取扱い方針</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection