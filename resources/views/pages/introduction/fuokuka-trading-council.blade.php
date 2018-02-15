@extends('main')    
@section('title', '福岡貿易会とは')
@section('titlebar')
    <div class="container">
        <a href="images/head_introduction.jpg" data-toggle="lightbox">
            <img class="title-bar" src="images/head_introduction.jpg" alt="福岡貿易会の紹介と入会案内">
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
                        福岡貿易会とは
                    </div>
                    <div class="card-body">
                        <p class="float-right">
                            <a href="images/introduction_img01.jpg" data-toggle="lightbox">
                                <img class="img-fluid paragraph-img" src="images/introduction_img01.jpg" alt="" />
                            </a>
                        </p>
                        <p class="text-justify">福岡貿易会は、昭和３３年（1958年）に設立された「福岡貿易振興会」をその前身としています。 「福岡貿易振興会」は、我が国が貿易政策として輸出振興による経済発展を目指していた高度成長のただ中に、貿易の振興による地域の発展を目的として福岡市及び周辺経済圏の貿易関連企業が力をあわせて設立されました。 その後、昭和４８年（1973年）に「福岡貿易会」と改称し、翌年の昭和４９年（1973年）法人化を経て「社団法人　福岡貿易会」となりました。そして、新公益法人制度が創設されたことに伴い、平成２５年（2013年）４月に「公益社団法人　福岡貿易会」に移行しました。</p>

                        <div class="clearfix">
                            <a href="images/introduction_img02.jpg" data-toggle="lightbox">
                                <img class="float-left img-fluid paragraph-img" src="images/introduction_img02.jpg" alt="" />
                            </a>
                            
                            <p class="text-justify">その間、平成９年（1997年）には、福岡市のアジアの交流拠点都市づくりに呼応し、アジア経済交流センターを開設しました。国際ビジネス情報の窓口となり、地場企業の人材育成支援に取り組むべく、同センター運営しています。 平成２１年（2009年）に、中国での地場企業の販路拡大、進出を支援するため上海事務所（上海代表処）を設置しました。</p>
                            <p class="text-justify">歴史を紐解けば、福岡は、古来から博多湾を拠点にアジアとの活発な交流を行ってきました。 当会は、これまで、50年以上にわたり、日本の経済成長とともに道を歩んで来ましたが、今後も、その伝統を引き継ぎ、貿易の振興により地元福岡を人や物が行きかう賑やかなまちにしたいと考えています。</p>
                            <div class="clearfix"></div>
                        </div>

                        
                        <a href="images/jimusyo01.jpg" data-toggle="lightbox">
                            <img class="img-fluid big-mg-space" src="images/jimusyo01.jpg" alt="Fukuoka Trade Firm Office">
                        </a>

                        <div class="table-responsive-lg">
                            <table class="table table-bordered text-justify">
                                <tr>
                                    <td class="table-info text-center">名　称</td>
                                    <td>公益社団法人　福岡貿易会</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">所在地</td>
                                    <td>〒812-0011　福岡市博多区博多駅前２－９－２８<br />福岡商工会議所ビル７階</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">設　立</td>
                                    <td>１９５８年（昭和３３年）９月１６日</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">法人設立</td>
                                    <td>１９７４年（昭和４９年）１２月７日</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">会　員 <br/>(from DB)</td>
                                    <td>(from DB)</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">設立目的</td>
                                    <td>福岡地区及び周辺経済圏の貿易を振興し、地域経済の発展を図る。</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">事業内容</td>
                                    <td>
                                        貿易情報及び貿易資料の提供、貿易に関する講演会・懇談会・説明会等の開催、 海外視察団の派遣<br />
                                        または招聘、外国航路及び貿易関係機関誘致等による地域の貿易環境整備推進、アジア経済交流<br />
                                        センターにかかる事業等
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">沿　革</td>
                                    <td>
                                        <dl>
                                            <dt>1958年（昭和33年）9月</dt>
                                            <dd>福岡市及び周辺経済圏の貿易関連企業が「福岡貿易振興会」を設立</dd>
                                            <dt>1973年（昭和48年）4月</dt>
                                            <dd>福岡県内の他団体を統合して「福岡貿易会」と改名</dd>
                                            <dt>1974年（昭和49年）12月</dt>
                                            <dd>法人化し「社団法人　福岡貿易会」を設立</dd>
                                            <dt>1997年（平成9年）7月</dt>
                                            <dd>アジア経済交流センターを併設</dd>
                                            <dt>2009年（平成21年）4月</dt>
                                            <dd>中国・上海に「日本社団法人　福岡貿易会　上海代表処」を設置</dd>
                                            <dt>2013年（平成25年）4月</dt>
                                            <dd class="last">「公益社団法人　福岡貿易会」に移行</dd>
                                        </dl>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection