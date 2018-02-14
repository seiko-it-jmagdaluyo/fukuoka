@extends('main')    
@section('title', 'What is Fuokuka Trading Council?')
@section('titlebar')
    <div class="container">
        <img class="title-bar"src="images/head_introduction.jpg" alt="福岡貿易会の紹介と入会案内">
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
                        <p class="float-right"><img class="img-fluid paragraph-img" src="images/introduction_img01.jpg" alt="" /></p>
                        <p class="text-justify">福岡貿易会は、昭和３３年（1958年）に設立された「福岡貿易振興会」をその前身としています。 「福岡貿易振興会」は、我が国が貿易政策として輸出振興による経済発展を目指していた高度成長のただ中に、貿易の振興による地域の発展を目的として福岡市及び周辺経済圏の貿易関連企業が力をあわせて設立されました。 その後、昭和４８年（1973年）に「福岡貿易会」と改称し、翌年の昭和４９年（1973年）法人化を経て「社団法人　福岡貿易会」となりました。そして、新公益法人制度が創設されたことに伴い、平成２５年（2013年）４月に「公益社団法人　福岡貿易会」に移行しました。</p>
                        <div class="clearfix">
                            <p class="float-left"><img class="img-fluid paragraph-img" src="images/introduction_img02.jpg" alt="" /></p>
                            <p class="text-justify">その間、平成９年（1997年）には、福岡市のアジアの交流拠点都市づくりに呼応し、アジア経済交流センターを開設しました。国際ビジネス情報の窓口となり、地場企業の人材育成支援に取り組むべく、同センター運営しています。 平成２１年（2009年）に、中国での地場企業の販路拡大、進出を支援するため上海事務所（上海代表処）を設置しました。</p>
                            <p class="text-justify">歴史を紐解けば、福岡は、古来から博多湾を拠点にアジアとの活発な交流を行ってきました。 当会は、これまで、50年以上にわたり、日本の経済成長とともに道を歩んで来ましたが、今後も、その伝統を引き継ぎ、貿易の振興により地元福岡を人や物が行きかう賑やかなまちにしたいと考えています。</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection