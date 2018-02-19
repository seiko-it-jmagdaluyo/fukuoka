@extends('main')    
@section('title', '福貿ニュース（広報誌）')
@section('titlebar')
    <div class="container">
        <a href="images/head_trade.jpg" data-toggle="lightbox">
            <img class="title-bar" src="images/head_trade.jpg" alt="福貿ニュース（広報誌）">
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
                    <div class="card-body">
                        <p>
                            <a href="images/trade-n_ttl01.jpg" data-toggle="lightbox">
                                <img class="img-fluid" src="images/trade-n_ttl01.jpg" alt="福岡貿易会情報誌　福貿ニュース" />
                            </a>
                        </p>
                    
                        <p class="text-justify clearfix">
                            <a class="float-right" href="/images/trade-n_img01.jpg" data-toggle="lightbox">
                                <img class="img-fluid paragraph-img" src="images/trade-n_img01.jpg" />
                            </a>
                            福岡貿易会では、情報誌を年に数回発行しています。貿易に役立つ情報や福岡貿易会の活動報告などをお届けしています。
                        </p>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered text-justify">
                                <thead>
                                    <tr class="table-info text-center">
                                        <th>No.</th>
                                        <th>発刊日</th>
                                        <th>主な内容</th>
                                        <th>データ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">From DB</td>
                                        <td class="text-justify">From DB</td>
                                        <td class="text-center">From DB</td>
                                        <td class="text-center">From DB</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-lg-12 border">
                                <ul class="list">
                                    <li>From DB</li>
                                    <li>From DB</li>
                                    <li>From DB</li>
                                    <li>From DB</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection