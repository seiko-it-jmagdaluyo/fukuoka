@extends('main')    
@section('title', '国際ビジネス相談')
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
                        国際ビジネス個別相談
                    </div>
                    <div class="card-body">
                        <h1 class="list-header">
                            <a href="images/trade_ttl02.jpg" data-toggle="lightbox">
                                <img class="img-fluid" src="images/trade_ttl02.jpg" alt="困った時は、まず国際ビジネス相談に！" />
                            </a>
                        </h1>
                        <p class="text-justify">輸出入に関わること、海外進出、投資等、皆様のご相談内容や対象国に応じて最適のアドバイザーが対応します。 完全予約制でご相談日は皆様のご都合に合わせて調整します。 どうぞお気軽にご連絡ください！</p>

                        <p>
                            <a href="images/trade_img03.jpg" data-toggle="lightbox">
                                <img class="img-fluid" src="images/trade_img03.jpg" alt="例えばこんな相談にお答えいたします 一般貿易相談では" />
                            </a>
                        </p>
                        
                        <p class="text-justify">※ご相談は、原則、対面相談でお願いしております。E-mail、FAXによるご相談も受け付けておりますが、誤解を避けるために、 アドバイザーから電話等で詳しい状況のお尋ねをさせていただく場合があります。 </p>
                        <p class="text-justify">※国際法務に関するご相談は、1案件に１回限りでお願いします。 </p>
                        <p class="text-justify">※ご相談に対する助言等は参考意見であり、その解決に向けた判断及び実行等によって生じる責任は一切負いかねますので、 予めご了承願います。 </p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        日程・お申込みについて
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered text-justify">
                                <tr>
                                    <td class="table-info text-center">日時</td>
                                    <td>毎週月曜日〜金曜日(祝祭日をのぞく)<br />
                                    9：30〜16：30(1件につき1時間)</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">場所</td>
                                    <td>（公社）福岡貿易会<br />福岡市博多区博多駅前2丁目9番28号　福岡商工会議所ビル7F</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">相談料</td>
                                    <td>無料</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">利用方法</td>
                                    <td>予約制ですので、電話等でお申し込みください。<br />(会社名、ご担当者名、連絡先、相談内容等をお知らせください。)<br />TEL　(092)452-0707　　FAX　(092)452-0700　　担当：柴田<br />
                                    <span><a href="http://www.fukuoka-fta.or.jp/contact_index.php"><img src="images/trade_reserve_off.jpg" alt="e-mailでの予約はこちらから" /></a></span></td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">アドバイザー</td>
                                    <td><a href="tradeconsulting_adviser.html"><img src="images/trade_adviser_off.jpg" alt="アドバイザー一覧はこちらから" /></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection