@extends('main')    
@section('title', '入会案内')
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
                        入会案内
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12 admission-intro">
                            <p class="text-justify">福岡貿易会の目的に賛同され、自らビジネスを、また、福岡地域の経済を発展させたいという意欲のある方の入会をお待ちしております。<br />
                                入会手続きにつきましては、福岡貿易会事務局にご連絡ください。
                            </p>
                        </div>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered text-justify">
                                <tr>
                                    <td class="table-info text-center">会員の資格</td>
                                    <td>原則として、福岡県内に事業所を持ち、現在貿易を営むか将来予定している企業、あるいは貿易関連の製造・金融・運輸及び商事などを営む企業を対象にしております。</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">入会費</td>
                                    <td>5,000円</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">会　費</td>
                                    <td>１口　年額　30,000円（１か月当たり2,500円）</td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">納　期</td>
                                    <td>
                                        ・入会金は、入会時に納入いただきます。<br />
                                        ・年会費は、毎年4月に一括して納入いただきます。<br />
                                        ・年度途中の入会の場合は、月割りとなります。
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-info text-center">連絡先</td>
                                    <td>福岡貿易会 事務局<br />
                                        〒812-0011　福岡市博多区博多駅前2-9-28　福岡商工会議所ビル７F<br />
                                        TEL:092-452-0707<br />
                                        FAX:092-452-0700<br />
                                        e-mail:<a href="mailto:info@fukuoka-fta.or.jp">info@fukuoka-fta.or.jp</a>
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