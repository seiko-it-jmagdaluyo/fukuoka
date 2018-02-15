@extends('main')    
@section('title', 'Council Main Activities')
@section('titlebar')
    <div class="container">
        <img class="title-bar" src="images/head_introduction.jpg" alt="福岡貿易会の紹介と入会案内">
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
                        主な活動内容
                    </div>
                    <div class="card-body">
                        <h1 class="list-header"><img class="img-fluid" src="images/introduction2_ttl01.jpg" alt="情報提供事業" /></h1>
                        <p class="float-right"><img class="paragraph-img" src="images/introduction2_img01.jpg" alt="情報提供事業" /></p>
                        <ul class="activities-list">
                            <li class="text-justify">貿易や海外取引を行う地場企業や海外からの進出企業等に対して、内外の貿易・投資及び市場動向や各種統計などの書籍、報告書等を整備するとともに、当会および関係団体が主催する貿易に関する研修会やセミナーの案内及び引き合い情報などの各種情報を提供しています。</li>
                            <li class="text-justify">貿易統計や貿易関連の資料を収集しライブラリーを運営しています。</li>
                            <li class="text-justify">会員企業等に対し、福貿ニュース（広報誌）を年数回発行しています。</li>
                        </ul>

                        <h1 class="list-header"><img class="img-fluid" src="images/introduction2_ttl02.jpg" alt="人材育成事業（講演会、セミナー等の開催)" /></h1>
                        <p class="float-right"><img class="paragraph-img" src="images/introduction2_img02.jpg" alt="人材育成事業（講演会、セミナー等の開催)" /></p>
                        <ul class="activities-list">
                            <li class="text-justify">各企業の人材育成の支援や情報の提供等を行うため、国際ビジネス活動にかかる貿易実務、通関手続き及び契約などをテーマに実務講座を開催しています。</li>
                            <li class="text-justify">経済情勢の変化に応じた、有益な情報を提供するため適宜、時事セミナーを開催しています。</li>
                        </ul>

                        <h1 class="list-header"><img class="img-fluid" src="images/introduction2_ttl03.jpg" alt="貿易コンサルティング事業" /></h1>
                        <p class="float-right"><img class="paragraph-img" src="images/introduction2_img03.jpg" alt="貿易コンサルティング事業" /></p>
                        <ul class="activities-list">
                            <li class="text-justify">海外取引を検討中の方や、既に展開中の方など国際ビジネスに携わる方を対象に、交渉の進め方、決済方法など貿易や投資に関して生じる諸問題について、適切な指導助言を受けることができる場として、貿易会社の現役経営者でもある専門アドバイザーによる貿易コンサルティングを実施しています。</li>
                            <li class="text-justify">中国での事業展開に関する相談が多いことから中国専門のアドバイザーによる「中国ビジネス相談」を実施しています。</li>
                        </ul>

                        <h1 class="list-header"><img class="img-fluid" src="images/introduction2_ttl04.jpg" alt="海外経済視察団の派遣" /></h1>
                        <p class="float-right"><img class="paragraph-img" src="images/introduction2_img04.jpg" alt="海外経済視察団の派遣" /></p>
                        <ul class="activities-list">
                            <li class="text-justify">貿易や投資などの経済面において注目されているか若しくはこれから注目を集めると思われる国や地域に、その経済動向や投資環境を現地で確認し、今後の事業展開の参考とするため経済視察団を派遣しています。同視察団では、最新の状況を知るため現地で経済セミナーや、関係機関との情報交換、企業視察などを実施しています。</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection