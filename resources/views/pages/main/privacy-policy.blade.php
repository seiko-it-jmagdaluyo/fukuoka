@extends('main')    
@section('title', 'Sitemap')
@section('titlebar')
    <div class="container">
        <a href="images/h2_privacy.jpg" data-toggle="lightbox">
            <img class='title-bar' src="images/h2_privacy.jpg" alt="個人情報の取扱い方針">
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
                        個人情報の取扱いに付いて
                    </div>
                    <div class="card-body">
                        <p class="text-justify">
                            福岡貿易会ホームページでの個人情報の収集・利用・管理について、福岡市個人情報保護条例に基づき、次のとおり適切に取り扱うとともに、皆さまに安心して利用いただけるホームページづくりに努めていきます。
                        </p>

                        <h1 class="h1-hdr">個人情報とは</h1>
                        <p class="text-justify">
                            本サイトを通じて福岡貿易会が提供を受けた、住所、氏名、電話番号、E-mailアドレス等、特定の個人を識別できる情報をいいます
                        </p>

                        <h1 class="h1-hdr">個人情報の収集について</h1>
                        <p class="text-justify">
                            本サイトを通じて福岡貿易会が個人情報を収集する際は、利用者ご本人の意思による情報の提供を原則とします。
                            個人情報の収集にあたってはその利用目的を特定し、明示いたします。個人情報の収集は特定された利用目的を達成するために必要な範囲内で行います
                        </p>

                        <h1 class="h1-hdr">個人情報の利用制限について</h1>
                        <p class="text-justify">
                            提供いただいた個人情報は、あらかじめ明示した利用目的の範囲内で利用いたします。個人情報は、本人の同意がある場合など福岡市個人情報保護条例で定める一定の場合を除き、明示した利用目的以外で利用・提供することはありません。
                        </p>

                        <h1 class="h1-hdr">個人情報の管理について</h1>
                        <p class="text-justify">
                            収集しました個人情報については、ホームページ管理者が厳重に管理し、漏えい、不正流用、改ざん等の防止に適切な対策を講じます。利用目的に関し保存の必要のなくなった個人情報については、確実に、かつ、速やかに消去します。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection