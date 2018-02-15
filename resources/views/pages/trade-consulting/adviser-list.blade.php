@extends('main')    
@section('title', 'アドバイザー一覧')
@section('titlebar')
    <div class="container">
        <a href="images/h2_kokusai.jpg" data-toggle="lightbox">
            <img class="title-bar" src="images/h2_kokusai.jpg" alt="国際ビジネス相談">
        </a>
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
                        アドバイザー一覧
                    </div>
                    <div class="card-body">
                        <div class="row adviser-list">

                            <!-- List 1 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <canvas class="header-bg header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="images/yahata.jpg" alt="矢幡　卓美　氏">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <strong> 矢幡　卓美　氏 </strong><br/>
                                            (氏名) 
                                        </p>
                                        <p>
                                            <strong> (株)イックス　代表取締役社長 </strong><br/>
                                            (役職及び職名) 
                                        </p>
                                        <p>
                                            <strong> 安宅産業(株)、福岡丸本(株)常務取締役、(株)IDSトレーディング代表取締役 </strong><br/>
                                            (経歴) 
                                        </p>
                                        <p>
                                            <strong> アジア、欧州、米国 </strong><br/>
                                            (地域) 
                                        </p>
                                        <p>
                                            <strong> プラスチック・紙製品、機械、食品、衣料品、雑貨 </strong><br/>
                                            (分野)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- List 2 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <canvas class="header-bg header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="images/okabayashi.jpg" alt="岡林　秀成　氏">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <strong> 岡林　秀成　氏 </strong><br/>
                                            (氏名) 
                                        </p>
                                        <p>
                                            <strong> 山九(株)、山九東源国際(香港)、通関士免許保持、福岡大学商学部　非常勤講師、西日本短期大学　非常勤講師 </strong><br/>
                                            (経歴) 
                                        </p>
                                        <p>
                                            <strong> ----- </strong><br/>
                                            (地域) 
                                        </p>
                                        <p>
                                            <strong> 輸出入通関、国際物流、貿易実務、貿易ビジネス実務 </strong><br/>
                                            (分野)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- List 3 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <canvas class="header-bg header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="images/yamagami.jpg" alt="山上　祥吾　氏">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <strong> 山上　祥吾 氏 </strong><br/>
                                            (氏名) 
                                        </p>
                                        <p>
                                            <strong> 山上国際法律特許事務所代表弁護士・弁理士 </strong><br/>
                                            (役職及び職名) 
                                        </p>
                                        <p>
                                            <strong> ----- </strong><br/>
                                            (地域) 
                                        </p>
                                        <p>
                                            <strong> 中国・アジア欧米諸国との取引、国際法務、中国語・英語による契約書作成等 </strong><br/>
                                            <strong> 国際取引に関するトラブルが増えています。是非お気軽にご相談ください。
                                                    また、世界各地の法律事務所とネットワークを持っております。 </strong><br/>
                                            (分野) 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- List 4 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <canvas class="header-bg header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="images/tanaka.jpg" alt="田中　豊　氏">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <strong> 田中　豊　氏 </strong><br/>
                                            (氏名) 
                                        </p>
                                        <p>
                                            <strong> アジアネット代表、中小機構国際化支援アドバイザー  </strong><br/>
                                            (役職及び職名) 
                                        </p>
                                        <p>
                                            <strong> 日本国際貿易促進協会、農水省農林水産物食品輸出コーディネーター他 </strong><br/>
                                            (経歴) 
                                        </p>
                                        <p>
                                            <strong> 中国・香港・台湾・シンガポール・タイ </strong><br/>
                                            (地域) 
                                        </p>
                                        <p>
                                            <strong> 食品輸出、地場産品の海外販路開拓 </strong><br/>
                                            (分野) 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- List 5 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <canvas class="header-bg header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="images/komori.jpg" alt="古森　政基　氏">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <strong> 古森　政基　氏 </strong><br/>
                                            (氏名) 
                                        </p>
                                        <p>
                                            <strong> (有)アジアビジネスコンサルタント代表取締役社長、一級建築士 </strong><br/>
                                            (役職及び職名) 
                                        </p>
                                        <p>
                                            <strong> 北京東苑公寓有限公司社長(大和ハウス、丸紅出資) </strong><br/>
                                            (経歴) 
                                        </p>
                                        <p>
                                            <strong> 中国・韓国 </strong><br/>
                                            (地域) 
                                        </p>
                                        <p>
                                            <strong> 投資、ビジネス環境、建築内装、環境、IT、加工輸入製造業 </strong><br/>
                                            (分野) 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- List 5 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <canvas class="header-bg header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="images/syutou.jpg" alt="首藤　章三　氏">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <strong> 首藤　章三　氏 </strong><br/>
                                            (氏名) 
                                        </p>
                                        <p>
                                            <strong> 首藤インターナショナル(有)経営コンサルタント、中小企業診断士、ジェトロ認定 AIBA 貿易アドバイザー、ジェトロ新輸出大国エキスパート（海外展開戦略策定支援）</strong><br/>
                                            (役職及び職名) 
                                        </p>
                                        <p>
                                            <strong> 大倉商事(株)、同社ホーチミン駐在、ニチメン九州(株) </strong><br/>
                                            (経歴) 
                                        </p>
                                        <p>
                                            <strong> ベトナム・フランス </strong><br/>
                                            (地域) 
                                        </p>
                                        <p>
                                            <strong> 食品、雑貨、機械、事業化計画、投資等 </strong><br/>
                                            (分野) 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection