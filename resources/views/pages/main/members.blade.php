@extends('main')    
@section('title', '会員ページ')
@section('titlebar')
    <div class="container">
        <img class='title-bar' src="images/h2_kaiin.jpg" alt="Membership page">
    </div>
@endsection

@section('content')
     <div class="row">
        <div class="col-lg-3">
            @include('partials._sidebar')
        </div>
        
        <div class="col-lg-9">
            <div class="content">
                
                <h1 class="page-description">「会員ページ」のご案内</h1>
                <p class="page-description-dtls">福岡貿易会では、福岡地域の貿易振興を目的としたセミナー・ゼミを随時開催しております。</p>

                <div class="card">
                    <div class="card-header">
                        お知らせ
                    </div>
                    <div class="card-body">
                        <dl class="list_article">
                            <dt>2017年7月5日</dt>
                            <dd><a href="./kaiin_news_detail.php?content_id=558&amp;offset=0">定款</a></dd>
                        </dl>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        総会等
                    </div>
                    <div class="card-body">
                    <dl class="list_article">
                        <dt>2017年7月5日</dt>
                        <dd><a href="./kaiin_soukai_detail.php?content_id=557&amp;offset=0">第52回通常総会</a></dd>
                    </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection